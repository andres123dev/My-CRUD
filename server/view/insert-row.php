<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 */

?>
<article class="row p-1">
    <section class="col">        
        <h1 class="text-success">Insert a row</h1>
        <form method="post">
            <div class="form-group">
                <label class="text-success" for="name">Name</label>
                <input id="name" type="text" class="form-control form-control-lg" aria-describedby="nameHelp" placeholder="Write the name">
                <small id="nameHelp" class="form-text text-muted">The person name</small>
            </div>
            <div class="form-group">
                <label class="text-success" for="score">Score</label>
                <input id="score" type="number" class="form-control form-control-lg" aria-describedby="scoreHelp">
                <small id="scoreHelp" class="form-text text-muted">The person score</small>
            </div>
            <button type="submit" id="insert-row" class="btn btn-success mt-2">INSERT</button>
        </form>
    </section>
</article>
