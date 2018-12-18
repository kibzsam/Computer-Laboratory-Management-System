<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signup', 'LinksController@register')->name('signup');
Route::get('/welcome', 'LinksController@welcome')->name('welcome');
Route::get('/signin', 'HomeController@sigin')->name('signin');


//admin guard
Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();
    $classes=\App\Classy::all();
    $labs=\App\Laboratory::all();
    $timetables=\App\Timetable::all();
    $schedules=App\Schedule::all();
    $lab1=App\Requesting::query()->where('venue','=','complab1')->count();
    $lab2=App\Requesting::query()->where('venue','=','complab2')->count();
    $lab3=App\Requesting::query()->where('venue','=','complab3')->count();
    $lab4=App\Requesting::query()->where('venue','=','complab4')->count();
    return view('admin.home',['classes'=>$classes,'labs'=>$labs,'timetables'=>$timetables,'schedules'=>$schedules,
        'lab1'=>$lab1,'lab2'=>$lab2,'lab3'=>$lab3,'lab4'=>$lab4]);
})->name('home');
///////
/// Student Guard
Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('student')->user();
    $schedules=App\Schedule::all();

    //dd($users);
    return view('student.home',['schedules'=>$schedules]);
})->name('home');

////Lecturer Guard
///
Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('lecturer')->user();
    $schedules=App\Schedule::all();

    return view('lecturer.home',['schedules'=>$schedules]);
})->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/event/add','EventController@createEvent');
    Route::post('/eventstore','EventController@store');
    Route::get('/event','EventController@calender');

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
  Route::resource('timetable', 'UsersController');
  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');
  Route::post('/saveclass', 'TimetableController@saveclass');
  Route::post('/savelab', 'TimetableController@savelab');
  Route::post('/schedule', 'TimetableController@schedule');
  Route::post('/saveschedule', 'TimetableController@schedulesave');
  Route::post('/editclass', 'TimetableController@edit');
  Route::post('/deleteclass', 'TimetableController@delete');
  Route::get('/chart','ChartController@chart');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'student'], function () {
  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::post('/logout', 'StudentAuth\LoginController@logout')->name('logout');


  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');
  Route::post('/requestlab', 'RequestController@requestlab');
  Route::resource('timetable', 'UsersController');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'lecturer'], function () {
  Route::get('/login', 'LecturerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'LecturerAuth\LoginController@login');
  Route::post('/logout', 'LecturerAuth\LoginController@logout')->name('logout');
  Route::resource('timetable', 'UsersController');
  Route::get('/register', 'LecturerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'LecturerAuth\RegisterController@register');
  Route::post('/requestlab', 'RequestController@requestlab');

  Route::post('/password/email', 'LecturerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'LecturerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'LecturerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'LecturerAuth\ResetPasswordController@showResetForm');
});
