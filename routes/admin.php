<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();
    $labs=\App\Laboratory::all();
    $classes=\App\Classy::all();
    $timetables=\App\Timetable::query()->where('day','=','Monday')->get();
    $schedules=App\Schedule::all();
    $lab1=App\Requesting::query()->where('venue','=','complab1')->count();
    $lab2=App\Requesting::query()->where('venue','=','complab2')->count();
    $lab3=App\Requesting::query()->where('venue','=','complab3')->count();
    $lab4=App\Requesting::query()->where('venue','=','complab4')->count();
    return view('admin.home',['classes'=>$classes,'labs'=>$labs,'timetables'=>$timetables,'schedules'=>$schedules,'lab1'=>$lab1,
        'lab2'=>$lab2,'lab3'=>$lab3,'lab4'=>$lab4]);
})->name('home');

