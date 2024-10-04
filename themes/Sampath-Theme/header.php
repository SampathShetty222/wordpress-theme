<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SampatH New Theme Development</title>
    <? wp_head() ?>
</head>
<body <?php body_class()?>>
<nav class="flex justify-between py-2 md:px-[50px] px-[20px] items-center sticky top-0 bg-white z-[9999]">
    <div class="md:w-[10%] w-[30%]">
        <?php the_custom_logo() ?>
    </div>
    <div class="md:w-[80%] w-[40%] desktop-menu">
        <?php
        wp_nav_menu( 
            array(
                'theme_location' => 'header-Main-Menu',
            )
         )
        ?>
    </div>
    <div class="md:w-[10%] w-[30%] sm:w-[30%]">
        <?php if( is_active_sidebar('header-buttom')){
            dynamic_sidebar('header-buttom');
        } ?>
    </div>
    <div class="hamberger" id="hamberger">
        <div class="w-[20px] h-[2px] mb-1 bg-black first" id="first"></div>
        <div class="w-[20px] h-[2px] mb-1 bg-black second" id="second"></div>
        <div class="w-[20px] h-[2px] mb-1 bg-black third" id="third"></div>
    </div>
</nav>
<div class="mobile-menu bg-[#1b9200] text-white w-[-webkit-fill-available] pl-8 py-6 hidden" id="menu-block">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'Mobile-Main-Menu'
                )
            )
        ?>
    </div>