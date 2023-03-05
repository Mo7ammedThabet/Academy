// $(window).on("load",function(){ "use strict";
//     $(".loader").fadeOut(800);
// });
// loader start
// loader end
jQuery(function ($) {
    "use strict";
    /* ================================== cover sliders start ============================ */

        var swiper = new Swiper('.main-slider', {
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pagination: {
		        el: '.swiper-pagination',
		    },
            speed: 1600,
            effect: "fade",
            loop: true,
            autoplay: 5000
        });



        var swiper = new Swiper('.parallax-slider', {
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            speed: 600,
            autoplay: 5000
        });

        var swiper = new Swiper('.p-says-slider', {
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            speed: 600,
            autoplay: 5000
        });


    /* ================================== cover sliders end ============================ */


    // gradient layout
    function checkGradeient() {
        //gradient animations
        var colors = new Array(
            [126,192,188],
            [14,18,19],
            [126,192,188],
            [14,18,19]);

        var step = 0;
//color table indices for:
// current color left
// next color left
// current color right

// next color right
        var colorIndices = [0,1,2,3];

//transition speed
        var gradientSpeed = 0.002;

        function updateGradient()
        {

            if ( $===undefined ) return;

            var c0_0 = colors[colorIndices[0]];
            var c0_1 = colors[colorIndices[1]];
            var c1_0 = colors[colorIndices[2]];
            var c1_1 = colors[colorIndices[3]];

            var istep = 1 - step;
            var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
            var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
            var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
            var color1 = "rgb("+r1+","+g1+","+b1+")";

            var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
            var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
            var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
            var color2 = "rgb("+r2+","+g2+","+b2+")";

            $('#gradient').css({
                background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
                background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});



            $('#service-gr').css({
            background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
            background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

            

            step += gradientSpeed;
            if ( step >= 1 )
            {
                step %= 1;
                colorIndices[0] = colorIndices[1];
                colorIndices[2] = colorIndices[3];

                //pick two new target color indices
                //do not pick the same as the current one
                colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
                colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

            }
        }

        setInterval(updateGradient,10);
    }

    if($('body').hasClass("gradientLayout")){
        checkGradeient()
    }

});


    // Push Menus
    var $menuLeft = $(".pushmenu-left");
    var $menuRight = $(".pushmenu-right");
    var $toggleleft = $("#menu_bars.left");
    var $toggleright = $("#menu_bars.right");
    $toggleright.on("click", function() {
        $(this).toggleClass("active");
        $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
        $menuRight.toggleClass("pushmenu-open");
        $("body").toggleClass("pushmenu-push-toLeft");
        $(".navbar").toggleClass("navbar-right");
        return false;
    });

var owl = $('#slide-course');

    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        responsiveClass: true,
        nav: true,
        dots: false,
        rtl:true,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText:['<i><img src="images/arrow-prev.png"></i>','<i><img src="images/arrow-next.png"></i>'],
});   


    $('a[href="#search"]').on('click', function(event) {
    event.preventDefault();
        $('#search').addClass('open');
        $('#main-wrapper').addClass('wrapper-blur');
        setTimeout(function(){
            $('#search form > input[type="text"]').focus();
        },100);
    });

    $('#search, #search .overlay-close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'overlay-close' || event.keyCode == 27) {
            $(this).removeClass('open');
            $('#main-wrapper').removeClass('wrapper-blur');
        }
    });