<?php

namespace App\Http\Controllers;
use App\Requesting;
use App\Schedule;
use Illuminate\Http\Request;
class RequestController extends Controller
{
    //
    public function requestlab(Request $request){
        $req=New Requesting();
        $this->validate($request,[
            'day'=>'required',
            'venue'=>'required',
            'time'=>'required',
        ]);
        $condition=Schedule::query()->where('day','=',$request->day)->
        where( 'time','=',$request->time)->
        where( 'venue','=',$request->venue)->exists();
        if (!$condition){
            $message = "The Computer Laboratory  ".$request->venue."  is Free at this Period";
            $req->fill([
                'venue'=>$request->venue,
                'day'=>$request->day,
                'time'=>$request->time,
            ])->save();

        }
        else{
            $message="There is a class at...".$request->venue. "  between this period...".$request->start;
        }


        return back()->with('success',$message);
    }
}
