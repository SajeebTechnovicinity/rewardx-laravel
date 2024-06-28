$(document).ready(function () {
  // Off-canvas Open/Close
  $("body").on("click", function (e) {
    if ($(".mbl-offcanvas").hasClass("offcanvas-active")) {
      // Mobile Offcanvas Close
      if ($(e.target).is($(".mbl-offcanvas__close"))) {
        $(".mbl-offcanvas").removeClass("offcanvas-active");
      }

      // Close if clicked outside of the offcanvas
      if (!$(e.target).closest(".mbl-offcanvas").length) {
        $(".mbl-offcanvas").removeClass("offcanvas-active");
        console.log("Raihan");
      } else {
        console.log("error");
      }
    }

    // Mobile Offcanvas Open
    if ($(e.target).is($(".offcanvas-trigger"))) {
      $(".mbl-offcanvas").addClass("offcanvas-active");
    }
  });

  // Hero Vertical Text
  $(".hero__vtcl-text").slick({
    autoplay: true,
    speed: 800,
    arrows: false,
    vertical: true,
    draggable: false,
    autoplaySpeed: 5200,
  });

  $(".alliances-slider").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 4000,
    dots: false,
    arrows: false,
    draggable: false,
    cssEase: "linear",
    slidesToShow: 7,
    pauseOnHover: false,

    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $(".happy-clients__slider").slick({
    autoplay: true,
    dots: false,
    cssEase: "linear",
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 300,
    touchThreshold: 40,
    swipeToSlide: true,
    prevArrow: $(".happy-clients .slide-prev"),
    nextArrow: $(".happy-clients .slide-next"),

    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // ******************** FAQ ******************
  $(".collapse__trigger").on("click", function () {
    $(this).parents(".faq__item").toggleClass("active-collpse");
    $(this).next(".faq__item__body").slideToggle();
  });

  // ************* Fancy Accordion **************
  $(".accordion-active .fancy-accordion__item-dsc").slideDown();
  // Active bar inithal height
  setTimeout(() => {
    $(".fancy-accordion__line span").css(
      "height",
      $(".accordion-active").height()
    );
  }, 400);

  $(".accordion-tigger").on("click", function () {
    let parent = $(this).parent();

    if (parent.hasClass("accordion-active")) {
      ("");
    } else {
      $(".fancy-accordion__item").removeClass("accordion-active");
      $(".fancy-accordion__item-dsc").slideUp(200);

      parent.addClass("accordion-active");
      $(this).next().slideDown(200);
    }

    // Accordion Active bar positioning
    setTimeout(() => {
      let childFromTop = $(this).offset().top;
      let parentFromTop = $(".fancy-accordion__list").offset().top;
      let distance = childFromTop - parentFromTop;

      let barHeight = $(".accordion-active").height();
      $(".fancy-accordion__line span").css({
        height: barHeight,
        top: distance + "px",
      });
    }, 250);
  });

  // Playground calculation for Gas, Restaurants and Grocery
  $(".hor-playgon__form-range").on("change", function () {
    let rangeVal = $(this).val();
    let subTotal = 0;
    $(".hor-playgon__form-range").each(function () {
      subTotal += parseFloat($(this).val());
    });

    var selectedValue = $('input[name="pr"]:checked').val();
    console.log(selectedValue);
    $(this).parent().find(".amount").text(rangeVal);
    $(".hor-playgon__subtotal-amount > span").text(subTotal*12*parseFloat(selectedValue));
  });

  $("#button-pr input").on("change", function () {
      $("#button-pr input").on("change", function () {
    let subTotal = 0;
    $(".hor-playgon__form-range").each(function () {
      subTotal += parseFloat($(this).val());
    });

    var selectedValue = $('input[name="pr"]:checked').val();

    $(".hor-playgon__subtotal-amount > span").text(subTotal*12*parseFloat(selectedValue));
  });
  });

  jQuery(".steps-wrap").slick({
    autoplay: false,
    cssEase: "linear",
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 300,
    touchThreshold: 40,
    swipeToSlide: true,
    adaptiveHeight: true,
    infinite: false
  });

  $(".button-next").on('click', function(){
    jQuery(".steps-wrap").slick('slickNext');
  })

  $(".button-prev").on('click', function(){
    jQuery(".steps-wrap").slick('slickPrev');
  })
});
