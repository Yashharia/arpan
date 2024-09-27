var $ = jQuery.noConflict();

jQuery(document).ready(function () {
  /*menu script start*/

  /*is sticky start*/

  var currentheaderPos = window.pageYOffset;

  if (currentheaderPos >= 40) {
    $(".site-header").addClass("is-sticky");
  } else {
    $(".site-header").removeClass("is-sticky");
  }

  /*is sticky end*/

  $(".menu-icon").on("click", function () {
    $(this).toggleClass("active");

    if ($(this).hasClass("active")) {
      $("body").addClass("menu-open");
    } else {
      $("body").removeClass("menu-open");

      $(".menu").find("ul.sub-menu").hide();

      $(".menu").find(".sub-menu-heading").remove();
    }
  });

  // for mobile

  $(document).on("click", ".back-btn", function () {
    $(this).closest("ul.sub-menu").hide();
    $(this).parent().remove();
  });

  $(".menu-item-has-children > a").on("click", function (e) {
    if ($(window).width() <= 1199) {
      e.preventDefault();
      var textContent = $(this).text();
      var elementLink = $(this).attr("href");
      $(this).next("ul.sub-menu").show();
      $(this).next("ul.sub-menu")
        .prepend(`<li class="sub-menu-heading"><div class="back-btn">< Back</div>
        <a href="${elementLink}">${textContent}</a>
        </li>`);
    } else {
      $(this).next("ul.sub-menu").prepend();
    }
  });

  /*menu script end*/

  /*banner image slider script start*/

  if ($(".js-hero-banner-slider").length > 0) {
    $(".js-hero-banner-slider").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplaySpeed: 5000,
      autoplay: true,
      //   adaptiveHeight: true,
      dots: false,
      arrows: false,
    });
  }

  /*banner image slider script end*/

  /*news-slider script start*/

  if ($(".js-news-slider").length > 0) {
    $(".js-news-slider").slick({
      slidesToScroll: 1,
      infinite: false,
      // vertical: true,
      fade: true,
      dots: false,
      arrows: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            arrows: true,
          },
        },
      ],
    });
  }

  /*news-slider script end*/

  /*news-slider script start*/

  if ($(".js-awards-memberships-slider").length > 0) {
    $(".js-awards-memberships-slider").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplaySpeed: 2000,
      dots: false,
      arrows: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            arrows: true,
          },
        },
      ],
    });
  }

  /*news-slider script end*/

  /*video-carousel script start*/

  if ($(".js-video-carousel-slider").length > 0) {
    $(".js-video-carousel-slider").slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplaySpeed: 2000,
      dots: true,
      arrows: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            dots: false,
          },
        },
      ],
    });

    if (!($(".js-video-carousel-slider .slick-slide").length > 1)) {
      // remove arrows
      $(".js-video-carousel-slider .slick-dots").hide();
      $(".js-video-carousel-slider").addClass("single-slide");
    }
  }

  /*video-carousel script end*/

  /*video-carousel script start*/

  if ($(".js-testimonials-slider").length > 0) {
    $(".js-testimonials-slider").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplaySpeed: 2000,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: false,
          },
        },
      ],
    });

    if (!($(".js-testimonials-slider .slick-slide").length > 1)) {
      // remove arrows
      $(".js-testimonials-slider .slick-dots").hide();
      $(".js-testimonials-slider").addClass("single-slide");
    }
  }

  /*video-carousel script end*/

  /*timelines-slider script start*/

  if ($(".js-timelines-slider").length > 0) {
    $(".js-timelines-slider").slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplaySpeed: 2000,
      arrows: true,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
          },
        },

        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
          },
        },

        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  }

  if ($(".js-focus-slider").length > 0) {
    $(".js-focus-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplaySpeed: 2000,
      dots: true,

    });
  }

  if ($(".js-right-slider").length > 0) {
    $(".js-right-slider").slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      variableWidth: true,
      dots: true,
    });
  }

  if ($(".js-team-slider").length > 0) {
    $(".js-team-slider").slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      variableWidth: true,
      dots: true,
    });
  }

  if ($(".js-partners-slider").length > 0) {
    $(".js-partners-slider").slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      variableWidth: true,
    });
  }
  /*timelines-slider script end*/

  /*timelines-slider script start*/

  if ($(".js-employee-benefits-slider").length > 0) {
    $(".js-employee-benefits-slider").slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      // autoplay: true,
      autoplaySpeed: 2000,
      // dots: true,
      arrows: true,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
          },
        },

        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
          },
        },

        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });

    if (!($(".js-employee-benefits-slider .slick-slide").length > 1)) {
      // remove arrows
      $(".js-employee-benefits-slider .slick-dots").hide();
      $(".js-employee-benefits-slider").addClass("single-slide");
    }
  }

  /*timelines-slider script end*/

  $(window).on("load resize", function () {
    // menuMobile(1199);
    if ($(".sub-menu-heading").length > 0) {
      if ($(window).width() >= 1199) {
        $(".sub-menu-heading").remove();
      }
    }

    function sliderMiddleArrow(elm) {
      console.log(elm);

      $(elm).each(function () {
        const sliderImageHeight = $(this).innerHeight() / 2;

        const buttonHeight = $(this)
          .parents(".slick-slider")
          .find(".slick-arrow")
          .innerHeight();

        $(this)
          .parents(".slick-slider")
          .find(".slick-arrow")
          .css({ top: +sliderImageHeight + "px" });

        $(this)
          .parents(".slick-slider")
          .find(".slick-dots")
          .css({ top: +sliderImageHeight * 2 + "px" });

        console.log("change button position");
      });
    }

    sliderMiddleArrow(".video-carousel-slider .media-wrap");
    sliderMiddleArrow(".timelines-wrap .card-image");
  });

  /*convert svg to code*/

  $(function () {
    $("img.svg-convert").each((i, e) => {
      const $img = $(e);
      const imgID = $img.attr("id");
      const imgClass = $img.attr("class");
      const imgURL = $img.attr("src");

      $.get(
        imgURL,
        (data) => {
          // Get the SVG tag, ignore the rest
          let $svg = $(data).find("svg");
          // Add replaced image's ID to the new SVG
          if (typeof imgID !== "undefined") {
            $svg = $svg.attr("id", imgID);
          }
          // Add replaced image's classes to the new SVG
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", `${imgClass} replaced-svg`);
          }
          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr("xmlns:a");
          // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
          if (
            !$svg.attr("viewBox") &&
            $svg.attr("height") &&
            $svg.attr("width")
          ) {
            $svg.attr(
              `viewBox 0 0  ${$svg.attr("height")} ${$svg.attr("width")}`
            );
          }
          // Replace image with new SVG

          $img.replaceWith($svg);
        },
        "xml"
      );
    });
  });

  /*convert svg to code end*/

  $.each($(".js-video-container"), function (indexInArray, valueOfElement) {
    var playButton = $(valueOfElement).find("#playButton");

    // console.log(valueOfElement, playButton)

    $(playButton).on("click", function (e) {
      console.log($(this));

      $(this).toggleClass("active");

      // vimeo start

      var type = $(this).data("type");

      if (type == "vimeo") {
        var iframe = $(this).closest(".media-wrap").find("iframe");

        var videoURL = iframe.attr("src");

        if ($(this).hasClass("active")) {
          $(this).closest("section").find("#playButton").removeClass("active");

          $(this)
            .closest("section")
            .find(".media-wrap")
            .removeClass("vimeo-start");

          $(this).addClass("active");

          videoURL =
            videoURL + "?background=1&autoplay=1&muted=1&controls=0?loop=1";

          $(this).closest(".media-wrap").addClass("vimeo-start");
        } else {
          videoURL = videoURL.replace(
            "?background=1&autoplay=1&muted=1&controls=0?loop=1",
            ""
          );

          $(this).closest(".media-wrap").removeClass("vimeo-start");

          $(this).closest("section").find("#playButton").removeClass("active");
        }
        iframe.attr("src", videoURL);
      }

      // vimeo end

      if ($(this).hasClass("active")) {
        $(this).parents(".js-video-container").find("video").trigger("play");
        $(this).closest(".js-video-container").addClass("video-start");
      } else {
        $(this).removeClass("active");
        $(this).parents(".js-video-container").find("video").trigger("pause");
        $(this).closest(".js-video-container").removeClass("video-start");
      }
    });
  });

  // Hide all content sections initially

  if ($(window).width() > 768) {
    $(".js-job-list-card:first-child")
      .addClass("active")
      .find(".card-body")
      .show();
  }
  $(".job-list-wrap").on("click", ".js-job-list-card", function () {
    if ($(window).width() > 767) {
      $(this).toggleClass("active").find(".card-body").slideToggle();

      $(".card-body").not($(this).find(".card-body")).slideUp();

      $(this).siblings().removeClass("active");
    } else {
      $(".card-body").not($(this).find(".card-body")).show();
    }
  });

  //faq accordion

  $(".accordion-item:first-child .js-accordion-heading")
    .addClass("is-active")
    .next()
    .addClass("show")
    .show();

  $(".js-accordion-heading").click(function (e) {
    e.preventDefault();

    let $this = $(this);

    if ($this.next().hasClass("show")) {
      $this.removeClass("is-active");
      $this.next().removeClass("show");

      $this.next().slideUp(350);
    } else {
      $this.parent().parent().find(".accordion-content").removeClass("show");
      $this.parent().parent().find(".accordion-content").slideUp(350);
      $this
        .parent()
        .parent()
        .find(".accordion-heading")
        .removeClass("is-active");
      $this.toggleClass("is-active");
      $this.next().toggleClass("show");
      $this.next().slideToggle(350);
    }
  });

  /*download popup start*/

  $(document).on("click", ".popup-link", function () {
    $(this)
      .magnificPopup({
        type: "inline",
        midClick: true,
      })
      .magnificPopup("open");
  });

  /*download popup end*/
}); /* ready end */
