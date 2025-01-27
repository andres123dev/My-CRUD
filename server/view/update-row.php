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
        <h1 class="text-warning">Update a row</h1>
        <form method="post" class="needs-validation" novalidate>
            <?= get_row_selector('warning'); ?>
            <div class="form-group">
                <label class="text-warning" for="name">Name</label>
                <input id="name" type="text" class="form-control form-control-lg" aria-describedby="nameHelp" placeholder="Write the name">
                <small id="nameHelp" class="form-text text-muted">The person name</small>
            </div>
            <div class="form-group">
                <label class="text-warning" for="score">Score</label>
                <input id="score" type="number" class="form-control form-control-lg" aria-describedby="scoreHelp">
                <small id="scoreHelp" class="form-text text-muted">The person score</small>
            </div>
            <button type="submit" id="update-row" class="btn btn-warning mt-2">UPDATE</button>
        </form>
    </section>
</article>
