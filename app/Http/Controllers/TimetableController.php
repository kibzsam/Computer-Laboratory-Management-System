<?php

namespace App\Http\Controllers;

use App\Classy;
use App\Laboratory;
use App\Schedule;
use App\Timetable;
use Illuminate\Http\Request;
use Carbon\Carbon;
class TimetableController extends Controller
{
    //

    public function saveclass(Request $request){
        $classy= New Classy();
        $this->validate($request,[
            'cname'=>'required',
            'unit'=>'required',

        ]);
        $cname=$request->cname;
        $unit=$request->unit;
        $restriction1= Classy::query()->where('classname','=',$cname)->where('unit','=',$unit)->exists();
        $restriction2= Classy::query()->where('day','=',$request->day)->where('time','=',$request->time)
            ->exists();
        if(!$restriction1 || !$restriction2){
            $classy->fill([
                'classname'=>$request->cname,
                'unit'=>$request->unit,
                'day'=>$request->day,
                'time'=>$request->time,

            ])->save();
            $message="Record saved";

        }

        else{
            $message="Another Record Matches this record";
        }


        return back()->with('warning',$message,compact('classes'));
    }
    //editing added class
    public function edit(Request $request){
        $query=Classy::query()->where('id','=',$request->id);
        $this->validate($request,[
            'cname'=>'required',
            'unit'=>'required',
            'day'=>'required',
            'time'=>'required'
        ]);
        $query->update([
            'classname'=>$request->cname,
            'unit'=>$request->unit,
            'day'=>$request->day,
            'time'=>$request->time,

        ]);
        return back()->with('success','Record Successfully Edited');
    }
    public function delete(Request $request){
        $query=Classy::query()->where('id','=',$request->id);
        $query->delete();
        return back()->with('success','Record Deleted Successfully');
    }

   /*public function savelab(Request $request)
    {
        $lab = New Laboratory();
        $this->validate($request, ['lname' => 'required']);
        $name = $request->lname;
        $check = Laboratory::query()->where('labname', '=', $name)->first();
        if (!$check) {
            $lab->fill(['labname' => $request->lname])->save();
            $message = "Computer Laboratory Successfully added";
        } else {
            $message = "This Computer Laboratory Already exists Please add another Computer Laboratory";
        }

        return back()->with('warning', $message);
    }*/
       /* public function schedule(Request $request){
            $schedule= New Timetable();
            $this->validate($request,['class'=>'required','lab'=>'required','day'=>'required','time'=>'required']);
            $restriction1=Timetable::query()->where('computerlab','=',$request->lab)->
            where('day','=',$request->day)
                ->where('time','=',$request->time)->exists();
            if($restriction1){
                $message ="There exist such a record schedule";
            }
            else{$schedule->fill([
                'class' => $request->class,
                'computerlab' => $request->lab,
                'day' => $request->day,
                'time' => $request->time,
            ])->save();
                $message ="Schedule saved successfully";

            }
            return back()->with('warning',$message);
    }*/



    public function schedulesave(Request $request){
        $schedule= New Schedule();
        $this->validate($request,[
            'cname'=>'required',
            'unit'=>'required',
            'day'=>'required',
            'venue'=>'required',
            'time'=>'required',
        ]);

        $condition=Schedule::query()->where('day','=',$request->day)->
        where( 'time','=',$request->time)->where( 'venue','=',$request->venue)->exists();
        $restriction2= Classy::query()->where('classname','=',$request->cname)->where('day','=',$request->day)->where('time','=',$request->time)
        ->exists();

        if ($condition){

            $message="A class has been allocated this computer lab at this time";

        }
        elseif ($restriction2){
            $message=$request->cname."..has another unit allocated at this time";
        }
        else{
            $schedule->fill([
                'classname' => $request->cname,
                'unit' => $request->unit,
                'day' => $request->day,
                'venue'=>$request->venue,
                'time' => $request->time,

            ])->save();
            $delete=Classy::query()->where('id', '=', $request->id);
            $delete->delete();
            /**$update->update([
                'day' => $request->day,
                'time' => $request->time,

            ]);**/
            $message = "Class has been scheduled successfully";

        }


        return back()->with('warning',$message);

    }
    public function gettimetable(){

        return DataTables::of(Schedule::query())->make(true);
    }
}
