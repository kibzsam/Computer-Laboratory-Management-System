<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('lecturer')->user();
    $schedules=App\Schedule::all();
    //dd($users);

    return view('lecturer.home',['schedules'=>$schedules]);
})->name('home');


