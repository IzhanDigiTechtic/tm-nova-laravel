//;(function( $ ){

$("#calcBtn").click(() => {
  $(".calculatorWrap").addClass("open");
});
$(".closeCalc").click(() => {
  $(".calculatorWrap").removeClass("open");
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 1) {
    $(".topButton").addClass("show");
  } else {
    $(".topButton").removeClass("show");
  }
});

/* Fixed header nav */

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var headerHeight = document.querySelector(".top-header").offsetHeight;

    if ($(window).width() >= 992) {
      if (window.scrollY > headerHeight) {
        document.getElementById("masthead").classList.add("fixed-header");
      } else {
        document.getElementById("masthead").classList.remove("fixed-header");
      }
    } else {
      var bottomheaderHeight =
        document.querySelector(".bottom-header").offsetHeight;

      var mobileheaderHeight = headerHeight + bottomheaderHeight;

      if (window.scrollY > mobileheaderHeight) {
        document.getElementById("masthead").classList.add("fixed-header");
      } else {
        document.getElementById("masthead").classList.remove("fixed-header");
      }
    }
  });
});

/* Home client slider */

$(".client-slider").slick({
  dots: false,

  infinite: true,

  speed: 1000,

  prevArrow: false,

  nextArrow: false,

  slidesToShow: 4,

  autoplay: false,

  responsive: [
    {
      breakpoint: 768,

      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 479,

      settings: {
        slidesToShow: 2,
      },
    },
  ],
});

$(".caseStudiesCarousel").slick({
  dots: false,
  infinite: true,
  speed: 1000,
  arrows: true,
  prevArrow:
    '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
  nextArrow:
    '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',
  slidesToShow: 1,
  autoplay: true,
  fade: true,
});

/* Home Trusted Client slider */
$(".trustedClientCarousel").slick({
  dots: false,

  infinite: true,

  speed: 2000,

  arrows: false,

  slidesToShow: 4,

  autoplay: true,

  responsive: [
    {
      breakpoint: 768,

      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 479,

      settings: {
        slidesToShow: 2,
      },
    },
  ],
});
$(".rateBox-slider").slick({
  dots: false,
  infinite: true,
  speed: 1000,
  arrows: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        arrows: false,
      },
    },
  ],
});

// Go Down
$(function () {
  $(".goDown").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      { scrollTop: $($(this).attr("href")).offset().top },
      500,
      "linear"
    );
  });
});

/* Home testimonial slider */
$(".testimonial-slider").slick({
  dots: true,
  infinite: true,
  autoplay: true,
  speed: 3000,
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: false,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

$(".videoReviewCarousel").slick({
  dots: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow:
    '<button type="button" class="slick-prev"><i class="far fa-angle-left"></i></button>',
  nextArrow:
    '<button type="button" class="slick-next"><i class="far fa-angle-right"></i></button>',

  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
      },
    },
  ],
});

/* Home testimonial slider */
function loadApp() {
  if ($(window).innerWidth() >= 320 && $(window).width() < 767) {
    $(".regionCarousel").slick({
      dots: true,
      infinite: true,
      autoplay: true,
      speed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
    });

    $(".iconboxCarousel").slick({
      dots: true,
      infinite: true,
      autoplay: true,
      speed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
    });

    $(".portfolioCarousel").slick({
      dots: true,
      infinite: true,
      autoplay: true,
      speed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
    });
  }
}
$(document).ready(function () {
  loadApp();
});
// Enquiery Form Screipt

// (function($){

// function that uses intl-tel-input format as jQuery-Mask

// function initMasking(formatterInput, maskedInput) {
//     // get the format fromt intl-tel-input placeholder
//     var format = $(formatterInput).attr('placeholder');
//     var len = format.length;
//     let myArray = format.split(" ");
//     if(myArray.length==1){
//         myArray = format.split("-");
//     }
//     let string="";
//     var originallen=0;
//     for(var j=0; j<myArray.length ;j++){
//         for(var i=0; i<myArray[j].length ;i++){
//             originallen=originallen+1;
//             string=string+"X";
//         }
//         string=string+" ";
//     }
//     $('#leng').val(originallen);
//     //$('#PhoneNumber2').prop('min', originallen);
//     //alert(originallen);
//     var format1= string;
//     // use the format as placeholder to jQuery-Mask input
//     $(maskedInput).attr('placeholder', format1);
//     // replace all digits to zero and use is as the mask
//     $(maskedInput).mask(format.replace(/[1-9]/g, 0));
//   }
// initialize intl-tel-input AE
// $("#PhoneNumber1").intlTelInput({
//   initialCountry: "auto",
//   autoPlaceholder: "aggressive",
//   separateDialCode: true,
//   geoIpLookup: function (callback) {
//     $.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
//       var countryCode = resp && resp.country ? resp.country : "";
//       callback(countryCode);
//     });
//   },
// });
// initialize the mask
// update the mask format when changing country
// $("#PhoneNumber1").on("countrychange", function (e, countryData) {
//   $(this).val("");
//   $("#PhoneNumber2").val("");
//   // update the mask
//   // initMasking(this, "#PhoneNumber2");
//   $("#countryget").val($(this).intlTelInput("getSelectedCountryData").name);
//   $("#code").val($(this).intlTelInput("getSelectedCountryData").dialCode);
//   //alert(this.value);
// });

// $("#PhoneNumber11").intlTelInput({

//     initialCountry: "auto",

//     autoPlaceholder: "aggressive",

//     separateDialCode:true,

//     geoIpLookup: function(callback) {

//         $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {

//             var countryCode = (resp && resp.country) ? resp.country : "";

//             callback(countryCode);

//         });

//     }

// });

// $("#PhoneNumber11").on("countrychange", function (e, countryData) {

//     $(this).val('');

//     $("#PhoneNumber21").val('');

//     // update the mask

//     $("#countryget1").val(($(this).intlTelInput("getSelectedCountryData").name));

//     $("#code1").val(($(this).intlTelInput("getSelectedCountryData").dialCode));

//     //alert(this.value);

// });

// $("#PhoneNumbercon").intlTelInput({
//   initialCountry: "auto",

//   autoPlaceholder: "aggressive",

//   separateDialCode: true,

//   geoIpLookup: function (callback) {
//     $.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
//       var countryCode = resp && resp.country ? resp.country : "";

//       callback(countryCode);
//     });
//   },
// });

// $("#PhoneNumbercon").on("countrychange", function (e, countryData) {
//   $(this).val("");

//   $("#PhoneNumbercon").val("");

//   $("#countrygetcon").val($(this).intlTelInput("getSelectedCountryData").name);

//   $("#codecon").val($(this).intlTelInput("getSelectedCountryData").dialCode);

//   //alert(this.value);
// });

// $("#PhoneNumber1mbl").intlTelInput({

//   initialCountry: "auto",

//   autoPlaceholder: "aggressive",

//   separateDialCode:true,

//   geoIpLookup: function(callback) {

//       $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {

//           var countryCode = (resp && resp.country) ? resp.country : "";

//           callback(countryCode);

//       });

//   }

// });

// update the mask format when changing country
// $("#PhoneNumber1mbl").on("countrychange", function (e, countryData) {

// $(this).val('');

// $("#PhoneNumber2mbl").val('');

// $("#countrygetmbl").val(($(this).intlTelInput("getSelectedCountryData").name));

// $("#codembl").val(($(this).intlTelInput("getSelectedCountryData").dialCode));

// //alert(this.value);

// });

const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);

const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

$(document).ready(function () {
  var show_btn = $(".show-modal");
  var show_btn = $(".show-modal");
  //$("#testmodal").modal('show');

  show_btn.click(function () {
    $("#testmodal").modal("show");
  });
});

$(function () {
  $("#element").on("click", function (e) {
    Custombox.open({
      target: "#testmodal-1",
      effect: "fadein",
    });
    e.preventDefault();
  });
});

function myFunction() {
  $(".message").text("link copied");
}

function calculateResult() {
  var packageId = document.getElementsByName("calculorpackageId")[0].value;
  var classId = document.getElementsByName("calculorclassId")[0].value;
  var tmcountry = "";
  if (document.getElementsByName("calculortmcountry")[0].checked == true) {
    tmcountry = document.getElementsByName("calculortmcountry")[0].value;
  } else if (
    document.getElementsByName("calculortmcountry")[1].checked == true
  ) {
    tmcountry = document.getElementsByName("calculortmcountry")[1].value;
  } else {
    tmcountry = document.getElementsByName("calculortmcountry")[2].value;
  }
  $.ajax({
    //create an ajax request to display.php
    type: "GET",
    data: {
      packageId: packageId,
      classId: classId,
      tmcountry: tmcountry,
    },
    url: "backend/getCalculatedResult.php",
    success: function (response) {
      const obj = jQuery.parseJSON(response);
      if (obj.total != 0) {
        $("#CalculationRecord").html(obj.html);
      } else {
        $("#CalculationRecord").html("No Record Found");
      }
    },
  });
}

// Page RoleBack to Top
$(document).ready(function () {
  $(".roleback").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
});

$(".readMore").click(function () {
  $(this).siblings(".readMoreText").toggleClass("open");
  let x = document.querySelector("readMore");
  if ($(this).text() == "Read Less") $(this).text("Read More");
  else $(this).text("Read Less");
});
