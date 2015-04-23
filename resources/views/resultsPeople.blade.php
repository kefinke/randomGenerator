@extends('_master')

@section('content')
    <h1>Your Top {{$number}} Enemies to Defeat</h1>
    <ul>
        @foreach($people as $line)
            <li>{{$line->firstname}}  {{$line->lastname}}{{$line->profile}}{{$line->birthday}}</li>
        @endforeach
    </ul>
@stop