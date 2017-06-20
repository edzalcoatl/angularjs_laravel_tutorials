@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-md-7 col-md-offset-2">
            <h1> AngularJS Example </h1>
            <div ng-app="">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" ng-model="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" ng-model="lname" placeholder="Last Name">
                    </div>
                </form>
                <div class="alert alert-warning"><span ng-bind="name + ' ' + lname"></span></div>
                <div class="alert alert-success"><p> My First expression: {{5 + 5}}</p></div>
            </div>
        </div>
    </div>
    
</div>
 @endsection