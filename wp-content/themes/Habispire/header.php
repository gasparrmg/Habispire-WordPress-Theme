<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <img id="logo-image" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo_habispire.svg" alt="Habispire Logo">
        </div>
        <?php wp_nav_menu(); ?>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script src="<?php echo get_bloginfo('template_url') ?>/assets/js/app.js"></script>
