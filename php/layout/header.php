<?php

// Page Information Variables
$site_name = 'PHP Project Boilerplate';
$page_title = 'Welcome to PHP Project Boilerplate';
$page_description = 'A simple PHP project boilerplate with a clean and organized structure.';

// Establish if SSL is used
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
// Site Hostname
$host = $_SERVER['HTTP_HOST'];
// Path to current page
$uri = $_SERVER['REQUEST_URI'];
// Generate full url for current page
$page_url = $protocol . $host . $uri;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $page_description ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="<?= $page_description ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= $page_url ?>">
    
    <!-- SITE TITLE -->
    <title><?= $site_name ?></title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <?php require 'navbar.php'; ?>