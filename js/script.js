$(function () {
  $(".openbtn1").click(function () {
    $(this).toggleClass("active");
    $("body").toggleClass("active");
    $(".header__bg").toggleClass("active");
    $(".header__menu__wrap").toggleClass("active");
  });

  $(".menu__list a").click(function () {
    $(".openbtn1").removeClass("active");
    $(".header__bg").removeClass("active");
    $(".header__menu__wrap").removeClass("active");
  });
});
