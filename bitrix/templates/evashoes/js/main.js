$(function(){


  $('.filters .filter .filter_name').click(function(){
    $(this).parent().toggleClass('open');

    return false;
  });


  $('.store-slider').owlCarousel({
    responsive : {
      0 : {
        items : 1,
        margin: 30,
        touchDrag: true
      },
      480 : {
        items : 1
      },
      640 : {
        items : 1
      },
      799 : {
        items : 2
      },
      960 : {
        items : 3
      },
      1024 : {
        items : 3
      },
      1200 : {
        items : 4
      }
    },
    dots: false,
    nav: false,
    mouseDrag: false,
    touchDrag: false,
  });

  $('.slider-content .slider').owlCarousel({
    responsive : {
      0 : {
        items : 1,
        margin: 30,
        touchDrag: true
      },
      480 : {
        items : 1
      },
      640 : {
        items : 1
      },
      799 : {
        items : 2
      },
      960 : {
        items : 3
      },
      1024 : {
        items : 3
      },
      1200 : {
        items : 3
      }
    },
    dots: false,
    nav: true,
    mouseDrag: false,
    touchDrag: false,
    //margin:30
  });

  $('.reviews-slider').owlCarousel({
    responsive: {
      0: {
        items: 1,
        margin: 90
      },
      639: {
        items: 2,
        margin: 90
      }
    },
    dots: false,
    nav: true
  });

  $('.tab-contents').addClass('hides');

  $('.tab-contents .btn-next').click(function(){
    $('.tab-contents .tab-content:visible').trigger('next.owl.carousel');
    return false;
  });

  $('.tab-contents .btn-prev').click(function(){
    $('.tab-contents .tab-content:visible').trigger('prev.owl.carousel');
    return false;
  });

  $('.tabs .tab').click(function(){
    $('.tab-contents .tab-content').hide();
    $( $(this).attr('href') ).show();

    $('.tabs .tab').removeClass('active');
    $(this).addClass('active');

    return false;
  });

  $('.hamburger').click(function(){
    $(this).toggleClass('is-active');
    return false;
  });

  $('.store_item .action-stats, .store_item .action-like, .section-catalog_item .action-stats, .section-catalog_item .action-like').click(function(){
    $(this).toggleClass('active');
    return false;
  });

  ////// CATALOG_ITEM SLIDER

  $(document).ready(function() {

    var sync2 = $(".thumbnail-slider");
    var sync1 = $(".main-slider");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        //slideSpeed: 2000,
        nav: false,
        //autoplay: true,
        dots: true,
        margin: 0,
        loop: false,
        //responsiveRefreshRate: 200,
        //navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            //dots: true,
            nav: true,
            margin: 19,
            //smartSpeed: 200,
            //slideSpeed: 500,
            touchDrag: false,
            mouseDrag: false,
            slideBy: 4, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            //responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        var current = el.item.index;

        //if you disable loop you have to comment this block
        /*var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }*/

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
  });

});
