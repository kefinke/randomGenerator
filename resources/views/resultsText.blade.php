@extends('_master')

@section('content')
    <h1>{{$number}} Pieces of Wisdom</h1>
    <ul>
        @foreach($paragraphs as $line)
            <li>{{$line}}</li>
        @endforeach
    </ul>
@stop