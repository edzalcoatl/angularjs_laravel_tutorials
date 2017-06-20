@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1> {{$title}}</h1>
        <p>This is a laravel application from a laravel tutorial.</p>
        <p><a class="btn btn-primary btn-lg" href="/laravel/lsapp/public/login" role="botton">Login</a> <a class="btn btn-success btn-lg" href="/laravel/lsapp/public/register" role="botton">Register</a>
    </div>
 @endsection