/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

const processUrl = location.href.replace('#', '') + "/server/request";

// ---- TO INSERT A ROW ------------------------------------------------

// BTN - INSERT ROW
export function addListenerToInsertRowBtn() {
    $('#insert-row').on('click', (evt:any) => {
        evt.preventDefault();

        let formData = {
            name: $('#name').val(),
            score: $('#score').val()
        };

        $.ajax( {
            url: processUrl + '/insert.php',
            method: "POST",
            data: formData,
            dataType: 'json',
            success: function( response ) {
                
                if( response.success ) {
                    $('#name').val('');
                    $('#score').val('');
                }

                if( $('#feedback').length ) {
                    $('#feedback').replaceWith( response.message );
                } else {
                    $('#content').append( response.message );
                }
            },
            error: function( jqXHR, textStatus, errorThrown ) {
                console.log(' ERROR al hacer Petición AJAX:\n' + errorThrown);
            }
        } );
        

    });
}

// ---- TO UPDATE A ROW ------------------------------------------------

// SELECT ID
export function addListenerToIdSelect() {

    $('#name').parent().hide();
    $('#score').parent().hide();
    $('#update-row').hide();

    $('#id').on('change', (evt:any) => {

        let id:string = evt.target.value;
        
        let text:string = $('#id :selected').text();
    
        let data:string[] = text.split(' - ');
        let name:string = data[1];
        let score:number = parseInt( data[2]);

        $('#name').val( name );
        $('#score').val( score );

        $('#name').parent().show();
        $('#score').parent().show();
        $('#update-row').show();

    });
}

// BTN - UPDATE ROW
export function addListenerToUpdateRowBtn() {
    $('#update-row').on('click', (evt:any) => {
        evt.preventDefault();

        let formData = {
            id: $('#id').val(),
            name: $('#name').val(),
            score: $('#score').val()
        };

        $.ajax( {
            url: processUrl + '/update.php',
            method: "POST",
            data: formData,
            dataType: 'json',
            success: function( response ) {
                
                if( $('#feedback').length ) {
                    $('#feedback').replaceWith( response.message );
                } else {
                    $('#content').append( response.message );
                }
                
                if( response.success ) {
                    $('#id [value='+formData.id+']').text(formData.id+' - '+formData.name+' - '+formData.score);
                }
                
            },
            error: function( jqXHR, textStatus, errorThrown ) {
                console.log(' ERROR al hacer Petición AJAX:\n' + errorThrown);
            }
        } );
    });
}

// ---- TO DELETE A ROW ------------------------------------------------

// BTN - DELETE ROW
export function addListenerToDeleteRowBtn() {
    $('#delete-row').on('click', (evt:any) => {
        
        evt.preventDefault();

        let formData = {
            id: $('#id').val()
        };

        $.ajax( {
            url: processUrl + '/delete.php',
            method: "POST",
            data: formData,
            dataType: 'json',
            success: function( response ) {
                
                if( $('#feedback').length ) {
                    $('#feedback').replaceWith( response.message );
                } else {
                    $('#content').append( response.message );
                }
                
                if( response.success ) {
                    $('#id [value='+formData.id+']').remove();
                }
            },
            error: function( jqXHR, textStatus, errorThrown ) {
                console.log(' ERROR al hacer Petición AJAX:\n' + errorThrown);
            }
        } );
        
    });
}


