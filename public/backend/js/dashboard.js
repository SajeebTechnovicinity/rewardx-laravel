$(document).ready(function () {
  $(".drawer-open").on("click", function () {
    $(".nav-panel-wrap").addClass("active-drawer");
  });
  $(".drawer-close").on("click", function () {
    $(".nav-panel-wrap").removeClass("active-drawer");
  });

  // Nav Active
  $(".nav__item .nav__link, .nav__item .nav__sub-link").on(
    "click",
    function () {
      if (!$(this).hasClass("dropdown__trigger")) {
        $(".nav__link, .nav__sub-link").removeClass("active-link");
        $(this).addClass("active-link");
      }
    }
  );

  // Dropdown
  $(".dropdown__trigger").on("click", function (e) {
    e.preventDefault();
    if ($(this).parents(".dropdown").hasClass("dropdown-active")) {
      $(this).parents(".dropdown").removeClass("dropdown-active");
      $(this).next(".dropdown-body").slideUp();
    } else {
      $(this).parents(".dropdown").addClass("dropdown-active");
      $(this).next(".dropdown-body").slideDown();
    }
  });

  // Popup Open
  $(".popup-trigger").on("click", function (e) {
    e.preventDefault();
    $($(this).data("target")).addClass("popup-active");
  });
  // Popup Close
  $(".popup__close").on("click", function (e) {
    // e.preventDefault();
    $(this).parents(".popup").removeClass("popup-active");
  });
});
