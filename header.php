<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo wp_title() ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class=" py-6 relative overflow-x-clip">
        <div class="block_content">
            <div class="flex flex-row">
                <div class="w-1/5">
                    <figure>
                        <a href="/">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg"
                                alt="IDS logo">
                        </a>
                    </figure>
                </div>
                <div id="menu-dektop" class="lg:w-4/5 w-[40%] flex justify-end items-center gap-[25px]">
                    <?php echo  wp_nav_menu(array(
                        'menu'   => 'Header Menu',
                    ));  ?>

                    <div class="">
                        <span class="inline-block lg:hidden cursor-pointer menu-mobile">
                            <div class="" id="nav-icon4">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </span>
                        <a href="#" class="btn-orange hidden lg:flex">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <span class="blur-circle absolute top-[-10px] right-[-116px]"></span>
    </header>