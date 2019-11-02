<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php bloginfo('description'); ?>
        <!--  the_title(); как вариант -->


    </title>

    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Roboto:300,400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" style="background-image: url(<?php the_field('top__bg'); ?>);">
        <div class="header__inner">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="">
            <div class="header__name"><?php the_field('header__name'); ?> </div>
            <a href="tel:+75852772217" class="phone"><?php the_field('phone'); ?></a>
            <div class="header__title"><?php the_field('header__title'); ?> </div>
            <div class="header__sale"><img src="<?php the_field('header__sale');     ?>" alt=""></div>
        </div>
    </header>
