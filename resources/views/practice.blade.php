
<form action="/practice" enctype="multipart/form-data" method="POST">

    @csrf
    
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="file" name= "profile">
    <button type="submit">Submit </button>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif

  

</form>