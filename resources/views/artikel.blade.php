<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/artikel.css')}}" />
    <link rel="icon" href="img/logo.png">
    <title>Menapak Indonesia</title>
  </head>
  <body>
    @include('component.navbar')
    <div class="maincontainerartikel">
      <h1>artikel</h1>
      <div class="subcontainerartikel">
@foreach($data as $item)
        <div class="artikel">
            <div class="imageartikelcontainer">
                <img src="{{asset('img/2.jpg')}}" />
            </div>
            <div class="contentartikelcontainer">
                <h2>{{$item->article_title}}</h2>
                <div class="tanggal">
                    <p>{{$item->nama_admin}} |</p><br>
                    <p> {{$item->published_date}}</p>
                </div>
                <div class="link">
                    <a href="" class="lihat">Lihat</a>
                    <a href="" class="download">Download PDF</a>
                </div>
            </div>
        </div>
@endforeach
      </div>
    </div>
    @include('component.footer')
  </body>
</html>
