@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>

<form >
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 

@endsection