<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('student')->user();
    $schedules=App\Schedule::all();
    //dd($users);

    return view('student.home',['schedules'=>$schedules]);
})->name('home');

