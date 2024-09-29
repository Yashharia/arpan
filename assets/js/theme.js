(function ($) {
  var alreadyClicked = false;
  $(window).scroll(function () {
    var loadMoreButton = $(".load-more-post-insights"); // Replace with your button's ID or class
    console.log($(loadMoreButton).length);
    if ($(loadMoreButton).length > 0) {
      // Function to check if an element is in the viewport
      function isElementInView(element) {
        var elementTop = element.offset().top;
        var elementBottom = elementTop + element.outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
      }

      // Check if the element is in view and click it
      if (isElementInView(loadMoreButton) && !alreadyClicked) {
        alreadyClicked = true; // Ensure it only clicks once
        loadMoreButton.click();
      }
    }
  });

  $(document).ready(function () {
    $(".filter-form").on("change", function () {
      filterFn(".filter-form");
    });

    function filterFn(formName) {
      // itinerary filter
      $(".no-result").hide();
      var loadmoreBtnClicked = $("#loadmore-input").val();
      console.log("loadmore checked", loadmoreBtnClicked);
      var data = $(formName).serialize();
      jQuery.ajax({
        datatype: "JSON",
        url: ajax_var.ajaxurl,
        type: "post",
        data: data,
        beforeSend: function (xhr) {
          if (loadmoreBtnClicked == "false") $(".loading-div").show();
        },
        success: function (data) {
          var result = jQuery.parseJSON(data);
          var newcurrentNumOfPosts = parseInt(result.offset);
          $("#current-num-of-posts").attr("value", newcurrentNumOfPosts);
          if (result.loadmore == "true") {
            $(".ensights-grid .ensights-grid-wrap").append(result.message);
          } else $(".ensights-grid .ensights-grid-wrap").html(result.message);
          $(".loading-div").hide();
          if (result.found_post <= newcurrentNumOfPosts) {
            $(".load-more-post-insights").hide();
            alreadyClicked = true;
          } else {
            $(".load-more-post-insights").css("display", "flex");
            alreadyClicked = false;
          }

          if (result.loadmore == "false" && result.found_post == 0)
            $(".no-result").show();
        },
      });
    }

   

    $(".load-more-post-insights").on("click", function () {
      $("#loadmore-input").attr("value", true);
      filterFn(".filter-form");
      $("#loadmore-input").attr("value", false);
    });

    $(".topics-filter").on("change", function () {
      const parentEle = $(this).closest("section");
      $(".no-result").hide();
      var data = $(".topics-filter").serialize();
      jQuery.ajax({
        datatype: "JSON",
        url: ajax_var.ajaxurl,
        type: "post",
        data: data,
        beforeSend: function (xhr) {
          $(parentEle).find(".loading-div").show();
        },
        success: function (data) {
          var result = jQuery.parseJSON(data);
          if (result.response == "success") {
            $(parentEle).find(".group-result").show();
            if (result.posts != "") {
              $(parentEle).find(".articles-section").show();
              $(parentEle).find(".posts-results").html(result.posts);
            } else {
              $(parentEle).find(".articles-section").hide();
            }
            if (result.experts != "") {
              $(parentEle).find(".experts-section").show();
              $(parentEle).find(".experts-results").html(result.experts);
            } else {
              $(parentEle).find(".experts-section").hide();
            }
          } else {
            $(parentEle).find(".group-result").hide();
          }
          $(parentEle).find(".loading-div").hide();
        },
      });
    });

    if (window.location.hash) {
      // Get the element by ID (excluding the '#')
      var $element = $(window.location.hash);
      if ($element.length) {
        // Scroll to the element, accounting for the sticky header height
        var offsetValue = $(".site-header").height(); // Replace with your sticky header's class
        var elementPosition = $element.offset().top;
        var offsetPosition = elementPosition - offsetValue;

        $("html, body").animate(
          {
            scrollTop: offsetPosition,
          },
          800
        ); // Adjust the duration for smooth scrolling
      }
    }
  });

  document.addEventListener(
    "wpcf7submit",
    function (event) {
      console.log(event.detail.contactFormId);
      if ("427" == event.detail.contactFormId) {
        Cookies.set("downloadpdf", 1, { expires: 1 });
        $(".download-cta .popup-link").hide();
        $(".download-cta .download-pdf-link").show();
        $(".download-cta .download-pdf-link").trigger("click");
      }
    },
    false
  );

  //expert slider
  function toggleSlick() {
    var $slider = $(".js-expert-slider"); // Replace with your slider's class or ID
    if ($(window).width() < 768) {
      if (!$slider.hasClass("slick-initialized")) {
        $slider.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          // autoplay: true,
          // autoplaySpeed: 2000,
          dots: false,
          arrows: true,
        });
      }
    } else {
      if ($slider.hasClass("slick-initialized")) {
        $slider.slick("unslick");
      }
    }

    var $slider = $(".js-gallery-slider"); // Replace with your slider's class or ID
    if ($(window).width() < 991) {
      if (!$slider.hasClass("slick-initialized")) {
        $slider.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: true,
          dots: false,
        });
      }
    } else {
      if ($slider.hasClass("slick-initialized")) {
        $slider.slick("unslick");
      }
    }

    var $slider = $(".js-article-list"); // Replace with your slider's class or ID
    if ($(window).width() < 991) {
      if (!$slider.hasClass("slick-initialized")) {
        $slider.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: true,
          dots: false,
        });
      }
    } else {
      if ($slider.hasClass("slick-initialized")) {
        $slider.slick("unslick");
      }
    }
  }

  // Initial check
  toggleSlick();

  // Check on window resize
  $(window).resize(toggleSlick);

  var $grid = $('.masonry').masonry({
    itemSelector: '.grid-item',
  });
})(jQuery);