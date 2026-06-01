@extends('layouts.app')

@section('content')

<h1> Gamer Profile</h1>
<h2>Name : {{$name}}</h2>
<h3>Games: {{$game}}</h3>
<h3>rank: {{$rank}}</h3>
<h3>Skills:</h3>

<ul>
@foreach($skills as $skill)
<li>{{$skill}}</li>
@endforeach

</ul>

@if($rank=='Mortal')
<h2>Pro Player</h2>
@else
<h2>Noob</h2>
@endif


@endsection