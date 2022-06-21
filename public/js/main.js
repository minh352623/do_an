var selector = ".menu-2 ul li";

$(selector).on("click", function () {
  $(selector).removeClass("start");
  $(this).addClass("start");
});

var color = ".list-color ul li";

$(color).on("click", function () {
  $(color).removeClass("checked");
  $(this).addClass("checked");
});

var size = ".add-to-cart a";
var itemsize = ".box_size";

$(size).on("click", function () {
  $(itemsize).toggleClass("opensize");
});

var bar_menu = ".list_menu-mobile a:first-child";
var box_modal = ".menu_mobile_modal";

$(bar_menu).on("click", function () {
  $(box_modal).toggleClass("startmenu");
});

var btnselect = ".droplist span";
var listvalue = ".dropboxx ul";

$(btnselect).on("click", function () {
  $(listvalue).toggleClass("onstart");
});

///menu_mobile

const mParent = document.querySelectorAll(".menu_mobile_modal>ul li");

for (let i = 0; i < mParent.length; i++) {
  mParent[i].addEventListener("click", function () {
    let ddStatus = mParent[i].childNodes[2].style.display;

    if (ddStatus === "block") {
      mParent[i].childNodes[2].style.display = "none";
    } else {
      mParent[i].childNodes[2].style.display = "block";
    }
  });
}

// change avatar

var selectfile = document.getElementById("selectfile");
var selectimage = document.querySelector(".img_save");

$(selectimage).click(function () {
  $(selectfile).click();
});

selectfile?.addEventListener("change", function (e) {
  if (e.target.files.length > 0) {
    src = URL.createObjectURL(e.target.files[0]);
    image = document.querySelector(".acount_avatar img");
    image2 = document.querySelector(".acount_title img");
    image.src = src;
    image2.src = src;
  }
});

///carrt number javascript

var left = document.querySelector(".left");
left?.addEventListener("click", function () {
  console.log(left);
});

$(document).ready(function () {
  $(".swiper-wrapper").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
});
