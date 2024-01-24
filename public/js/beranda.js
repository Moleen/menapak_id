const slider = document.querySelector('.slider')
const next = document.querySelector('.next-btn')
const prev = document.querySelector('.prev-btn')
var n

function nextt(){
    n = 1
    slider.style.transform = 'translate(-100%)';
    slider.style.justifyContent = 'flex-start'
};
next.addEventListener("click", nextt)
prev.addEventListener("click", function(){
    n = -1
    slider.style.transform = 'translate(100%)';
    slider.style.justifyContent = 'flex-end'
});

slider.addEventListener("transitionend", function(){
    if (n === 1){
        slider.appendChild(slider.firstElementChild)
    }else if(n === -1){
        slider.prepend(slider.lastElementChild)

    }
    
    slider.style.transition = 'none';
    slider.style.transform = 'translate(0)';
    setTimeout(function(){
        slider.style.transition = 'all 0.5s';   
    });
})

setInterval (nextt, 5000)
