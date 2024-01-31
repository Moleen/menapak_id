window.addEventListener("scroll", function () {
    // Mendapatkan nilai scroll vertikal saat ini
    var currentScroll = window.scrollY || window.pageYOffset;
    const nav = document.querySelector("nav");

    if (currentScroll >= 200) {
        nav.style.opacity = "0.9";
    }
    if (currentScroll <= 200) {
        nav.style.opacity = "1";
    }

    console.log(
        "Posisi scroll vertikal saat ini: " + currentScroll + " piksel"
    );
    nav.addEventListener("click", () =>{
      nav.style.transition="none"
      nav.style.opacity ="1";
    })
});

document.querySelectorAll(".nav-item").forEach((link) => {
    const href = link.querySelector("a").getAttribute("href");

    if (window.location.pathname === href) {
        link.querySelector("a").classList.add("active");
    }
});

const hover = document.querySelector(".hover")
var menuList = document.querySelector(".menu-icon");
menuList.addEventListener('click', function() {
    // Toggle kelas 'active' pada tombol hamburger
    this.classList.toggle('clicked');
    hover.classList.toggle('hidden');
  });