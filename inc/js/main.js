// Menu Flexbox
const silo_left = document.getElementById('silo_left');
const silohon_flex_close = document.getElementById('silohon_flex_close');
const silohon_flex = document.getElementById('silohon_flex');
silo_left.addEventListener('click', function(){
    silohon_flex.classList.remove('flex100');
}); silohon_flex_close.addEventListener('click', function(){
    silohon_flex.classList.add('flex100');
});

// Lazy Load Image
const images = document.querySelectorAll("[data-src]");
function preloadImage(e) {
    let t = e.getAttribute("data-src");
    t && (e.src = t)
}
const imgOptions = {
    threshold: 0,
    rootMargin: "0px 0px -200px 0px"
};
imgObserver = new IntersectionObserver(((e, t) => {
    e.forEach((e => {
        e.isIntersecting && (preloadImage(e.target), t.unobserve(e.target))
    }))
}), imgOptions), images.forEach((e => {
    imgObserver.observe(e)
}));

// For Back Top
var silohon_back_top = document.querySelector('#silohon_back_top');
window.onscroll = function(){
    if(document.body.scrollTop > 350 || document.documentElement.scrollTop > 350){
        silohon_back_top.classList.remove('silohon_none');
    } else{
        silohon_back_top.classList.add('silohon_none');
    }
}