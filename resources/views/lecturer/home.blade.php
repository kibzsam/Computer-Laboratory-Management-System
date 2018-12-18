@extends('lecturer.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lecturer's Dashboard</div>
                <div class="panel-body">
                    @include('flash-message')
                    @yield('content')
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Request for free Computer Laboratory
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Request for Computer Laboratory</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/lecturer/requestlab') }}">
                                        {{ csrf_field() }}


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
                                        <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
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
                                            <label for="end" class="col-md-4 control-label">To</label>

                                            <div class="col-md-6">
                                                <select name="end" id="end" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="8:00">8:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="2:00">2:00  PM</option>
                                                    <option value="5:00">5:00 PM</option>
                                                </select>
                                                @if ($errors->has('time'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>-->


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Request</button>
                                        </div>
                                    </form>


                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading">Timetable</div>

                <div class="panel-body">
                    <a href="{{url('lecturer/timetable')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
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
                    </table>-->
                </div>

            </div>
        </div>
    </div>
@endsection
