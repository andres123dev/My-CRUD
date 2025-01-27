/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

import { showViewPart } from "./views.js";

jQuery( function() {

    console.log(location.origin);
    console.log(location.href);

    // MENU BUTTONS
    $('.nav-link').on('click', (evt) => {
        let view:string =  evt.target.id;
        showViewPart( view );
    });

    $(".navbar .nav-link").on("click", function(){
        $(".navbar").find(".active").removeClass("active");
        $(this).addClass("active");
     });

    showViewPart( 'db-connect' );

} );
