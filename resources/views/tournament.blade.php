@extends('layouts.app')

@section('content')

<form action="/tournament" method = "POST" enctype="multipart/form-data">
@csrf
<input type="text " name="name">
<input type="number" name="age">
<input type="email" name="email">
<input type="file" name="pfp">
<button type="submit">Submit</button>



@if($errors->any())
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
@endif

@if(session('success'))
<p>{{session ('success')}}</p>
@endif
</form>