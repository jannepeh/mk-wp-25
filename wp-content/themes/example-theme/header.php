<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example WordPress Theme</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>

<body>
<div class="container">
    <header class="page-header">
        <div class="header-top-left">
            <img src="//place-hold.it/200x100?text=Logo" alt="Logo">
        </div>
        <div class="header-top-right">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </nav>
        </div>
        <section class="hero">
            <div class="hero-text">
                <h1>Welcome to our website</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/map.svg" alt="Hero">
        </section>
    </header>