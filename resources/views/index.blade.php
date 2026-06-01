<h1>
    All Moviees
</h1>


<ul>
@foreach($mov as $m)
<li>{{$m}}</li>
@endforeach


</ul>


<a href="{{route('movies.create)}}">Add movie</a>
