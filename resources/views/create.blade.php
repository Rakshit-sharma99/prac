<h1>Add movie</h1>
<form action="{{route ('mov.store') }}"method ="POST">
@csrf
<input type="text "name = "movie">
<button type ="submit">
    Save
</button>



</form>
