<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLMS</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset('landing/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset('landing/css/scrolling-nav.css')}} rel="stylesheet">

</head>

<div id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">CLMS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href={{url('student/login')}}>Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href={{url('lecturer/login')}}>Lecturer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href={{url('admin/login')}}>Administrator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row" style="background-image:url({{asset('/images/compimaged.jpg')}}) ;background-position: center; height: 500px; color: #fff; background-attachment: fixed;">
        <div class="ow" style="margin-top: 150px; margin-left: 200px;">
            <div class="cl-md-2">
            </div>
            <div class="cl-md-10">
                <h1>COMPUTER LABORATORY MANAGEMENT SYSTEM</h1><br>

            </div>
        </div>

    </div>
    <div id="about" class=" text-black" style="background-color: #f2dede">
        <div class="container" style="">
            <div class="row">
                <div class="col-lg-6 mx-auto">


                </div>
            </div>
        </div>
    </div>
    </section>

</div>
<br>
<div class="col-md-12" style="text-decoration-color: #00a7d0">
    <div clas="cl-md-6" style="padding-top: 7px">
        <h4 style="color:cornflowerblue" align="center">

        </h4>
    </div>
    <div class="my-5-sm-auto">

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class ="text-center"  le="color: #00b3ee;margin-bottom: 20px;margin-top: 50px">More</h2>
            <h5 class ="text-center" style="align-items: flex-start"> Get priviledge by using this system that aims at optimization and efficiency for all users....</h5>
            <h5 class ="text-center">Computer laboratories are managed and utilized in a convient way as the users problems are solved</h5>
            <h5 class ="text-center" style="margin-bottom: 150px">The system looks foward to impact users as they use it</h5>
        </div>
        <!--<div class="col-md-5 ">
            <h3 style="color: #00b3ee">Comments</h3>
            <div class="panel panel-default">
                <form class="" role="form"method="POST"  }}>
                    {{ csrf_field() }}
                    {{--email--}}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class=" control-label" >E-Mail Address</label>
                        <input placeholder="Enter email address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus style="margin-right: 700px">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>
                    {{--comment--}}
                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">

                        <label for="comment" class=" control-label">Comment</label>
                        <textarea placeholder="comment" id="comment" class="form-control" rows="3"></textarea>
                        @if ($errors->has('comment'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-6">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>-->
    </div>

</div>

<!-- Footer -->
<footer class="py-5 "style="background-color: #0f0f0f">
    <div class="container">
        <p class="m-0 text-center text-white"> Copyright &copy; CLMS 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src={{asset('landing/vendor/jquery/jquery.min.js')}}></script>
<script src={{asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

<!-- Plugin JavaScript -->
<script src={{asset('landing/vendor/jquery-easing/jquery.easing.min.js')}}></script>

<!-- Custom JavaScript for this theme -->
<script src={{asset('landing/js/scrolling-nav.js')}}></script>

</body>
</html>
