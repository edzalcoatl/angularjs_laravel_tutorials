@extends('layouts.app')

@section('content')
    <h1> AngularJS Example </h1>
    <div ng-app="">
        <p>Name:</p> <input type="text" ng-model="name"></p>
        <p>Last Name:</p> <input type="text" ng-model="lname"></p>
        <p ng-bind="name + ' ' + lname"></p>
        <p> My First expression: {{5 + 5}}</p>
    </div>
    
 @endsection