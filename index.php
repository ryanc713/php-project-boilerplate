<?php

require "php/layout/header.php";
?>
<div class="container my-5">
    <h1 class="text-center mb-4"><?= $page_title ?></h1>
    <p class="lead text-center mb-5"><?= $page_description ?></p>
    <div class="row">
        <div class="col-md-6">
            <h2>About This Project</h2>
            <p>This is a simple PHP project boilerplate designed to provide a clean and organized structure for your PHP projects. It includes a basic layout, a database connection class, and some example content to get you started.</p>
        </div>
        <div class="col-md-6">
            <h2>Features</h2>
            <ul>
                <li>Clean and organized file structure</li>
                <li>Bootstrap 5 for responsive design</li>
                <li>Customizable header and footer</li>
                <li>Database connection class using PDO</li>
                <li>Example content to help you get started</li>
            </ul>
        </div>
    </div>
<?php
require "php/layout/footer.php";
?>