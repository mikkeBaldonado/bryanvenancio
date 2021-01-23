@extends('layouts.admin.app')
@section('meta')
    
@stop
@section('content')
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                <div class="card ">
                    <img class="card-img" src="{{ asset('images/authentication/vuexy-login-bg.jpg') }}" alt="Card image">
                    <div class="card-img-overlay text-center">
                        <h2 class="">Welcome {{ Auth::user()->name }},</h2>
                        <p class="card-text">You have done successfully login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop