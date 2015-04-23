@extends('_master')

@section('content')
    <form method="post" action="/textForm">
        <p class="inputTitle">Number of Paragraphs:</p> <br/>
        <input type="text" name="number"/>
        <p>{{$error}}</p>
        <input type="submit"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </form>
@stop