jQuery( document ).ready(function( $ ) {
	"use strict";
        $("#preloader").animate({
            'opacity': '0'
        }, 2000, function(){
            setTimeout(function(){
                $("#preloader").css("visibility", "hidden").fadeOut();
            }, 50);
        });
    });