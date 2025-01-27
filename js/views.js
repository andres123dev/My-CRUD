/** Andrés Fernández Burón
 *  23/04/2023
 *
 *  Copyright (C) 2023 All rights reserved
 */
import { addListenerToInsertRowBtn, addListenerToIdSelect, addListenerToUpdateRowBtn, addListenerToDeleteRowBtn } from "./buttons.js";
// SHOW A VIEW PART
export function showViewPart(view) {
    let routes = {
        "db-connect": "db-connect.php",
        "view-select": "select-rows.php",
        "view-insert": "insert-row.php",
        "view-update": "update-row.php",
        "view-delete": "delete-row.php",
    };
    if (view in routes) {
        queryView(routes[view]);
    }
    else {
        alert('La vista (' + view + ') no existe');
    }
}
// MAKE AN AJAX QUERY FOR A VIEW PART
function queryView(viewName) {
    let src = location.href.replace('#', '') + "/server/view/" + viewName;
    $.ajax({
        url: src,
        method: "POST",
        dataType: 'html',
        success: function (response, textStatus, jqXHR) {
            $('#content').html(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(' ERROR en la petición AJAX:\n' + errorThrown);
        },
        complete: function (response) {
            // APPLICATION VIEW BUTTONS
            switch (viewName) {
                // SELECT ROWS
                case 'select-rows.php':
                    ////addBtnListenerToSelectRows();
                    break;
                // INSERT ROW
                case 'insert-row.php':
                    addListenerToInsertRowBtn();
                    break;
                // UPDATE ROW
                case 'update-row.php':
                    addListenerToIdSelect();
                    addListenerToUpdateRowBtn();
                    break;
                // DELETE ROW
                case 'delete-row.php':
                    addListenerToDeleteRowBtn();
                    break;
            }
        },
    });
}
