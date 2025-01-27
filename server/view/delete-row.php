<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

require '../core/functions.php';

?>
<article class="row p-1">
    <section class="col">
        <h1 class="text-danger">Delete a row</h1>
        <form method="post">
            <?= get_row_selector('danger'); ?>
            <button type="button" id="delete-row" class="btn btn-danger mt-2">DELETE</button>
        </form>
    </section>
</article>
