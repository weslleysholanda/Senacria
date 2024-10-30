$(document).ready(function(){
    $('.carrosel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        infinite: true
    });
});

  // PAGINA SERVIÇOS  
  $(document).ready(function(){
    $('.primary-content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
      });
  });
  // Menu Mobile

  document.querySelector(".abrirMenu").onclick = function(){
    document.documentElement.classList.add("menuAtivo");
  }

  document.querySelector(".fecharMenu").onclick = function(){
    document.documentElement.classList.remove("menuAtivo");
  }