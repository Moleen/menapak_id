<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/program.css')}}">
    <link rel="icon" href="img/logo.png">
    <title>Menapak Indonesia</title>
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
        <div class="listprodukkomunitas">
        <div class="produk">
                <h2>Lorem ipsum</h2>
                <a href="">
                    <img src="{{asset('img/1.jpg')}}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos asperiores obcaecati, </p>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
@include('component.footer')
<script src="{{asset('js/program.js')}}"></script>
</html>