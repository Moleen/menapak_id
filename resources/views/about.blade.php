<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logo.png">
    <title>Menapak Indonesia</title>
  </head>
  <body>
    @include('component.navbar')
    <div class="containerTentang">
      <div class="navTentang">
        <ul>
          <li onclick="scrollToDiv('sejarah')" class="active">Sejarah</li>
          <li onclick="scrollToDiv('organisasi')">Organisasi</li>
          <li onclick="scrollToDiv('kegiatanKami')">Kegiatan Kami</li>
        </ul>
      </div>
      <div class="contentTentang">
        @include('about.about_sejarah')
        @include('about.about_organisasi')
        @include('about.about_kegiatanKami')
      </div>
    </div>
  </body>
  @include('component.footer')
</html>
<link rel="stylesheet" href="{{asset('css/about.css')}}" />

<script src="js/about.js"></script>
