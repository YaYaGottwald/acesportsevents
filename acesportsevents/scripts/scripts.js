/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

//alert("the link to the .js file is correct!");//this alert tests whether the javascript is linked properly//




$(document).ready(function () {
    //alert("jQuery is working too"); //this alert tests whether the jquery is linked properly//
//-------------------------------------------------------------------------//
//                          HAMBURGER MENU                                 // 
//-------------------------------------------------------------------------//  
    $(".dropdown").on("click", function () {
        var dropdownContent = $(".dropdown-content");
        dropdownContent.toggle();
        //hides content page title so info lines up better
        $('span').toggle();
    });

//-------------------------------------------------------------------------//
//               MAIN CONTENT LOADS UNDER HEADER                           // 
//      measures top of screen under fixed header and changes top margin   //
//              image and content lines up under it.                       //
//-------------------------------------------------------------------------//
    /*  var topHeight = $('header').height();
        $('main').css('margin-top', topHeight);
    */

//-------------------------------------------------------------------------//
//               ANCHOR LINKS TOP LOAD UNDER HEADER                        // 
//  measures top of screen under fixed header, sets that number to a       // 
//    negative top value, anchor links won't load under fixed header       //
//-------------------------------------------------------------------------//
    //  $('.anchor').css('top', -topHeight);
    /* sample of CSS to accompany .anchor tags:
        .anchor {
            display: block;
            position: relative;
            top: -6em;(place holder em, incase spcript is disabled)
            visibility: hidden;
        }
        */

//-------------------------------------------------------------------------//
//                          SPAN PAGE TITLE/ ACTIVE PAGE                   // 
// span title of page in Nav Bar to change with each different page loaded //
//-------------------------------------------------------------------------//       
    //alert($('comment').text());
    var changeTitle = $('comment').text();
    $('#activePage').text(changeTitle);
    /* sample of html & css
        <nav>
            <span></span>
        </nav
        <main>
            <comment>Home</comment>
            <section>
            </section>
        </main>

       comment { display: none;}

    */

//-------------------------------------------------------------------------//
//                          STICKY NAV BAR                                 //
// measures when nav bar reaches top of screen view and fixes it in place  //
//              removes '.sticky' in larger screen sizes                   //
//-------------------------------------------------------------------------//

    var nav = $('nav');
    var navUl = $('nav ul');
    var stickyNav;
    if (nav.length) {
        var contentNav = nav.offset().top;
        stickyNav = function () {
            var scrollTop = $(window).scrollTop();
            if ((scrollTop > contentNav) && (navUl.css('display') == ('none'))) {
                nav.addClass('sticky');
                $('h1').addClass('stickyH1');
                $('#date').css('display', 'none');
            } else {
                nav.removeClass('sticky');
                $('h1').removeClass('stickyH1');
                $('#date').css('display', 'inline');
            }
        };
    }

    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });

//-------------------------------------------------------------------------//
//                  HIDE & SHOW FAQ's in MOBILE                            //
// determines if mobile view, uses script to toggle open dd answers in dl  //
//                         when dt is clicked                              //
//-------------------------------------------------------------------------//

    var faqDT = $('.faqDT');
    var faqDD = $('.faqDD');

    if (navUl.css('display') == ('none')) {
        faqDD.hide();
        faqDT.on('click', function () {
            faqDD.hide();
            $(this).toggleClass("open").next().slideToggle();
        });
    } else {
        faqDD.show();
    }

});
//-------------------------------------------------------------------------//
//                     SPAN IMAGE: LOGO IN ACTIVE BAR                      //
//          make small logo appear when sticky nav is in effect            //
//      work in progress... can't get synced with dropdown-content         //
//-------------------------------------------------------------------------//
/*
    var spanImg = $('.spanImg');
    if ((navUl.css('display') == ('none')) && ($('span').css('display') != ('none'))) {
        alert('something is working');
        spanImg.show();
    } else {
        spanImg.hide();
    }

*/
//-------------------------------------------------------------------------//
//                           IMAGE SLIDE SHOW                              //
//                  jQuery/JavaScript adapted from W3 schools              //
//   found here: "https://www.w3schools.com/howto/howto_js_slideshow.asp"  //
//-------------------------------------------------------------------------//

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2500); // Change image every 2 seconds
    }

//-------------------------------------------------------------------------//
//                          DE-SELECT RADIO INPUT                          //
//          jQuery used to de-select radio button input option.            //
// found here: "https://help.surveygizmo.com/help/deselect-a-radio-button" //
//-------------------------------------------------------------------------//
/*
    $(function() {
        var allRadios = $('input[type=radio]');
        var radioChecked;

        var setCurrent =
            function(e) {
                var obj = e.target;

                radioChecked = $(obj).attr('checked');
            };

        var setCheck =
            function(e) {

                if (e.type == 'keypress' && e.charCode != 32) {
                    return false;
                }

                var obj = e.target;

                if (radioChecked) {
                    $(obj).attr('checked', false);
                } else {
                    $(obj).attr('checked', true);
                }
            };

        $.each(allRadios, function(i, val) {
            var label = $('label[for=' + $(this).attr("id") + ']');

            $(this).bind('mousedown keydown', function(e) {
                setCurrent(e);
            });

            label.bind('mousedown keydown', function(e) {
                e.target = $('#' + $(this).attr("for"));
                setCurrent(e);
            });

            $(this).bind('click', function(e) {
                setCheck(e);
            });

        });

    });
*/
//-------------------------------------------------------------------------//
//                              GO BACK                                    //
//           simple back button javascript, found here:                    //
//           https://www.w3schools.com/jsref/met_his_back.asp              //
//-------------------------------------------------------------------------//
/*    function goBack() {
        window.history.back();
    }
*/
//-------------------------------------------------------------------------//
//                          AGE VALIDATOR                                  //
//                   jQuery validation found here:                         //
//   "https://petemall.com/validate-minimum-age-with-jquery-validate/"     //
//          and apparently from a jQuery validator plugin                  //
//-------------------------------------------------------------------------//
/*
    $.validator.addMethod("minAge", function(value, element, min) {
        var today = new Date();
        var birthDate = new Date(value);
        var age = today.getFullYear() - birthDate.getFullYear();

        if (age > min+1) {
            return true;
        }

        var m = today.getMonth() - birthDate.getMonth();

        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    }, "You are not old enough!");

    $("form").validate({
        rules: {
            dob: {
                required: true,
                minAge: 16
            }
        },
        messages: {
            dob: {
                required: "Please enter you date of birth.",
                minAge: "You must be at least 16 years old!"
            }
        }
    });
*/

/* sample of CSS associated with jQuery stickyNav
nav {
    clear: both;
    overflow: hidden;
    width: 100%;
    }
.sticky {
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

----------original code ----------
https://codepen.io/_codemics/pen/PwEbYJ

$(document).ready(function() {

// grab the initial top offset of the navigation
    var stickyNavTop = $('.nav').offset().top;

// our function that decides weather the navigation bar should have "fixed" css position or not.
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
// our current vertical position from the top

// if we've scrolled more than the navigation, change its position to fixed to stick to top,
// otherwise change it back to relative
        if (scrollTop > stickyNavTop) {
            $('.nav').addClass('sticky');
        } else {
            $('.nav').removeClass('sticky');
        }
    };

    stickyNav();
// and run it again every time you scroll
    $(window).scroll(function() {
        stickyNav();
    });
});
*/