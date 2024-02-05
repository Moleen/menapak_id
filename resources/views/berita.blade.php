<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/berita.css')}}" />
    <title>Document</title>
  </head>
  <body>
    @include('component.navbar')
    <div class="maincontainerberita">
      <h1>berita</h1>
      <div class="subcontainerberita">
<!-- loop -->
        <div class="berita">
            <div class="imageberitacontainer">
                <img src="{{asset('img/2.jpg')}}" />
            </div>
            <div class="contentberitacontainer">
                <h2>Judul berita</h2>
                <div class="tanggal">
                    <p>menapak Indonesia |</p><br>
                    <p> 01 01 2024</p>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
<!-- end loop -->
      </div>
      <div class="pagination">'
        <!-- pagination disini -->
      </div>
    </div>
    @include('component.footer')
  </body>
</html>
