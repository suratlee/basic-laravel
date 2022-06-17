<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>เกี่ยวกับระบบงาน</h1>
    ติดต่อเราที่ {{$address}} <br/>
    โทร {{$tel}} <br/>
    e-mail {{$email}} <br/>
    Status {{$error}} <br/>
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('adm')}}">Admin</a>
    <a href="{{route('mem')}}">Member</a>
    <a href="{{route('aboutme')}}">About</a>
</body>
</html>