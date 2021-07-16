{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Yield-System') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}"> --}}
    <link href="{{asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
</head>

<style>
    body {
        background-color: #f7f7f7 ;
height: 100vh
/* background-image: url("https://www.transparenttextures.com/patterns/45-degree-fabric-light.png") !important; */
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you!background-color: #008c41; */
/* background-image: url("https://www.transparenttextures.com/patterns/cartographer.png"); */
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
    }
</style>
<body>

<div id="app">
    <div class="container-fluid">
        <div style="background-color: rgba(0,0,0,0.025)" class="row"  style="padding: 0px;">
        <div class="col-12" style="padding: 0">
            <router-view name="nav"></router-view>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2" style=" padding: 0px; background: #F1F1F1 !important">
        <router-view name="sidebar"></router-view>  
        </div>
        <div class="col-md-10 col-lg-10 col-xl-10 padding-0" style=" min-height: 1280px; background: #fff !important ">
        <router-view></router-view>
        </div>   

    </div>


    </div>
    
        
           
        

</div>  



<script src="{{asset('js/app.js')}}"></script>

<script>




    
</script>
</body>
</html>

