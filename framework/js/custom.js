function mobileToggleMenu(){jQuery(window).width()<640?(jQuery("#footer-menu .mobile_togglemenu").remove(),jQuery("#footer-menu .menu .menu-item-has-children").prepend("<a class='mobile_togglemenu'><i class='fa fa-chevron-down' aria-hidden='true'></i></a>"),jQuery("#footer-menu .menu .menu-item-has-children").addClass("toggle"),jQuery("#footer-menu .mobile_togglemenu").click(function(){jQuery(this).parent().toggleClass("active").parent().find("ul.sub-menu").toggle("slow")})):(jQuery("#footer-menu .menu .menu-item-has-children").parent().find("ul.sub-menu").removeAttr("style"),jQuery("#footer-menu .menu .menu-item-has-children").removeClass("active"),jQuery("#footer-menu .menu .menu-item-has-children").removeClass("toggle"),jQuery("#footer-menu .mobile_togglemenu").remove())}jQuery.noConflict(),jQuery(document).ready(function(r){"use strict";function e(){var a=r(document).width(),s=r("#header .container").width(),o=(a-s)/2;s==a?r("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){var e=r(this).parent("li.menu-item-megamenu-parent").offset().left,t=r(this).width();if(a<e+t){var n="-"+(t-(a-e)+25)+"px";r(this).css("left",n)}}):r("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){var e=r(this).parent("li.menu-item-megamenu-parent").offset().left,t=r(this).width();if(s<e+t){var n=o+(e+t-a)+20;if(s<t){var i=n-((t-s)/2+10);i="-"+i+"px",r(this).css("left",i)}else n="-"+n+"px",r(this).css("left",n)}})}"enable"===dttheme_urls.loadingbar&&Pace.on("done",function(){r(".loader").fadeOut(500),r(".pace").remove()}),r(".dt-sc-icon-box-type9").length&&setTimeout(function(){r(".dt-sc-icon-box-type9").each(function(){r(this).find(".icon-wrapper").css("height",r(this).find(".icon-content").outerHeight(!0))})},1e3),r("ul.dt-sc-tabs-vertical-frame").length&&r("ul.dt-sc-tabs-vertical-frame").each(function(){r(this).css("min-height",r(this).height())}),r("ul.dt-sc-tabs-vertical").length&&r("ul.dt-sc-tabs-vertical").each(function(){r(this).css("min-height",r(this).height())}),r("select").each(function(){"none"!=r(this).css("display")&&r(this).wrap('<div class="selection-box"></div>')}),r(".activity-type-tabs > ul >li:first").addClass("selected"),r(".dir-form > .item-list-tabs > ul > li:first").addClass("selected"),e(),r(window).bind("resize",function(){e()}),r("div.dt-video-wrap").fitVids();var t=!!(navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/Blackberry/i)||navigator.userAgent.match(/Windows Phone/i)||navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i)),n=window.innerWidth||document.documentElement.clientWidth;"undefined"!=typeof dttheme_urls&&(t&&"enable"==dttheme_urls.mobilestickynav&&r(dttheme_urls.stickyele).sticky({topSpacing:0}),"enable"===dttheme_urls.stickynav&&767<n&&r(dttheme_urls.stickyele).sticky({topSpacing:0})),r("#dt-menu-toggle").click(function(e){e.preventDefault();var t=r("nav#main-menu").find("ul.menu:first");t.slideToggle(function(){t.css("overflow","visible"),t.toggleClass("menu-toggle-open")});var n=r("nav#main-menu").find("ul.menu-right");n.length&&n.slideToggle(function(){n.css("overflow","visible"),n.toggleClass("menu-toggle-open")})}),r(".dt-menu-expand").click(function(){return r(this).hasClass("dt-mean-clicked")?(r(this).text("+"),r(this).prev("ul").length?r(this).prev("ul").slideUp(300):r(this).prev(".megamenu-child-container").find("ul:first").slideUp(300)):(r(this).text("-"),r(this).prev("ul").length?r(this).prev("ul").slideDown(300):r(this).prev(".megamenu-child-container").find("ul:first").slideDown(300)),r(this).toggleClass("dt-mean-clicked"),!1}),767<(n=window.innerWidth||document.documentElement.clientWidth)&&r("li.menu-item-depth-0,li.menu-item-simple-parent ul li").hover(function(){r(this).find(".megamenu-child-container").length?r(this).find(".megamenu-child-container").stop().fadeIn("fast"):r(this).find("> ul.sub-menu").stop().fadeIn("fast")},function(){r(this).find(".megamenu-child-container").length?r(this).find(".megamenu-child-container").stop(!0,!0).hide():r(this).find("> ul.sub-menu").stop(!0,!0).hide()}),r(".dt-search-icon.type1").on("click",function(e){e.stopPropagation(),r("#header .top-menu-search-container").toggleClass("show-top-menu-search")}),1<r(".dt-portfolio-single-slider").find("li").length&&r(".dt-portfolio-single-slider").bxSlider({auto:!1,video:!0,useCSS:!1,pagerCustom:"#bx-pager",autoHover:!0,adaptiveHeight:!0,controls:!1});var i=r('a[data-gal^="prettyPhoto[gallery]"]');i.length&&i.prettyPhoto({hook:"data-gal",show_title:!1,deeplinking:!1,social_tools:!1,default_width:500,default_height:344}),r("a.video-image").prettyPhoto({animation_speed:"normal",theme:"facebook",slideshow:3e3,autoplay_slideshow:!1,social_tools:!1,deeplinking:!1}),r(".downcount").each(function(){var e=r(this);e.downCount({date:e.attr("data-date"),offset:e.attr("data-offset")})}),r("p:empty").each(function(){r(this).next("br").remove(),r(this).remove()}),767<n&&(r("#primary").hasClass("with-both-sidebar")?r("#secondary-left").is(":empty")&&r("#secondary-right").is(":empty")&&r("#primary").css({width:"100%",margin:0}):r("#primary").hasClass("with-left-sidebar")?r("#secondary-left").is(":empty")&&r("#primary").css({width:"100%",margin:0}):r("#primary").hasClass("with-right-sidebar")&&r("#secondary-right").is(":empty")&&r("#primary").css({width:"100%",margin:0})),r(".dt-sc-contact-details-on-map a.map-switch-icon").on("click",function(){return r(this).parents(".dt-sc-contact-details-on-map").toggleClass("hide-overlay"),r(".dt-sc-map-overlay").toggle(),!1}),r(".dt-sc-contact-details-on-map a.switch-icon").on("click",function(){return r(this).parents(".dt-sc-contact-details-on-map").addClass("hide-overlay"),r(".dt-sc-map-overlay").toggle(),r(".back-to-contact").toggle(),!1}),r(".dt-sc-contact-details-on-map a.back-to-contact").on("click",function(){return r(this).parents(".dt-sc-contact-details-on-map").removeClass("hide-overlay"),r(".dt-sc-map-overlay").toggle(),r(this).toggle(),!1}),r(window).bind("resize",function(){if(r(".apply-isotope").length&&r(".apply-isotope").isotope({itemSelector:".column",transformsEnabled:!1,masonry:{gutter:20}}),r(".dt-sc-portfolio-container").length){var e=r(".dt-sc-portfolio-container").hasClass("no-space")?0:20;r(".dt-sc-portfolio-container").css({overflow:"hidden"}).isotope({itemSelector:".column",masonry:{gutter:e}})}}),r(window).load(function(){var e=r(".dt-sc-portfolio-wrapper .portfolio:first").height();r(".icon-link-title").css("height",e+"px"),r(".apply-isotope").length&&r(".apply-isotope").isotope({itemSelector:".column",transformsEnabled:!1,masonry:{gutter:20}});var n=r(".dt-sc-portfolio-container");if(n.length){var t=n.hasClass("no-space")?0:20;n.isotope({filter:"*",masonry:{gutter:t},animationOptions:{duration:750,easing:"linear",queue:!1}})}r("div.dt-sc-portfolio-sorting").length&&r("div.dt-sc-portfolio-sorting a").on("click",function(){r("div.dt-sc-portfolio-sorting a").removeClass("active-sort");var e=n.hasClass("no-space")?0:20,t=r(this).attr("data-filter");return r(this).addClass("active-sort"),r(".dt-sc-portfolio-container").isotope({filter:t,masonry:{gutter:e},animationOptions:{duration:750,easing:"linear",queue:!1}}),!1}),r("ul.entry-gallery-post-slider").length&&1<r("ul.entry-gallery-post-slider li").length&&r("ul.entry-gallery-post-slider").bxSlider({auto:!1,video:!0,useCSS:!1,pager:"",autoHover:!0,adaptiveHeight:!0}),r(".apply-isotope").length&&r(".apply-isotope").isotope({itemSelector:".column",transformsEnabled:!1,masonry:{gutter:20}})}),r(".dt-like-this").click(function(){var t=jQuery(this);if(t.hasClass("liked"))return!1;var e={action:"dry_cleaning_likes_ajax",post_id:t.attr("data-id")};return r.post(dttheme_urls.ajaxurl,e,function(e){t.find("span").html(e),t.addClass("liked")}),!1}),r("body").hasClass("page-template-tpl-onepage")?(r("nav#main-menu ul.menu").visualNav({selectedClass:"current_page_item",externalLinks:"external",useHash:!1}),r("nav#main-menu ul.menu-left").visualNav({selectedClass:"current_page_item",externalLinks:"external",useHash:!1}),r("nav#main-menu ul.menu-right").visualNav({selectedClass:"current_page_item",externalLinks:"external",useHash:!1}),r(".left-header nav#main-menu ul.menu, .left-header-boxed nav#main-menu ul.menu, .left-header-creative nav#main-menu ul.menu").visualNav({selectedClass:"current_page_item",externalLinks:"external",useHash:!1})):r('nav#main-menu ul.menu li a[href^="#"]').length&&r('nav#main-menu ul.menu li a[href^="#"]').on("click",function(e){r(location).attr("href",dttheme_urls.url+"/"+r(this).attr("href"))}),r("body").hasClass("left-header-creative")&&(r("#header-wrapper").simpleSidebar({opener:"#toggle-sidebar",wrapper:"#main",animation:{easing:"easeOutQuint"},sidebar:{align:"left",width:260},sbWrapper:{display:!0}}),r('#toggle-sidebar, div[data-simplesidebar="mask"]').click(function(){r("#toggle-sidebar").toggleClass("close-icon")})),r("input, textarea").placeholder(),r("a.dt-sc-toggle-advanced-options").click(function(e){e.preventDefault();var t=r(this);t.parents(".wpsl-search").find("div.dt-sc-advanced-options").slideToggle("slow",function(){t.toggleClass("expanded"),t.hasClass("expanded")?t.html(dttheme_urls.advOptions+' <span class="fa fa-angle-up"></span>'):t.html(dttheme_urls.advOptions+' <span class="fa fa-angle-down"></span>')})})}),function(){function e(){if(classie.has(i,"open")){classie.remove(i,"open"),classie.add(i,"close");var t=function(e){if(support.transitions){if("visibility"!==e.propertyName)return;this.removeEventListener(transEndEventName,t)}classie.remove(i,"close")};support.transitions?i.addEventListener(transEndEventName,t):t()}else classie.has(i,"close")||classie.add(i,"open")}if(jQuery("div.overlay.overlay-hugeinc").length){var t=document.getElementById("trigger-overlay"),n=(i=document.querySelector("div.overlay")).querySelector("div.overlay-close");transEndEventNames={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},transEndEventName=transEndEventNames[Modernizr.prefixed("transition")],support={transitions:Modernizr.csstransitions},t.addEventListener("click",e),n.addEventListener("click",e)}if(jQuery("div.overlay.overlay-search").length){var i;t=document.getElementById("overlay-search-type2"),n=(i=document.querySelector("div.overlay")).querySelector("div.overlay-close");transEndEventNames={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},transEndEventName=transEndEventNames[Modernizr.prefixed("transition")],support={transitions:Modernizr.csstransitions},t.addEventListener("click",e),n.addEventListener("click",e)}}(),jQuery(document).ready(function(e){e(".wpb_wrapper, #video-section .large-12, .entry-body").fitVids()}),jQuery(document).ready(function(){mobileToggleMenu()}),jQuery(window).resize(function(){mobileToggleMenu()}),jQuery("div.gototop").click(function(){jQuery("body,html").animate({scrollTop:0},600)}),jQuery(window).scroll(function(){500<jQuery(window).scrollTop()?jQuery(".gototop").addClass("show"):jQuery(".gototop").removeClass("show")});