jQuery(document).ready(function($) {
  console.log("Hello");

  $(".nav-icon").click(function() {
    $(".nav-icon").addClass("open");
    if ($(".mobile-nav").hasClass("menu-open")) {
      clearTimeout(navtimer);
      $(".mobile-nav").removeClass("menu-open");
      $("body").removeClass("position-background");
      $(document).scrollTop(scrollPos);
      $(".nav-icon").removeClass("open");
    } else {
      $(".wrapper-nav").removeClass("wrapper-nav-color");
      scrollPos = $(document).scrollTop();
      $(".mobile-nav").addClass("menu-open");
      navtimer = setTimeout(function() {
        if ($(".mobile-nav").hasClass("menu-open")) {
          $("body").addClass("position-background");
        }
      }, 500);
    }
  });
});
/*Meny*/

var gallery = document.querySelector("#gallery");
var getVal = function(elem, style) {
  return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
};
var getHeight = function(item) {
  return item.querySelector(".content").getBoundingClientRect().height;
};
var resizeAll = function() {
  var altura = getVal(gallery, "grid-auto-rows");
  var gap = getVal(gallery, "grid-row-gap");
  gallery.querySelectorAll(".gallery-item").forEach(function(item) {
    var el = item;
    el.style.gridRowEnd =
      "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
  });
};
gallery.querySelectorAll("img").forEach(function(item) {
  item.classList.add("byebye");
  if (item.complete) {
    console.log(item.src);
  } else {
    item.addEventListener("load", function() {
      var altura = getVal(gallery, "grid-auto-rows");
      var gap = getVal(gallery, "grid-row-gap");
      var gitem = item.parentElement.parentElement;
      gitem.style.gridRowEnd =
        "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
      item.classList.remove("byebye");
    });
  }
});
window.addEventListener("resize", resizeAll);
gallery.querySelectorAll(".gallery-item").forEach(function(item) {
  item.addEventListener("click", function() {
    item.classList.toggle("full");
  });
});

/* add friend*/
