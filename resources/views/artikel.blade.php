<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/artikel.css')}}" />
    <title>Document</title>
  </head>
  <body>
    @include('component.navbar')
    <div class="maincontainerartikel">
      <h1>artikel</h1>
      <div class="subcontainerartikel">
<!-- loop -->
        <div class="artikel">
            <div class="imageartikelcontainer">
                <img src="{{asset('img/2.jpg')}}" />
            </div>
            <div class="contentartikelcontainer">
                <h2>Judul Artikel</h2>
                <div class="tanggal">
                    <p>menapak Indonesia |</p><br>
                    <p> 01 01 2024</p>
                </div>
                <div class="link">
                    <a href="" class="lihat">Lihat</a>
                    <a href="" class="download">Download PDF</a>
                </div>
            </div>
        </div>
<!-- end loop -->
      </div>
    </div>
    @include('component.footer')
  </body>
</html>
