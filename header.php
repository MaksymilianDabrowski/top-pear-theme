<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#F3F3F3] font-sans'); ?>>
    <div id="page" class="site relative">
        <?php
        get_template_part('components/navbar');
        ?>
        <main id="content" class="site-content pt-[180px]">
        </main>
</body>