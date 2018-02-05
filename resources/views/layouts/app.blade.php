<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/style.css') }}apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Total Fitness') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
</head>
<body>
        <div class="wrapper">
                @include('inc.menu')
                <div class="main-panel">
                        @include('inc.navbar')
                        <div class="content">
                        @include('inc.messages')
                        @yield('content')
                    </div>
        </div>
    
        <!-- Scripts -->
        <script src="{{ asset('js/light-bootstrap-dashboard.js') }}"></script>
        <!--   Core JS Files   -->
        <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
        <!--  Chartist Plugin  -->
        <script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
        <!--  Share Plugin -->
        <script src="{{ asset('js/plugins/jquery.sharrre.js') }}"></script>
        <!--  jVector Map  -->
        <script src="{{ asset('js/plugins/jquery-jvectormap.js') }}" type="text/javascript"></script>
        <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
        <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
        <!--  DatetimePicker   -->
        <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}"></script>
        <!--  Sweet Alert  -->
        <script src="{{ asset('js/plugins/sweetalert2.min.js') }}" type="text/javascript"></script>
        <!--  Tags Input  -->
        <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
        <!--  Sliders  -->
        <script src="{{ asset('js/plugins/nouislider.js') }}" type="text/javascript"></script>
        <!--  Bootstrap Select  -->
        <script src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
        <!--  jQueryValidate  -->
        <script src="{{ asset('js/plugins/jquery.validate.min.js') }}" type="text/javascript"></script>
        <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('js/plugins/jquery.bootstrap-wizard.js') }}"></script>
        <!--  Bootstrap Table Plugin -->
        <script src="{{ asset('js/plugins/bootstrap-table.js') }}"></script>
        <!--  DataTable Plugin -->
        <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
        <!--  Full Calendar   -->
        <script src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
    </body>
    </html>



    