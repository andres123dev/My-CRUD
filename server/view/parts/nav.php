<?php
/** Andrés Fernández Burón
 *  23/04/2023
 * 
 *  Copyright (C) 2023 All rights reserved
 * 
 *  MAIN MENU
 */

?>
<nav class="navbar navbar-expand-md nav bg-primary">
    <div class="container-fluid">

        <a class="navbar-brand" href="">
            <span class="fw-bold text-light">My CRUD</span>
        </a>
 
        <button type="button" class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto ps-2">
                <li class="nav-item">
                    <a id="view-select" class="nav-link text-white fw-bold" href="" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Select rows</a>
                </li>
                <li class="nav-item">
                    <a id="view-insert" class="nav-link text-white fw-bold" href="" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Insert row</a>
                </li>
                <li class="nav-item">
                    <a id="view-update" class="nav-link text-white fw-bold" href="" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Update row</a>
                </li>
                <li class="nav-item">
                    <a id="view-delete" class="nav-link text-white fw-bold" href="" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Delete row</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
