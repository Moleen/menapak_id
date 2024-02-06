<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/berita.css')}}" />
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}" />
    <title>Document</title>
  </head>
  <body>
    @include('component.navbar')
    <div class="maincontainerberita">
      <h1>berita</h1>
      <div class="subcontainerberita">
        @foreach($data as $item)
        <div class="berita">
            <div class="imageberitacontainer">
                <img src="{{asset('img/2.jpg')}}" />
            </div>
            <div class="contentberitacontainer">
                <h2>{{$item->news_title}}</h2>
                <div class="tanggal">
                    <p>menapak Indonesia | {{date('l, d F Y', strtotime($item->published_date))}}</p>
                </div>
                @if(mb_strlen($item->news_details) > 150)
                <p>{{$item->news_details}}...</p>
                @else
                <p>{{$item->news_details}}</p>
                @endif
            </div>
        </div>
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
