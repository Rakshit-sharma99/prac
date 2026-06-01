@extends('layouts.app')

@section('content')

<form action="/add-gamer" method ="POST" enctype="multipart/form-data">

@csrf
<input type="text" name = "gamer_name">
<input type="number" name= "age">
<input type="file" name="image">
<button type="submit">submit</button>

@if($errors->any())
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
@endif


@if(session('success'))
<p>{{session('success')}}</p>
@endif

</form>