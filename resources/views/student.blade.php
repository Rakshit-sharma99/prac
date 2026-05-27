<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
{{$name}}
<h2>{{$course}}</h2>
<ul>

@isset($skills)
    @foreach($skills as $skill)
    <li>{{$skill}}</li>
    @endforeach
@endisset
</ul>
</body>
</html>