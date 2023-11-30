// Configuración del carrousel index
var myCarousel = document.getElementById('myCarousel');
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 5200
});

// Cargar fecha footer
window.addEventListener("load",()=>{
  const currentDate = new Date();
  document.getElementById("currentYear").innerText=currentDate.getFullYear();
})