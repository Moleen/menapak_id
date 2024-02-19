
function scrollToDiv(className) {
    var parentElement = document.querySelector('.contentTentang')
    var childElement = document.querySelector('.' + className);
    if (childElement) {
        var scrollPosition = childElement.offsetTop;
        parentElement.scrollTo({
            top: scrollPosition,
            behavior: 'smooth'
        });
    }
    var navItems = document.querySelectorAll('.navTentang ul li');
    navItems.forEach(function(item) {

        item.classList.remove('active');
    });
    event.target.classList.add('active');
}