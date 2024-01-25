window.addEventListener("scroll", function() {
    // Mendapatkan nilai scroll vertikal saat ini
    var currentScroll = window.scrollY || window.pageYOffset;
    const nav = document.querySelector("nav");
    
    if (currentScroll >= 200) {
      nav.style.opacity = "0.8";
    }
    if(currentScroll <= 200){
      nav.style.opacity = "1";
    }
  
    console.log("Posisi scroll vertikal saat ini: " + currentScroll + " piksel");
  });
  
  
  document.querySelectorAll(".nav-item").forEach((link) => {
    const href = link.querySelector('a').getAttribute('href');
    
    if (window.location.pathname === href) {
      link.querySelector('a').classList.add("active");
    }
  });

