document.querySelectorAll('.a').forEach(function(button) {
    button.addEventListener('click', function() {
        button.classList.toggle("active")
        document.querySelectorAll('.a').forEach(function(otherButton) {
            if (otherButton !== button) {
                otherButton.classList.remove("active");
            }
        })
    });
});

document.querySelectorAll(".container-program .nav ul li").forEach((link) => {
    const href = link.querySelector(".container-program .nav ul li a").getAttribute("href");

    if (window.location.pathname === href) {
        link.querySelector("a").classList.add("active");
    }

});