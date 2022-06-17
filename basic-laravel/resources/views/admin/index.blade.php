<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP $user = "Surat"; ?>
    <h1>Hello {{ $user }}</h1>

    @if($user=="Surat")
        <h1>ผู้ใช้ท่านนี้เป็น ADMIN</h1>
    @else
        <h1>ผู้ใช้ท่านนี้เป็น Member</h1>
    @endif

    <?PHP $arr = array("Home","Member","About","Contact"); ?>
    
    @foreach ($arr as $menu)
        <a href="">{{$menu}}</a>    
    @endforeach

    <ul>
    @for ($i = 1; $i <= 5; $i++)
        <li> {{$i}} </li>
    @endfor
    </ul>

</body>
</html>