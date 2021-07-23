/*!
    * Start Bootstrap - SB Admin v7.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    //
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});


$(function() {

    "use strict";

    $(".pricicing-table .heden-title .plans .plan").on("click", function() {
        $(this).siblings(".bg-active").css("transform","translateX(" + $(this).position().left + "px)");
        $(".section-pricing .plans .plan").css("color","#61648f");
        $(this).css("color","#fff");
        if($(this).hasClass("yearly")) {
            $(".pricicing-table .content .sallry .price").css("opacity",0);
            $(".pricicing-table .content .sallry .yearly-price").css("opacity",1);
        }
        else {
            $(".pricicing-table .content .sallry .price").css("opacity",0);
            $(".pricicing-table .content .sallry .monthly-price").css("opacity",1);
        }
    });

});
