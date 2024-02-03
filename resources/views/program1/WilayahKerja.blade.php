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
            <li><a href="/program/Produk-Komunitas" class="a">Produk Komunitas</a></li>
            <li><a href="/program/Produk-Pengetahuan" class="a">Produk Pengetahuan</a></li>
            <li><a href="/program/Wilayah-Kerja" class="a">Wilayah Kerja</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>{{ $WilayahKerja['title'] }}</h1>
        <div class="listparagraf">
            <img src="{{ asset($WilayahKerja['image']) }}" alt="">
        {!! $WilayahKerja['content'] !!}
      </div>
    </div>
</div>
</body>
@include('component.footer')
<script src="{{asset('js/program.js')}}"></script>
</html>