$(document).ready(function () {
  // HERO SLIDER
  $("#hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false,
    smartSpeed: 1000,
    autoplay: false,
    autoplaySpeed: 1000,
    navText: ["<", ">"],
    responsive: {
      0: { nav: false, dots: true },
      768: { nav: true },
    },
  });

  // PROJECT SLIDER
  $("#project-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
    smartSpeed:1000,
    margin: 24,
    autoplay:true,
    autoplaySpeed: 1000,
    navText: ["<", ">"],
    responsive: {
      0: { items: 1, nav: false, margin: 8 },
      768: { items: 2, margin: 16 },
      1140: { items: 2, center: true },
    },
  });


  // blog SLIDER
  $("#blog-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
    smartSpeed:1000,
    margin: 24,
    autoplay:true,
    autoplaySpeed: 1000,
    navText: ["<", ">"],
    responsive: {
      0: { items: 1, nav: false, margin: 8 },
      768: { items: 2, margin: 16 },
      1140: { items: 2, center: true },
    },
  });

  //  REVIEW SLIDER
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    items: 1,
    smartSpeed: 900,
  });
});

// to collapse navbar
$(".navbar-nav>li>a").on("click", function () {
  $(".navbar-collapse").collapse("hide");
});

//impact tabs
$('#impact-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

// fancy box gallary


