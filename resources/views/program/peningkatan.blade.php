<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/program.css')}}">
    <title>Document</title>
</head>
@include('component.navbar')
<body>
<div class="container-program">
    <div class="nav">
        <ul>
            <li><a href="/program" class="a">Program</a></li>
            <li><a href="/program/penelitian" class="a">Penelitian</a></li>
            <li><a href="/program/pengelolaan-sda" class="a">pengelolaan SDA</a></li>
            <li><a href="/program/peningkatan-kapasitas" class="a">Peningkatan Kapasitas</a></li>
            <li><a href="/program/advokasi-kebijakan" class="a">Advokasi Kebijakan</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>{{ $peningkatan['title'] }}</h1>
        <div class="listparagraf">
            <img src="{{ asset($peningkatan['image']) }}" alt="">
        {!! $peningkatan['content'] !!}
      </div>
    </div>
</div>
</body>
@include('component.footer')
<script src="{{asset('js/program.js')}}"></script>
</html>