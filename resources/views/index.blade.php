@extends('_master')

@section('title')
    Random Generator
@stop

@section('head')
@stop

@section('content')
    <h1>Choose your path to the throne</h1>
    <div class="container">
        <a href="/textForm"><div class="generateOption" id="generateText"><div class="background">Read wise lessons</div></div></a>
        <a href="/peopleForm"><div class="generateOption" id="generatePeople"><div class="background">Conquer enemies</div></div></a>
    </div>
@stop