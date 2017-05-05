@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>{{ Auth::user()->profile->city }}</p>
                    <p>{{ Auth::user()->profile->about }}</p>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
