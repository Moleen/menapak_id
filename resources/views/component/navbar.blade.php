<link rel="stylesheet" href="{{'css/navbar.css'}}" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap"
  rel="stylesheet"
/>
<script
  src="https://kit.fontawesome.com/4e981ecd7b.js"
  crossorigin="anonymous"
></script>
<nav>
  <div class="logo">
    <a href="" class=""><img src="img/logo.png" /></a>
    <p><a href="">Berjalan sambil membuat jalan</a></p>
  </div>

<div class="menu-icon" id="menu-icon">
<label class="burger burger1" for="burger1">
    <input class="hiddenn" id="burger1" type="checkbox"/><span></span>
  </label>
</div>
  
<!-- <div id="menu-icon" class="menu-icon" onclick="this.classList.toggle('active')">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 200 200" color="black">
    <g stroke-width="6.5" stroke-linecap="round">
      <path d="M72 82.286h28.75" fill="#009100" fill-rule="evenodd" stroke="#000000" />
      <path d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554" fill="none" stroke="#000000" />
      <path d="M72 125.143h28.75" fill="#009100" fill-rule="evenodd" stroke="#000000" />
      <path d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554" fill="none" stroke="#000000" />
      <path d="M100.75 82.286h28.75" fill="#009100" fill-rule="evenodd" stroke="#000000" />
      <path d="M100.75 125.143h28.75" fill="#009100" fill-rule="evenodd" stroke="#000000" />
    </g>
  </svg>
</div> -->
  <ul id="menu-list" >
    <li class="nav-item"><a href="/">Beranda</a></li>
    <li class="nav-item"><a href="/program">Program</a></li>
    <li class="nav-item"><a href="/about">Tentang Kami</a></li>
  </ul>
</nav>
<div class="hover">
    <li class="nav-item"><a href="/">Beranda</a></li>
    <li class="nav-item"><a href="/program">Program</a></li>
    <li class="nav-item"><a href="/about">Tentang Kami</a></li>
</div>
<script src="{{asset('js/navbar.js')}}"></script>
