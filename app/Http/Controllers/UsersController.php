<?php

namespace App\Http\Controllers;
use App\DataTables\UsersDataTable;
use App\Schedule;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('timetable');
    }
}
