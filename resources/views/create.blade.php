<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>
    <div id="content"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{route('company.index')}}" class="btn btn-success mt-3 mr-auto">See All Posts</a>

        <a id="log-link" class="btn btn-warning">Logout</a>

    </nav>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('images/bg-01.jpg') }}');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

<form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Company Fields --}}
    <div class="wrap-input100 validate-input" data-validate="company name is required">
        <span class="label-input100">Company Name</span>
        <input class="input100" id="company_name" type="text" name="company_name" placeholder="Type company name">
        <span class="focus-input100" data-symbol="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="company email is required">
        <span class="label-input100">Company Email</span>
        <input class="input100" id="company_email" type="email" name="company_email" placeholder="Type company email">
        <span class="focus-input100" data-symbol="&#xf159;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="company website is required">
        <span class="label-input100">Company Website</span>
        <input class="input100" id="company_website" type="url" name="company_website" placeholder="Type company website">
        <span class="focus-input100" data-symbol="&#xf0ac;"></span>
    </div>

    {{-- Employee Fields --}}
    <div class="wrap-input100 validate-input" data-validate="employee first name is required">
        <span class="label-input100">Employee First Name</span>
        <input class="input100" id="employee_first_name" type="text" name="employee_first_name" placeholder="Type employee first name">
        <span class="focus-input100" data-symbol="&#xf2c1;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="employee last name is required">
        <span class="label-input100">Employee Last Name</span>
        <input class="input100" id="employee_last_name" type="text" name="employee_last_name" placeholder="Type employee last name">
        <span class="focus-input100" data-symbol="&#xf2c1;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="employee email is required">
        <span class="label-input100">Employee Email</span>
        <input class="input100" id="employee_email" type="email" name="employee_email" placeholder="Type employee email">
        <span class="focus-input100" data-symbol="&#xf159;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="employee phone is required">
        <span class="label-input100">Employee Phone</span>
        <input class="input100" id="employee_phone" type="text" name="employee_phone" placeholder="Type employee phone">
        <span class="focus-input100" data-symbol="&#xf095;"></span>
    </div>
 <div class="wrap-input100">
        <span class="label-input100">Employee Image</span>
        <input class="input100" id="image" type="file" name="image">
    </div>
    <br>
    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
                Save
            </button>
        </div>
    </div>

</form>

<div></div>

               @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            </div>

        </div>
    </div>
    </div>


    <div id="dropDownSelect1"></div>
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('vendor/js/ajax.js') }}"></script>


    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
