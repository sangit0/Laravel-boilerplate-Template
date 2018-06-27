<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>
<body class="hold-transition skin-black sidebar-mini">
        <div class="wrapper">
            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.navigation')
            @include('layouts.navbar')
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">{{Request::path()}}</li>
                    </ol>
                </section>

                <!-- Main content -->
                {{-- loadder --}}
                <section class="content" >
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                    <br>
                    @yield('content')
                </section>
            </div>
            @include('layouts.footer')

        </div>
</body>      
</html>
