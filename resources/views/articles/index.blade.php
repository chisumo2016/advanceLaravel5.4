@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <div class="list-group">
                            @foreach($articles as $article)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <p> {{ $article->title }} </p>

                                        <p style="color: red"> By ({{ $article->owner ->name}})</p>
                                    </h4>
                                    <p class="list-group-item-text"> {{ $article->body }}</p>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
