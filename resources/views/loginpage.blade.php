<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <p class="color: bg-red-600">{{$error}}</p>
    @endforeach
@endif
    <form action="/submiting" method="POST">
@csrf
<input type="text" name="name" placeholder="Enter Your Name">

<input type="password" name="password" placeholder="Enter Your Pass">
<button type="submit">Submit</button>

    </form>
    @if(session('success'))
    <p class="color: bg-green-600">{{session('success')}}</p>
    @endif


</body>
</html>