<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    //

    public function store(Request $request)
    {
        $event= New Event();
        $event->title=$request->get('title');
        $event->start_date=$request->get('startdate');
        $event->end_date=$request->get('enddate');
        $event->save();
        return redirect('event')->with('success', 'Event has been added');
    }

    public function createEvent()
    {
        return view('createevent');
    }

    public function calender()
    {
        $events = [];
        $data = Event::all();
        if($data->count())
        {
            foreach ($data as $key => $value)
            {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime( $value->start_date),
                    new \DateTime($value->end_date.'+1 day'),
                    null,
                    // Add color
                    [
                        'color' => '#000000',
                        'textColor' => '#008000',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('calendar', compact('calendar'));
    }
}
