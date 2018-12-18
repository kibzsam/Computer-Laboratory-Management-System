
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CLMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href={{asset('dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->

    <link rel="stylesheet" href={{asset('dist/css/skins/skin-blue.min.css')}}>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href={{url('/welcome')}} class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>CL</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>CLMS</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src={{asset('dist/img/avatar04.png')}} class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->

                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="{{ url('/admin/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src={{asset('dist/img/avatar04.png')}} class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>
                     {{Auth::guard('admin')->user()->name}}
                    </p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->

            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">DASHBOARD</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="#schedule"><i class="fa fa-report"></i> <span>{{Auth::guard('admin')->user()->email}}</span></a></li>
                <li class="active"><a href="{{url('admin/timetable')}}"><i class="fa fa-envelope"></i><span>View Full Timetable</span></a></li>
                <li class="active"><a href="{{url('admin/chart')}}">
                        <i class="fa fa-calendar"></i><span>View Report</span>
                       </a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @include('flash-message')
            @yield('content')
            <h5><strong>WEEKLY REPORT OF FREQUENTLY REQUESTED LABORATORY</strong></h5>

        </section>
        <!-- Main content -->
        <section id="schedule" class="content">
            <div class="row">

                <div class="col-sm-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$lab1}}</h3>
                            <p>Requests</p>
                        </div>
                        <a href="#" class="small-box-footer">Computer Laboratory 1<i class=""></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-sm-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$lab2}}</h3>

                            <p>Requests</p>
                        </div>

                        <a href="#" class="small-box-footer">Computer Laboratory 2<i class=""></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-sm-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$lab3}}</h3>
                            <p>Requests</p>
                        </div>
                        <a href="#" class="small-box-footer">Computer Laboratory 3 <i class=""></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-sm-3 col-xs-3">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$lab4}}</h3>
                            <p>Requests</p>
                        </div>
                        <a href="#" class="small-box-footer">Computer Laboratory 4 <i class=""></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- Your Page Content Here -->
            <div class="panel panel-default">
                <div class="panel-body " style="max-height: 390px;overflow: auto">
                    <!--<a href="{{url('admin/chart')}}"><button type="button" class="btn btn-success pull-right" style="margin-left : 10px">
                            View Report
                        </button></a>-->
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#classmodal">
                        <i class="glyphicon glyphicon-plus"></i> Class
                    </button>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List of Classes and Units to be scheduled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
                        </li>

                    </ul>
                    <!-- TABS FOR Computer labs -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table" style="max-height:30px;" >
                                <thead>
                                <tr>
                                    <th scope="col">Class</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                                </thead>
                                <tbody >
                                @foreach($classes as $class)
                                    <tr>
                                        <td><strong>{{$class->classname}}</strong></td>
                                        <td style="color: blue">{{$class->unit}}</td>
                                        <td>{{$class->day}}</td>
                                        <td>{{$class->time}}</td>

                                        @if(($class->day ==  NULL)&&($class->time == NULL))
                                            <td><button type="button" class="btn btn-success btn-sm-2 " style="margin-left: 20px" data-toggle="modal" data-target="#scheduler"
                                                        data-classname="{{$class->classname}}"
                                                        data-unit="{{$class->unit}}"
                                                        data-day="{{$class->day}}"
                                                        data-stattime="{{$class->time}}"
                                                        data-id="{{$class->id}}">

                                                    Schedule
                                                </button></td>
                                            @else
                                            <td><button type="button" class="btn btn-default btn-sm " style="margin-left: 20px" data-toggle="modal" data-target="#edit"
                                                        data-classname="{{$class->classname}}"
                                                        data-unit="{{$class->unit}}"
                                                        data-day="{{$class->day}}"
                                                        data-stattime="{{$class->time}}"
                                                        data-id="{{$class->id}}">

                                                 Edit
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm " style="margin-left: 20px" data-toggle="modal" data-target="#deleteclass"
                                                        data-id="{{$class->id}}">
                                                    Delete
                                                </button></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                    </div>

                    <!-- Content Wrapper. Contains page content

                    <a href={{url('admin/event/add')}}>EVENT</a>
                    <a href={{url('admin/event')}}>Calendar</a>-->
                   <!-- <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#schedulelab">
                        <i class="glyphicon glyphicon-plus"></i> Schedule Laboratories
                    </button> -->

                    <!-- Modal for deleting Added Classes-->
                    <div class="modal fade modal-danger" id="deleteclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                               DO YOU WANT TO DELETE THIS RECORD
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/deleteclass') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                            <label for="id" class="col-md-4 control-label"></label>
                                            <div class="col-md-6">
                                                <input id="id_delete" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus hidden>
                                                @if ($errors->has('id'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">DELETE</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Editing Modal for classes-->
                    <div class="modal fade modal-success" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="edit">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/editclass') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                            <label for="id" class="col-md-4 control-label"></label>

                                            <div class="col-md-6">
                                                <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus hidden>

                                                @if ($errors->has('id'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
                                            <label for="cname" class="col-md-4 control-label">Class Name</label>

                                            <div class="col-md-6">
                                                <select name="cname" id="cname" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="BCS_year3_sem2">BCS(year 3 semester 2)</option>
                                                    <option value="BIT_year3_sem2">BIT(year 3 semester 2)</option>
                                                    <option value="BCT_year3_sem2">BCT(year 3 semester 2)</option>
                                                    <option value="BBIT_year3_sem2">BBIT(year 3 semester 2)</option>

                                                </select>
                                                @if ($errors->has('cname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('cname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                                            <label for="unit" class="col-md-4 control-label">Unit</label>

                                            <div class="col-md-6">
                                                <input id="unit" type="text" class="form-control" name="unit" value="{{ old('unit') }}" autofocus>

                                                @if ($errors->has('unit'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }}">
                                            <label for="day" class="col-md-4 control-label">Day</label>
                                            <div class="col-md-6">
                                                <select name="day" id="day" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>

                                                </select>
                                                @if ($errors->has('day'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                            <label for="time" class="col-md-4 control-label">Time</label>

                                            <div class="col-md-6">
                                                <select name="time" id="time" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00-11:00">8:00AM-11:00AM </option>
                                                    <option value="11:00-2:00">11:00 AM-2:00PM</option>
                                                    <option value="2:00-5:00">2:00PM-5:00PM</option>
                                                </select>
                                                @if ($errors->has('time'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    <!--<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                                            <label for="end" class="col-md-4 control-label">End Time</label>

                                            <div class="col-md-6">
                                                <select name="end" id="end" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00">8:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="2:00">2:00  PM</option>
                                                    <option value="5:00">5:00 PM</option>
                                                </select>
                                                @if ($errors->has('end'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>-->


                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning">EDIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Scheduling Computer Laboratories -->
                    <div class="modal fade" id="scheduler" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">SCHEDULE COMPUTER LAB</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="schedule">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/saveschedule') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                            <label for="id" class="col-md-4 control-label"></label>

                                            <div class="col-md-6">
                                                <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus hidden>

                                                @if ($errors->has('id'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
                                            <label for="cname" class="col-md-4 control-label">Class Name</label>

                                            <div class="col-md-6">
                                                <input id="cname" type="text" class="form-control" name="cname" value="{{ old('id') }}" autofocus readonly>
                                                @if ($errors->has('cname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('cname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                                            <label for="unit" class="col-md-4 control-label">Unit</label>

                                            <div class="col-md-6">
                                                <input id="unit" type="text" class="form-control" name="unit" value="{{ old('unit') }}" autofocus readonly>

                                                @if ($errors->has('unit'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
                                            <label for="venue" class="col-md-4 control-label">Venue</label>

                                            <div class="col-md-6">
                                                <select name="venue" id="venue" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="complab1">Computer Lab 1</option>
                                                    <option value="complab2">Computer Lab 2</option>
                                                    <option value="complab3">Computer Lab 3</option>
                                                    <option value="complab4">Computer Lab 4</option>

                                                </select>

                                                @if ($errors->has('venue'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }}">
                                            <label for="day" class="col-md-4 control-label">Day</label>
                                            <div class="col-md-6">
                                                <select name="day" id="day" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>

                                                </select>
                                                @if ($errors->has('day'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                            <label for="time" class="col-md-4 control-label">Time</label>

                                            <div class="col-md-6">
                                                <select name="time" id="time" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00-11:00">8:00AM-11:00AM </option>
                                                    <option value="11:00-2:00">11:00 AM-2:00PM</option>
                                                    <option value="2:00-5:00">2:00PM-5:00PM</option>
                                                </select>
                                                @if ($errors->has('time'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!--<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                                            <label for="end" class="col-md-4 control-label">End Time</label>

                                            <div class="col-md-6">
                                                <select name="end" id="end" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00">8:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="2:00">2:00  PM</option>
                                                    <option value="5:00">5:00 PM</option>
                                                </select>
                                                @if ($errors->has('end'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>-->


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">SCHEDULE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Computer Laboratories -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Computer Laboratory</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/savelab') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                            <label for="lname" class="col-md-4 control-label">Computer Lab Name</label>

                                            <div class="col-md-6">
                                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" autofocus>

                                                @if ($errors->has('lname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" data-backdrop="static">Save</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal for adding classes -->
                    <div class="modal fade" id="classmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Classes</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/saveclass') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
                                            <label for="cname" class="col-md-4 control-label">Class <small>(Year_Semester)</small></label>

                                            <div class="col-md-6">
                                                <select name="cname" id="cname" class="form-control" style="max-height: 50px;overflow: auto">
                                                    <option value="">select</option>
                                                    <option value="BCS_year1_sem2">BCS(year 1 semester 2)</option>
                                                    <option value="BCS_year2_sem2">BCS(year 2 semester 2)</option>
                                                    <option value="BCS_year3_sem2">BCS(year 3 semester 2)</option>
                                                    <option value="BCS_year4_sem2">BCS(year 4 semester 2)</option>
                                                    <option value=""></option>
                                                    <option value="BCT_year1_sem2">BCT(year 1 semester 2)</option>
                                                    <option value="BCT_year2_sem2">BCT(year 2 semester 2)</option>
                                                    <option value="BCT_year3_sem2">BCT(year 3 semester 2)</option>
                                                    <option value="BCT_year4_sem2">BCT(year 4 semester 2)</option>
                                                    <option value=""></option>
                                                    <option value="BIT_year1_sem2">BIT(year 1 semester 2)</option>
                                                    <option value="BIT_year2_sem2">BIT(year 2 semester 2)</option>
                                                    <option value="BIT_year3_sem2">BIT(year 3 semester 2)</option>
                                                    <option value="BIT_year4_sem2">BIT(year 4 semester 2)</option>
                                                    <option value=""></option>
                                                    <option value="BCSF_year1_sem2">BCSF(year 1 semester 2)</option>
                                                    <option value="BCSF_year2_sem2">BCSF(year 2 semester 2)</option>
                                                    <option value="BCSF_year3_sem2">BCSF(year 3 semester 2)</option>
                                                    <option value="BCSF_year4_sem2">BCSF(year 4 semester 2)</option>
                                                    <option value=""></option>
                                                    <option value="BIS_year1_sem2">BIS(year 1 semester 2)</option>
                                                    <option value="BIS_year2_sem2">BIS(year 2 semester 2)</option>
                                                    <option value="BIS_year3_sem2">BIS(year 3 semester 2)</option>
                                                    <option value="BIS_year4_sem2">BIS(year 4 semester 2)</option>
                                                    <option value=""></option>
                                                    <option value="BBIT_year1_sem2">BBIT(year 1 semester 2)</option>
                                                    <option value="BBIT_year2_sem2">BBIT(year 2 semester 2)</option>
                                                    <option value="BBIT_year3_sem2">BBIT(year 3 semester 2)</option>
                                                    <option value="BBIT_year4_sem2">BBIT(year 4 semester 2)</option>

                                                </select>
                                                @if ($errors->has('cname'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('cname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                                            <label for="unit" class="col-md-4 control-label">Unit</label>

                                            <div class="col-md-6">
                                                <input id="unit" type="text" class="form-control" name="unit" value="{{ old('unit') }}" autofocus>

                                                @if ($errors->has('unit'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }}">
                                            <label for="day" class="col-md-4 control-label">Day</label>
                                            <div class="col-md-6">
                                                <select name="day" id="day" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>

                                                </select>
                                                @if ($errors->has('day'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                        <label for="start" class="col-md-4 control-label">Time</label>

                                            <div class="col-md-6">
                                                <select name="time" id="time" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00-11:00">8:00AM-11:00AM </option>
                                                    <option value="11:00-2:00">11:00 AM-2:00PM</option>
                                                    <option value="2:00-5:00">2:00PM-5:00PM</option>
                                                </select>
                                                @if ($errors->has('time'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <!--<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                                            <label for="end" class="col-md-4 control-label">End Time</label>

                                            <div class="col-md-6">
                                                <select name="end" id="end" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00">8:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="2:00">2:00  PM</option>
                                                    <option value="5:00">5:00 PM</option>
                                                </select>
                                                @if ($errors->has('end'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>-->


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">ADD</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!--<div class="row">
        <div class=" panel panel-default">
            <div class="panel-heading">Timetable</div>
            <div class="panel-body">
                <<a href="{{url('admin/timetable')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                        VIEW FULL TIMETABLE</button>
                </a>
                <!--<table class="table" >
                    <thead>
                    <tr>
                        <th scope="col">Class</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Day</th>
                        <th scope="col">Time</th>
                        <th scope="col">Venue</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)
                        <tr>
                            <td>{{$schedule->classname}}</td>
                            <td>{{$schedule->unit}}</td>
                            <td>{{$schedule->day}}</td>
                            <td>{{$schedule->time}}</td>
                            <td>{{$schedule->venue}}</td>

                    @endforeach
                    </tbody>
                </table>
                <!--
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Monday</th>

                        </tr>

                    </tbody>
                </table>-->
            </div>
        </div>
    </div>-->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="#">CLMS</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading"></h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading"></h4>

                                <p></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery 2.2.3 -->

<!-- Bootstrap 3.3.6 -->
<script src=={{asset('bootstrap/js/bootstrap.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/app.min.js')}}></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
<script>
    $('#scheduler').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var classname = button.data('classname')
        var unit = button.data('unit')
        var day = button.data('day')
        var stattime = button.data('stattime')
        var endtime = button.data('endtime')
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #cname').val(classname)
        modal.find('.modal-body #unit').val(unit)
        modal.find('.modal-body #day').val(day)
        modal.find('.modal-body #time').val(stattime)
        modal.find('.modal-body #id').val(id)
    })
</script>
<script>
    $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var classname = button.data('classname')
        var unit = button.data('unit')
        var day = button.data('day')
        var stattime = button.data('stattime')
        var endtime = button.data('endtime')
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #cname').val(classname)
        modal.find('.modal-body #unit').val(unit)
        modal.find('.modal-body #day').val(day)
        modal.find('.modal-body #time').val(stattime)
        modal.find('.modal-body #id').val(id)
    })
</script>
<script>
    $('#deleteclass').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #id_delete').val(id)
    })
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
