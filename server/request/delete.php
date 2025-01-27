<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 * 
 */

require_once '../core/functions.php';

$status = false;
$title = "Empty fields";
$msg = "The fields must be filled.";
$msg_class = "danger";

# CHECK POST REQUEST
if( $_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if( isset($_POST['id']) && !empty($_POST['id']) ) {

        $id = sanitize_input($_POST['id']);

        $db = DDBB::get_instance();
        $sql = "DELETE FROM player WHERE id=:id";
        $params = ['id'=>$id];
        $result = $db->execute_query( $sql, $params );
    
        if( $result ) {
            $status = true;
            $title = "Row deleted";
            $msg = "Deleted row with ID: $id";
            $msg_class = "success";
        } else {
            $title = "Row not deleted";
            $msg = "Not deleted row with ID: $id";
        }

    }

    $response = [
        'success' => $status,
        'message' => get_feedback( $title, $msg, $msg_class )
    ];
    
    print json_encode( $response );
    
}
