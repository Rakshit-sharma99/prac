<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Student details</h1>
@if(session('success'))
<p>{{session('succsss')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <span style="color: red">{{$error}}</span>
    @endforeach
@endif

<form action="/submit" method ="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="email" name="email" placeholder="Enter Email">
        <br><br>

        <button type="submit">Submit </button>


    </form>


</body>
</html> 