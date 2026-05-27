<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>Error: {{ $error }}</div>
    @endforeach @endif
    <h1>Input form</h1>
    <form method="POST" action="/register">
    @csrf
      Name:  <input type="text" id="name" name="name"><br><br>
    <!-- @error('name')<p>Error: {{ $message }}</p>@enderror -->
 Email:   <input type="email" id="email" name="email"><br><br>
    <!-- @error('email')<p>Error: {{ $message }}</p>@enderror -->
    
 Password:   <input type="password" id="password" name="password"><br><br>
    <!-- @error('password')<p>Error: {{ $message }}</p>@enderror -->

        <button type="submit">Submit</button>



    </form>
</body>
</html>