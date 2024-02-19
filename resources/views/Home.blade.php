<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/beranda.css')}}" />
    <link rel="icon" href="img/logo.png">
    <title>Menapak Indonesia</title>
  </head>
  @include('component.navbar')
  <body>
    <div class="slider-container">
      <div id="slider" class="slider">
        <div class="slide">
          <a href="">
            <div class="title">
              <p>
                Lorem Ipsum is simply dummy text of the printing an d
                typesetting industry. Lorem Ipsum has been the indu stry's
                standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type
                specimen book.
              </p>
              <i class="fa-solid fa-angle-right "></i>
            </div>
            <img src="{{asset('img/3.jpg')}}" alt="Image 3" />
          </a>
        </div>
      </div>
      <button class="prev-btn"><i class="fa-solid fa-angle-left "></i></button>
      <button class="next-btn"><i class="fa-solid fa-angle-right "></i></button>
    </div>
    <div class="container1">
      <div class="sub1">
        <a class="title1" href="/tata-kelola-kawasan">
          <h2>Tata Kelola Kawasan</h2>
          <div class="kawasan"></div>
        </a>
      </div>
      <div class="sub2">
        <div class="title2">
          <a href="/penelitian"
            ><p data-text="Penelitian">Penelitian</p>
            <img src="img/1.jpg" alt=""
          /></a>
        </div>
        <div class="title3">
          <a href="/pengelolaan-sda"
            ><p data-text="Pengolahan SDA">Pengolahan SDA</p>
            <img src="img/2.jpg" alt=""
          /></a>
        </div>
      </div>
      <div class="sub3">
        <div class="title4">
          <a href="/peningkatan-kapasitas"
            ><p>Peningkatan Kapasitas</p>
            <img src="img/3.jpg" alt=""
          /></a>
        </div>
        <div class="title5">
          <a href="/advokasi-kebijakan"
            ><p>Advokasi Kebijakan</p>
            <img src="img/1.jpg" alt=""
          /></a>
        </div>
      </div>
    </div>
    <!-- end container 1 -->

    <div class="container2">
      <div class="sub1">
        <h2 class="judulsub">Berita</h2>
        <div class="continerberita">
          @if ($data) 
            @foreach($data as $dt)
          <div class="berita">
            <a href="" class="imagehref"><img src="img/1.jpg" alt="" /></a>
            <a href="{{url('news/' . $dt['slug'])}}" class="judulhref">
              <h1>{{$dt['news_title']}}</h1>
              <p>{{substr($dt['news_details'],0,100)}}...</p>
              <div class="calendar">
                <p>
                  <i class="fa-regular fa-calendar-days"></i>
                  {{$dt['published_date']}}
                </p>
                <p><i class="fa-regular fa-eye"></i> x1</p>
              </div>
            </a>
          </div>
          @endforeach @else
          <p>No data available.</p>
          @endif
        </div>
        <a href="/berita" class="selengkap"
          >selengkapnya<i class="fa-solid fa-chevron-right fa-1x"></i></a>
      </div>
      <div class="sub2">
        <div class="title1">
          <h2>Produk Komunitas</h2>
          <a href="/program/Produk-Komunitas">
            <img src="img/1.jpg" alt="">
            <p>Lihat lebih banyak</p>
          </a>
        </div>
        <div class="title2">
          <a href="/program/Produk-Pengetahuan"><h1>Produk Pengetahuan</h1></a>
        </div>
        <div class="title3">
          <a href="/program/Wilayah-Kerja"><h1>Wilayah Kerja</h1></a>
        </div>
      </div>
      <div class="sub3">
        <h1>Instagram</h1>
        <div class="sub3container">
          <!-- instagram -->
        </div>
      </div>
    </div>
  </body>
  @include('component.footer')
  <script src="js/beranda.js"></script>
</html>
