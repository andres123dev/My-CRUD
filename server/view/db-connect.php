<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

require '../core/functions.php';

try {

    $db = DDBB::get_instance();

    $title = 'Database connection';
    $feedback_msg = "You have connection to database.";
    $msg_class = 'success';
    print get_feedback($title, $feedback_msg, $msg_class);

} catch (Exception $e) {

    $title = 'Database connection';
    $feedback_msg = "You have not connection to database.";
    $msg_class = 'danger';
    print get_feedback($title, $feedback_msg, $msg_class);

}
