
    <form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image">
    <button type="submit">
        Upload
    </button>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach
@endif



    </form>
    



    <form action="/u"></form>