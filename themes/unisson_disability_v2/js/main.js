;(function($, window, document, undefined) {
	var $win = $(window);
    var $doc = $(document);

    var timelineSliderMinItems;
    var timelineSliderMaxItems;
    
    function getGridSize() {
        return (window.innerWidth < 600) ? 2 :
               (window.innerWidth < 900) ? 3 : 4;
    }

    //Background image for title section page
    var cachedWidth = window.innerWidth;
    //console.log(cachedWidth);
    var resizedMobile = false;
   /*  function titleHeaderBG(){
        if ( $('section.title-header').length > 0 ) {
            if(window.innerWidth > 767){
                var titleHeaderBG = $('section.title-header').find('img#title-header').attr('src');
                if($('section.title-header').hasClass('general')){
                    $('section.title-header').css('height', '340px');
                }else{
                    $('section.title-header').css('height', '470px');
                }
                if ($('section.title-header').hasClass('work')) {
                    $('section.title-header').css('height', '520px');
                }
            }else{
                var titleHeaderBG = $('section.title-header').find('img#title-header-mobile').attr('src');
                if (cachedWidth == window.innerWidth && !resizedMobile){
                    $('section.title-header').css('height', window.innerHeight - 300);
                    resizedMobile = true;
                    //console.log(resizedMobile);
                }
                var anchorHref = $('body').find('main').find('section').first().attr('id');
                //var anchorHref = $('section.title-header').next('section').attr('id');
                $('section.title-header a#go-down-section').attr('href', '#'+anchorHref);
            }
            if (titleHeaderBG) {
                $('section.title-header').css('backgroundImage', 'url(' + titleHeaderBG + ')');
            }else{
                $('section.title-header').css('backgroundImage', 'none');
            }
        }
    } */

    function servicesBG(){
        if ($('section.work-services .service-item').length > 0) {
            $('section.work-services .service-item').each(function () {
                var $this = $(this);
                var servicesBG = $this.find('img.service-bg').attr('src');
                $this.css('backgroundImage', 'url(' + servicesBG + ')');
            });
            
        }
    }
    
    //var cachedWidth = window.innerWidth;
    $win.on('resize',function() {
        var gridSize = getGridSize();
        
        timelineSliderMinItems = gridSize;
        timelineSliderMaxItems = gridSize;

        //console.log(timelineSliderMaxItems);
        //console.log(timelineSliderMinItems);
        servicesBG();
        // titleHeaderBG();
        /* var newWidth = window.innerWidth;
        if(window.innerWidth > 940){
            $('section.home-slider').css('height', window.innerHeight-175);
            $('section.home-slider li.home-slide-bg').css('height', window.innerHeight-175);
        } else if (window.innerWidth < 940 && newWidth !== cachedWidth) {
            $('section.home-slider').css('height', window.innerHeight-100);
            $('section.home-slider li.home-slide-bg').css('height', window.innerHeight-100);
        } */

    }); //FINISH WIN RESIZE

    $doc.ready(function() {

        // titleHeaderBG();


        // function to hide/show the accesssibility menu when clicking on the button
        $('.button-accessibility').click(function (ev) {
            ev.preventDefault();
            if(!$(this).hasClass('clicked')){
                $(this).addClass('clicked');
                $(this).closest('.accessibility-bar').find('.accessibility-list').fadeIn(200);
            }
            else{
                $(this).removeClass('clicked');
                $(this).closest('.accessibility-bar').find('.accessibility-list').fadeOut(200);
            }
        });
        /* var acc_clicked = jQuery('.button-accessibility.clicked'),
			acc = jQuery('.button-accessibility'),
			options = jQuery('.accessibility-list');


		acc.click(function (e) { 
			e.stopPropagation();
			options.toggle();
		}); */


        // GRab the menus tructure of the desktop navigation and add that to mobile container
        var mobileMenu = $('.main-nav').html();
        $('.top-nav .wrapper .mob-menu-container').append(mobileMenu);
       
        // add 'hasSubmenu' class to the menu links that have the submenu
        $('section.main-nav ul.primary > li, .mob-menu-container ul.primary > li').each(function(){
            if($(this).next('.submenu').length > 0){
                $(this).addClass('hasSubmenu')
            }
        });

        // hide or show the submenu on click on the nav links
        $( "section.main-nav ul.primary > li >a, .mob-menu-container ul.primary > li >a").click(function(ev) {
            if($(this).parent().next('.submenu').length > 0){
                ev.preventDefault();
                if($(this).parent().hasClass('active')){
                    $(this).parent().removeClass('active');
                    $(this).parent().next('.submenu').slideUp(300)
                }
                else{
                    $(this).parent().siblings('li').removeClass('active');
                    $(this).parent().siblings('.submenu').slideUp(300);
                    $(this).parent().addClass('active');
                    $(this).parent().next('.submenu').slideDown(300);
                    
                }
            }
        });

         // hide the menu dropdown on click outside the menu
        $('body').bind("click touchstart", function(e){
            var $menu = $("ul.primary");
            if ($menu.is(e.target) // if the target of the click isn't the container...
            || $(e.target).closest("ul.primary").length>0) // ... nor a descendant of the container
            {
                console.log("inside menu");
            }
            else
            {
                console.log("not menu");
                $('ul.primary li').removeClass('active');
                $("section.main-nav .submenu").slideUp(300);
            }
        })

        // this is a button in the mobile menu to show/hide the mobile menu 
        $('#show-mobile').change(function() {
            if(this.checked) {
                $('.top-nav .wrapper .mob-menu-container').slideToggle();
            }else{
                $('.top-nav .wrapper .mob-menu-container').slideToggle();
            }      
        });

        $('.faqs .question').click(function(){
            if($(this).closest('.row').hasClass('active')){
                $(this).closest('.row').removeClass('active');
                $(this).closest('.row').find('.answer').slideUp(300);
            }
            else{
                $(this).closest('.row').siblings('.row').removeClass('active');
                $(this).closest('.row').siblings('.row').find('.answer').slideUp(300);
                $(this).closest('.row').addClass('active')
                $(this).closest('.row').find('.answer').slideDown(300);
            }
        });



        /*****************  Accomodation section    *****************/
        // Custom form styling 
        jcf.replaceAll('.accomodation-search-form, .contact-form, .google-translate');
        jcf.setOptions('Select', {
            wrapNative: false,
            wrapNativeOnMobile: false,
            fakeDropInBody: false,
            maxVisibleItems: 5
        });
        jcf.replaceAll('.news-search-form');
        $('.advanced-search-opener').click(function(ev){
            ev.preventDefault();
            if($(this).hasClass('checked')){
                $(this).removeClass('checked');
                $(this).closest('.search-panel').find('.advanced-search').slideUp(500);
            }
            else{
                $(this).addClass('checked');
                $(this).closest('.search-panel').find('.advanced-search').slideDown(500);
            }
        })

       
        if (window.innerWidth < 767) {
             //Article prev and next mobile
            $('.post-navigation .next a').html('NEXT <img src="/themes/unisson_disability/css/images/sprite/next@2x.png" width="20" height="20" alt="Next">');
            $('.post-navigation .prev a').html('<img src="/themes/unisson_disability/css/images/sprite/prev@2x.png" width="20" height="20" alt="Previous"> PREV');
            
            //Remove Active state for tabs in mobile
            $('#myTab li').removeClass('active');
            $('.panel-collapse.collapse').removeClass('in');
        }



        //Show hide search in mobile
        $('.search-mob a').click(function(){
            if($('input#search').hasClass('active')){
                $('input#search').removeClass('active');
            }else{
                $('input#search').addClass('active');
            }
            return false;
        });

        // new logic to change the font size for accessibility
        $('.accessibility-row .smaller-text').addClass('disabled');
        $('.accessibility-row .larger-text').click(function(ev){
            ev.preventDefault();
            var fontCheck =0;
            var fontSize = parseInt($("html").css("font-size"));
            console.log(fontSize);
            if(fontSize<13){
                fontCheck = fontSize +1;
                $.cookie('font-size', fontCheck);
                fontSize = fontSize + 1 + "px";
                $('html').css('font-size',fontSize);
                $('.accessibility-row .smaller-text').removeClass('disabled');
                // if conditions to be applied when it reaches the largest font size
                if(fontCheck==13){
                    // add disabled class to gray out in css
                    $(this).addClass('disabled');
                }
            }
        });
        $('.accessibility-row .smaller-text').click(function(ev){
            ev.preventDefault();
            var fontCheck =0;
            var fontSize = parseInt($("html").css("font-size"));
            console.log(fontSize);
            if(fontSize>10){
                fontCheck = fontSize -1;
                $.cookie('font-size', fontCheck);
                fontSize = fontSize - 1 + "px";
                $('html').css('font-size',fontSize);
                $('.accessibility-row .larger-text').removeClass('disabled');
                // if conditions to be applied when it reaches the least font size
                if(fontCheck==10){
                    // add disabled class to gray out in css
                    $(this).addClass('disabled');
                }
            }
        });

        $('.accessibility-row .dyslexic-font').click(function(ev){
            ev.preventDefault();
            if($(this).hasClass('enabled')){
                $.cookie('dyslexic-font', 0);
                $('body').removeClass('font-dyslexic');
                $(this).removeClass('enabled');
            }
            else{
                $.cookie('dyslexic-font', 1);
                $('body').addClass('font-dyslexic');
                $(this).addClass('enabled');
            }
        });

        $('.accessibility-row.high-contrast a').click(function(ev){
            ev.preventDefault();
            if($(this).hasClass('enabled')){
                $.cookie('high-contrast', 0);
                $('body').removeClass('high-contrast');
                $(this).removeClass('enabled');
            }
            else{
                $.cookie('high-contrast', 1);
                 $('body').addClass('high-contrast');
                $(this).addClass('enabled');
            }
        })

        if (!!$.cookie('high-contrast')) {
            var hc = $.cookie('high-contrast');
            if(hc == 1){
                $('body').addClass('high-contrast');
                $('.accessibility-row.high-contrast a').addClass('enabled');
            }else{
                $('body').removeClass('high-contrast');
                $('.accessibility-row.high-contrast a').removeClass('enabled');
            }
        }

        if (!!$.cookie('dyslexic-font')) {
            var df = $.cookie('dyslexic-font');
            if(df == 1){
                $('body').addClass('font-dyslexic');
                $('.accessibility-row .dyslexic-font').addClass('enabled');
            }else{
                $('body').removeClass('font-dyslexic');
                $('.accessibility-row .dyslexic-font').removeClass('enabled');
            }
        }

        if (!!$.cookie('font-size')) {
            $('.accessibility-row .smaller-text').removeClass('disabled');
            $('.accessibility-row .larger-text').removeClass('disabled');
            var fs = $.cookie('font-size');
            if(fs<=13 && fs>=10){
                fspx = fs + "px";
                $('html').css('font-size',fspx);
                // if conditions to be applied when it reaches the largest font size
                if(fs==13){
                    // add disabled class to gray out in css
                    $('.accessibility-row .larger-text').addClass('disabled');
                }
                if(fs==10){
                    // add disabled class to gray out in css
                    $('.accessibility-row .smaller-text').addClass('disabled');
                }
            }
        }

        /* $('.accessibility-row .smaller-text').click(function(e){
            reachedMin= false;
            $('html').css('font-size','70%');
            e.preventdefault();
        }); */




        
        // old logic to change the font size for accessibility
        /* var hasLoopedSmall = false;
        var hasLoopedMedium = false;
        var hasLoopedBig = false;
        var $affectedElements = $("body p, h1, h2, h3, h4, h5, span");
        $affectedElements.each( function(){
            var $this = $(this);
            $this.data("orig-size", $this.css("font-size") );
        });

        $('.resize li a.small').click(function(e){
            e.preventDefault();
            changeFontSize(0);
        })
          
        $('.resize li a.medium').click(function(e){
            e.preventDefault();
            changeFontSize(2);
        })

        $('.resize li a.big').click(function(e){
            e.preventDefault();
            changeFontSize(4);
        })
        
          
        function changeFontSize(direction){
            $affectedElements.each( function(){
                var $this = $(this);
                $this.css( "font-size" , parseInt($this.data("orig-size"))+direction );
            });
        } */

        /*
        $('.resize li.small a').click(function (e) {
            e.preventDefault();
            hasLoopedMedium = false;
            hasLoopedBig = false;
            if (!hasLoopedSmall) {
                $("body p, h1, h2, h3, h4, h5, span").each(function() {
                    var p_size = parseInt($(this).css("font-size"));
                    p_size = p_size - 2 + "px";
                    $(this).css({'font-size': p_size});
                });
                hasLoopedSmall = true;
            }
            return false;
        });

        $('.resize li.medium a').click(function (e) {
            e.preventDefault();
            hasLoopedSmall = false;
            hasLoopedBig = false;
            if (!hasLoopedMedium) {
                $("body p, h1, h2, h3, h4, h5, span").each(function() {
                    var p_size = parseInt($(this).css("font-size"));
                    p_size = p_size + 2 + "px";
                    $(this).css({'font-size': p_size});
                });
                hasLoopedMedium = true;
            }
            return false;
        });

        $('.resize li.big a').click(function (e) {
            e.preventDefault();
            hasLoopedSmall = false;
            hasLoopedMedium = false;
            if (!hasLoopedBig) {
                $("body p, h1, h2, h3, h4, h5, span").each(function() {
                    var p_size = parseInt($(this).css("font-size"));
                    p_size = p_size + 4 + "px";
                    $(this).css({'font-size': p_size});
                });
                hasLoopedBig = true;
            }
            return false;
        });*/

        /* if(window.innerWidth > 940){
            $('section.home-slider').css('height', window.innerHeight-175);
            $('section.home-slider li.home-slide-bg').css('height', window.innerHeight-175);
        }else{
            $('section.home-slider').css('height', window.innerHeight-100);
            $('section.home-slider li.home-slide-bg').css('height', window.innerHeight-100);
        }
 */
        

        /* $('a#showHome').click(function(){
            if (window.innerWidth > 940) {
                $('html, body').animate({
                    scrollTop: $( $(this).attr('href') ).offset().top-120
                }, 500);
            }else{
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 40
                }, 500);
            }
            return false;
        }); */

        /* $('section.title-header a#go-down-section').click(function(){
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 60
            }, 500);
            return false;
        }); */

        //Home Slider
        var directionNav = false;
        var controlNav = true;
        if (window.innerWidth < 767) {
            directionNav = true;
            controlNav = false;
        }
         $('.home-slider li.home-slide-bg').each(function() {
            var srcbg = $(this).find('img').attr('src');
            $(this).css('background-image', 'url(' + srcbg + ')');
            //console.log(srcbg);
        }); 

        $('.home-slider').flexslider({
            //animation: "slide",
            controlNav: true,
            directionNav: false,
        });

        //Find Us Map
        $('img[usemap]').rwdImageMaps();

        if($('section.map').length > 0){
            //console.log($('section.map img#imageHunter').attr('src'));
            var imageHunter = $('section.map img#imageHunter').attr('src');
            var imageCentral = $('section.map img#imageCentral').attr('src');
            var imageBlue = $('section.map img#imageBlue').attr('src');
            var imageNorthShore = $('section.map img#imageNorthShore').attr('src');
            var imageNorthBeaches = $('section.map img#imageNorthBeaches').attr('src');
        }
        
        $( "area").click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            //console.log(href);
            $('.nav-tabs li, .panel-heading h4').each(function() {
                //console.log($(this).find('a').attr('href'));
                if($(this).find('a').attr('href') == href || $(this).find('a').attr('href') == href+'-collapse'){
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                    $('.panel-collapse').removeClass('in');
                    $(this).parent().siblings(href+'-collapse').addClass('in');
                    $(this).parent().siblings(href+'-collapse').css('height', 'auto');
                    $('html,body').animate({
                        scrollTop: $(href+'-collapse').offset().top-50},
                        'slow');
                }
            });
        });

        $( ".nav-tabs li a, .panel-heading h4 a").click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            if (href.indexOf('-') > -1){
                href = href.split('-')[0];
                //console.log(href);
            }
            //console.log(href);
            $('area').each(function() {
                //console.log($(this).attr('href'));
                switch (href) { 
                    case '#tab1': 
                        $('section.map').css('background-image', 'url(' + imageCentral + ')');
                        break;
                    case '#tab2': 
                        $('section.map').css('background-image', 'url(' + imageHunter + ')');
                        break;
                    case '#tab3': 
                        $('section.map').css('background-image', 'url(' + imageNorthShore + ')');
                        break;	
                    case '#tab4': 
                        $('section.map').css('background-image', 'url(' + imageNorthBeaches + ')');
                        break;
                    case '#tab5': 
                        $('section.map').css('background-image', 'url(' + imageBlue + ')');
                        break;
                    default:
                        $('section.map').css('background-image', 'url(' + imageCentral + ')');
                }
            });
        });

        $( "area#hunter").hover(function() {
            $('section.map').css('background-image', 'url(' + imageHunter + ')');
        });

        $( "area#centralCoast").hover(function() {
            $('section.map').css('background-image', 'url(' + imageCentral + ')');
        });
        $( "area#blueMount").hover(function() {
            $('section.map').css('background-image', 'url(' + imageBlue + ')');
        }); 
        $( "area#northShore").hover(function() {
            $('section.map').css('background-image', 'url(' + imageNorthShore + ')');
        });
        $( "area#northBeaches").hover(function() {
            $('section.map').css('background-image', 'url(' + imageNorthBeaches + ')');
        }); 

        

        //Bootstrap Tab Collapse
        $('#myTab').tabCollapse({
            tabsClass: 'hidden-sm hidden-xs',
            accordionClass: 'visible-sm visible-xs'
        });

        //Team popup directors tabs
        $( "#tab1 .team-detail-link, .panel .team-detail-link" ).click(function(e) {
            e.preventDefault();
            var itemNum = $(this).data("slideid");
            //console.log('directors'+itemNum);
            var items = [];
            var names = [];
            if($("#tab1 .team-detail").length > 0 ){
                var teamDetail1 = $("#tab1 .team-detail");
            }else{
                var teamDetail1 = $("#tab1-collapse .team-detail");
            }
            teamDetail1.each(function() {
                items.push( {
                  src: $(this) 
                });
                names.push( {
                    src: $(this).find('h2')
                });
            });
            //console.log(names);
            //console.log(names[0].src[0].innerHTML);
            var popup = $(this).siblings( ".team-detail" );
            //console.log(itemNum);
            //console.log(popup);
            $.magnificPopup.open({
                items:items,
                /*items: {
                    src: popup,
                    type: 'inline',
                    midClick: true
                },*/
                gallery: {
                    enabled: true,
                    /*arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%">%title%</button>',
                    tPrev: 'PREV', // title for left button
                    tNext: "NEXT", // title for right button*/
                }
            },itemNum);
        });

        //Team popup executive tabs
        $( "#tab2 .team-detail-link, .panel .team-detail-link" ).click(function(e) {
            e.preventDefault();
            var itemNum = $(this).data("slideid");
            //console.log('executive'+itemNum);
            var items = [];
            var names = [];
            if($("#tab2 .team-detail").length > 0 ){
                var teamDetail2 = $("#tab2 .team-detail");
            }else{
                var teamDetail2 = $("#tab2-collapse .team-detail");
            }
            teamDetail2.each(function() {
                items.push( {
                  src: $(this) 
                });
                names.push( {
                    src: $(this).find('h2')
                });
            });
            
            var popup = $(this).siblings( ".team-detail" );
            $.magnificPopup.open({
                items:items,
                gallery: {
                    enabled: true,
                }
            },itemNum);
        });
        //PREV Popup button
        $('.team .navigation .prev a').click(function(e) {
            e.preventDefault();
            $.magnificPopup.instance.prev();
            return false;
        });
        //NEXT popup button
        $('.team .navigation .next a').click(function(e) {
            e.preventDefault();
            $.magnificPopup.instance.next();
            return false;
        });
        //CLOSE popup
        $('.team .navigation .see-all a').click(function(e) {
            e.preventDefault();
            $.magnificPopup.instance.close();
            return false;
        });
        
        //Video popup
        $('.tab-content .media a, .image-post.video a').magnificPopup({
            iframe: {
				patterns: {
					youtube_short: {
					  index: 'youtu.be/',
					  id: 'youtu.be/',
					  src: '//www.youtube.com/embed/%id%?autoplay=1' 
					}
				}
			}
        });

        //Image popup
        $('.tab-content .media a.image').magnificPopup({
            type: 'image'
            // other options
        });

        //Vertical Slider
        $('.vertical-slider').flexslider({
            animation: "slide",
            direction: "vertical",
            animationLoop: false,
            itemWidth: 80,
            itemHeight: 80,
            itemMargin: 20,
            controlNav: false,
            directionNav: true,
            slideshow: false,
            minItems: 1,
            maxItems: 4,
            move: 1,
            prevText: "",
            nextText: "",
            /*asNavFor: '#bg-slider'*/
        });

        $('.horizontal-slider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 80,
            itemHeight: 80,
            itemMargin: 20,
            controlNav: false,
            directionNav: true,
            slideshow: false,
            minItems: 1,
            maxItems: 4,
            move: 1,
            prevText: "",
            nextText: "",
            /*asNavFor: '#bg-slider'*/
        });

        $('#bg-slider').flexslider({
            animation: "fade",
            slideToStart: 0,
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            /*sync: ".vertical-slider"*/
            start: function(slider) {
                $('.vertical-slider li.slide_thumb, .horizontal-slider li.slide_thumb').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                    $('.flexslider.bg-slider').show();
                    var slideTo = $(this).attr("data-slide")
                    var slideToInt = parseInt(slideTo)
                    if (slider.currentSlide != slideToInt) {
                        slider.flexAnimate(slideToInt)
                    }
                });
            }
        });

        $('#text-slider').flexslider({
            animation: "fade",
            slideToStart: 0,
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            /*sync: ".vertical-slider"*/
            start: function(slider) {
                $('.vertical-slider li.slide_thumb, .horizontal-slider li.slide_thumb').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                    $('.flexslider.text-slider').show();
                    var slideTo = $(this).attr("data-slide")
                    var slideToInt = parseInt(slideTo)
                    if (slider.currentSlide != slideToInt) {
                        slider.flexAnimate(slideToInt)
                    }
                });
            }
        });

        if ( $('#bg-slider .slideshow_bg').length > 0 ) {
            $('.slideshow_bg').each(function () {
                var container = $(this),
                    imgUrl = container.find('img').prop('src');
                    //console.log(imgUrl);
                if (imgUrl) {
                    container.css('backgroundImage', 'url(' + imgUrl + ')');
                }
            });
        }

        //Time line
        $( ".timeline-slider li h4 a").click(function(e) {
            e.preventDefault();
            var story = $(this).attr("data-time");
            var position = $(this).parents('li').position();
            var positionTop = $(this).parents('h4').position();
            $('.timeline-slider .story').each(function() {
                if($(this).attr("data-time") == story){
                    $(this).siblings().removeClass("show");
                    $(this).addClass("show");
                    $('.overlay').fadeIn(500);
                    //console.log(story);
                    //$(this).show().css({'left':position.left+210,'top':positionTop.top-20});
                }
            });
        });
        $( ".timeline-slider .story .heading a.closeStory").click(function(e) {
            e.preventDefault();
            $(this).parent().parent().removeClass("show");
            $('.overlay').fadeOut(500);
        });


        // Image gallery for the property description page
        $('.property-gallery-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            appendDots:$('.property-gallery-paging'),
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
            ]
        })

        $('.property-features .link-more').click(function(ev){
            ev.preventDefault();
            // var animateHeight = $(".property-features .feature-list").css("height");
            if($(this).hasClass('clicked')){
                // $('.property-features .feature-list').css('height','355');
                $(".property-features .feature-list").removeClass('open');
                $(this).removeClass('clicked');
            }
            else{
                $(".property-features .feature-list").addClass('open');
                $(this).addClass('clicked');
            }
        });
    }); // END DOC READY

    $(window).on('load', function() {

        //History timeline
        $('.timeline-slider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 210,
            itemMargin: 5,
            controlNav: true,
            minItems: getGridSize(), 
            maxItems: getGridSize() 
        });

    }); //END WINDOWS LOAD

})(jQuery, window, document);