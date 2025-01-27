<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

require_once '../core/functions.php';

$status = false;
$title = "Empty fields";
$msg = "The fields must be filled.";
$msg_class = "danger";

# CHECK POST REQUEST
if( $_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if( isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['score']) && !empty($_POST['score']) ) {
        $name = sanitize_input($_POST['name']);
        $score = sanitize_input($_POST['score']);

        $db = DDBB::get_instance();
        $sql = "INSERT INTO player (name, score) VALUES (:name, :score)";
        $params = ['name'=>$name, 'score'=>$score];
        $result = $db->execute_query( $sql, $params );
        
        if( $result ) {
            $status = true;
            $title = "Row inserted";
            $msg = "Inserted: $name - $score";
            $msg_class = "success";
        } else {
            $title = "Row not inserted";
            $msg = "Inserted: $name - $score";
        }  

    }

    $response = [
        'success' => $status,
        'message' => get_feedback( $title, $msg, $msg_class )
    ];
    
    print json_encode( $response );

}
