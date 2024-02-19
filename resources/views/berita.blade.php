<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/berita.css')}}" />
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}" />
    <link rel="icon" href="img/logo.png">
    <title>{{$judul}}</title>
  </head>
  <body>
    @include('component.navbar')
    <div class="maincontainerberita">
      <h1>berita</h1>
      <div class="subcontainerberita">
        @forelse($data as $item)
        @php
        $lowerkategori = strtolower($item->nama_kategori);
        $ktg = str_replace(" ", "_", $lowerkategori);
        @endphp
        <a href="{{url('/berita/' . $item->slug)}}" style="text-decoration: none; color: black;">
        <div class="berita">
            <div class="imageberitacontainer">
                @if($item->thumbnail != null)
                <img src="{{asset('img/news/' . $ktg . '/' . $item->thumbnail)}}" />
                @else
                <img src="{{asset('img/1.jpg')}}" />
                @endif
            </div>
            <div class="contentberitacontainer">
                <h2>{{$item->news_title}}</h2>
                <div class="tanggal">
                    <p>{{$item->nama_admin}} | {{date('l, d F Y', strtotime($item->created_at))}}</p>
                </div>
                @if(mb_strlen($item->news_details) > 150)
                <p>{{$item->news_details}}...</p>
                @else
                <p>{{$item->news_details}}</p>
                @endif
            </div>
        </div>
    </a>
        @endforeach
      </div>
        <div class="pagination">
            <ul class="pagination-list">
                @if ($data->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo; Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a href="{{ $data->previousPageUrl() }}" class="page-link" rel="prev">&laquo; Previous</a>
                    </li>
                @endif

                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li class="page-item {{ ($i == $data->currentPage()) ? 'active' : '' }}">
                        <a href="{{ $data->url($i) }}" class="page-link">{{ $i }}</a>
                    </li>
                @endfor

                @if ($data->hasMorePages())
                    <li class="page-item">
                        <a href="{{ $data->nextPageUrl() }}" class="page-link" rel="next">Next &raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next &raquo;</span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    @include('component.footer')
  </body>
</html>
