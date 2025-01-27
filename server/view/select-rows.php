<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

require '../core/functions.php';

$db = DDBB::get_instance();

$sql = "SELECT * FROM player";
$result = $db->execute_query($sql);

?>
<article class="row">
    <section class="col">
        <h1 class="text-primary">All the rows</h1>
        <?= get_table( $result ); ?>
    </section>
</article>
