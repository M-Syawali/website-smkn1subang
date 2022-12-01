<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Tes</title>
</head>
<body>
    <nav>
        <ul>
            <h1>Website Smkn 1 subang | @yield('title')</h1>
            <li><a href="{{url ('home')}}">Home</a></li>
            <li><a href="{{url ('program')}}">Program</a></li>
            <li><a href="{{url ('dataguru')}}">Data Guru</a></li>
            <li><a href="{{url ('datakelas')}}">Data Kelas</a></li>
        </ul>
    </nav>
    <hr>
    <div>
        @yield('content')
    </div>
</body>
</html>