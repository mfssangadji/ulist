@extends('auths.layouts.app')
@section('title', 'Dashboard')
@section('content')
	<div id="header-msg">
    <strong>SELAMAT DATANG</strong> <br>
    Selamat Datang di Control Panel Sistem Informasi Geografis Pemetaan Spot Diving Pulau morotai Berbasis Website
    </div>
	<style type="text/css">
        #header-msg {
            background-color: #DDD;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 20px;
        }

        #img-wel {
            text-align: center;
        }

        .img-wel {
            width: 700px;
            height: 350px;
            border-radius:30px;
        }
    </style>
	<div id="img-wel"><img src="{{ asset('wel.png') }}" alt="" title="" name="slide" class="img-wel"></div>
@endsection