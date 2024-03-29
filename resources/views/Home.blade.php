<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/beranda.css')}}" />

    <title>Document</title>
  </head>
  <body>
    @include('component.navbar')
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
            </div>
            <img src="{{asset('img/1.jpg')}}" alt="Image 1" />
          </a>
        </div>
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
            </div>
            <img src="{{asset('img/2.jpg')}}" alt="Image 2" />
          </a>
        </div>
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
            </div>
            <img src="{{asset('img/3.jpg')}}" alt="Image 3" />
          </a>
        </div>
      </div>

      <button class="prev-btn"><</button>
      <button class="next-btn">></button>
    </div>

    <!-- content 1 -->
    <div class="content1">
      <div class="sub1">
        <div class="title1"><h1>Tata Kelola Kawasan</h1></div>
        <a href="" class="kawasan"></a>
      </div>
      <div class="sub2">
        <div class="title2">
          <a href=""><img src="img/1.jpg" alt="" /></a>
          <a href=""><p>Penelitian</p></a>
        </div>
        <div class="title3">
          <a href=""><img src="img/2.jpg" alt="" /></a>
          <a href=""><p>Pengelolaan SDA</p></a>
        </div>
      </div>
      <div class="sub3">
        <div class="title4">
          <a href=""><img src="img/2.jpg" alt="" /></a>
          <a href=""><p>Peningkatan Kapasitas</p></a>
        </div>
        <div class="title5">
          <a href=""><img src="img/2.jpg" alt="" /></a>
          <a href=""><p>Advokasi Kebijakan</p></a>
        </div>
      </div>
    </div>
    <!-- end content 1 -->

    <!-- content 2 -->
    <div class="content2">
      <div class="sub1">
        <h1 class="judulsub">Berita</h1>
        <div class="continerberita">
          @if ($data)
                @foreach($data as $dt)
                <div class="berita">
                    <a href="" class="imagehref"><img src="img/1.jpg" alt="" /></a>
                    <a href="{{url('news/' . $dt['slug'])}}" class="judulhref">
                        <h1>{{$dt['news_title']}}</h1>
                        <p>
                            {{substr($dt['news_details'],0,100)}}...
                        </p>
                        <div class="calendar">
                            <p><i class="fa-regular fa-calendar-days"></i> {{$dt['published_date']}}</p>
                            <p><i class="fa-regular fa-eye"></i> x1</p>
                        </div>
                    </a>
                </div>
                @endforeach
            @else
                <p>No data available.</p>
            @endif
        </div>
      </div>
      <div class="sub2">
        <div class="title1">
          <h1>Produk Komunitas</h1>
          <div class="containerimg221">
            <a href="">
              <img src="img/1.jpg" alt="" />
            </a>
          </div>
        </div>
        <div class="title2">
          <a href=""><h1>Produk Pengetahuan</h1></a>
        </div>
        <div class="title3">
          <a href=""><h1>Wilayah Kerja</h1></a>
        </div>
      </div>
      <div class="sub3"></div>
    </div>

    <!-- end content 2 -->
  </body>
  @include('component.footer')
  <script src="{{asset('js/beranda.js')}}"></script>
</html>
