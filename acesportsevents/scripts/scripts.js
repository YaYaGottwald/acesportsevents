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

        $(".dropdown-content").toggle();
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
    $('span').text(changeTitle);
/* sample of html 
    <main>
        <comment>Home</comment>
        <section>
        </section>

*/
});
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
             } else {
                 nav.removeClass('sticky');
             }

         };
     }

     stickyNav();
     $(window).scroll(function () {
         stickyNav();
     });




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