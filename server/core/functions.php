<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

require_once 'DDBB.php';

// RETURN SANITIZED INPUT VALUE
function sanitize_input( $value ) {
    $value = trim( $value );
    $value = stripslashes( $value );
    $data = htmlspecialchars( $value );
    return $value;
}

// RETURN HTML CODE WITH FEEDBACK MESSAGE
function get_feedback( $title, $message, $msg_class='primary') {
    return <<< FEEDBACK
    <section id="feedback" class="row m-2">
        <div class="col alert alert-$msg_class" role="alert">
            <h4 id="title" class="alert-heading">$title</h4>
            <p id="message"> $message</p>
        </div>
    </section>
    FEEDBACK;
}

// RETURN HTML CODE WITH A TABLE
function get_table( $data ) {
    $html_code = '';
    foreach( $data as $row ) {
        $html_code .= "<tr> <td>{$row['id']}</td> <td>{$row['name']}</td> <td>{$row['score']}</td> </tr>";
    }

    return <<< TABLE
    <div class="table-responsive">
    <table class="table table-sm table-striped table-bordered table-hover">
    <thead class="bg-primary text-white sticky-top">
    <tr> <th>ID</th> <th>Name</th> <th>Score</th> </tr>
    </thead>
    <tbody>
    $html_code
    </tbody>
    </table>
    </div>
    TABLE;
}

// RETURN HTML CODE WITH A ROW (id) SELECTOR
function get_row_selector( $msg_class ) {
    
    $db = DDBB::get_instance();

    $sql = "SELECT * FROM player";
    $result = $db->execute_query($sql);
    
    $data = "";
    foreach( $result as $row ) {
        $data .= "\t\t<option value=\"{$row['id']}\"> {$row['id']} - {$row['name']} - {$row['score']} </options>\n";
    }

    return <<< ID_SELECTOR
    <div class="form-group">
        <label for="id" class="form-label text-$msg_class">Select</label>
        <select class="form-control form-control-lg" id="id"> $data </select>
    </div>
    ID_SELECTOR;
}
