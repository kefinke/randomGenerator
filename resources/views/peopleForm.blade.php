@extends('_master')

@section('content')
    <form method="post" action="/peopleForm">
    <table>
        <tr><td class="inputTitle">Number of people:</td><td><input type="text" name="number"/></td></tr>
        <tr><td class="inputTitle">Include birthdays:</td> <td><input type="checkbox" name="birthday"/></td></tr>
        <tr><td class="inputTitle">Include profiles:</td> <td><input type="checkbox" name="profile"/></td></tr>
    </table>
    <p>{{$error}}</p>
    <input type="submit"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </form>
@stop