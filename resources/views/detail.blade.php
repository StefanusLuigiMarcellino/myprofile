@extends('master')

@section('title', $project["name"])

@section('content')
    <div class="container">
        <div class="row justify-content-center mx-auto" style="width: 70vw; height: 33vw; margin-top: 10vw; border-radius: 2vw;
         @if($project["complexity"] == 'Low')
            background-color: lime;
        @elseif($project["complexity"] == 'Medium')
            background-color: cyan;
        @elseif($project["complexity"] == 'High')
            background-color: gold;
        @endif">
            <div class="col-md-5 pt-5">
                <img src="/img/{{ $project["picture"] }}" class="card-img" style="height: 24vw" alt="">
            </div>
            <div class="col-md-5 pt-4">
                <div class="card-body">
                    <h5 class="card-title text-center mb-2">{{ $project["name"] }}</h5>
                    <p class="card-text">{{ $project["desc"] }}</p>
                    <p class="card-text">Complexity: {{ $project["complexity"] }}</p>
                    <p class="card-text">Team: {{ $project["team"] }}</p>
                    <p class="card-text">Time: {{ $project["duration"] }}</p>
                    <a href="{{ $project["github"] }}" class="link">Click here to visit my Github Repository</a>
                </div>
            </div>
        </div>
    </div>

@endsection
