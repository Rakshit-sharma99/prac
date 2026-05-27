<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <h1>Fill Student Details</h1>    
    @if(session('success'))
    <p>{{session('success')}}</p>
    @endif

    @if($errors->any())
        @foreach($errors->any() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif
    

    <form action="{{route('st.submit')}}" method="POST">
    @csrf

    <input type="text"name = "name">
    <input type="email" name="email">
    <input type="password" name="password">
<button type="submit">Submit</button>


    </form>






</body>
</html>