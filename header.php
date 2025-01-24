<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo get_the_title() ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class=" py-6 relative overflow-x-clip">
        <div class="block_content">
            <div class="flex flex-row">
                <div class="w-3/5 lg:w-1/5">
                    <figure>
                        <a href="/">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg"
                                alt="IDS logo">
                        </a>
                    </figure>
                </div>
                <div id="menu-dektop" class="lg:w-4/5 w-[40%] flex justify-end items-center gap-[12px] xl:gap-[25px]">
                    <?php echo  wp_nav_menu(array(
                        'menu'   => 'Header Menu',
                    ));  ?>

                    <div class="">
                        <span class="z-[99] relative nline-block lg:hidden cursor-pointer menu-mobile">
                            <div class="" id="nav-icon4">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </span>
                        <a href="/contact/" class="btn-orange !hidden lg:!flex">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile -->
        <div id="menu-mobile" class="menu-mobile-container lg:hidden h-[88vh] overflow-y-auto overflow-x-hidden">
            <div class="flex flex-col justify-between px-[40px] py-[80px] h-full">
                <div class="">
                    <?php echo  wp_nav_menu(array(
                        'menu'   => 'Header menu',
                    ));  ?>

                </div>
                <div class="flex justify-center">
                    <a href="#" class="btn-orange flex">Contact Us</a>
                </div>
            </div>
            <span class="blur-circle absolute top-0 right-0 !w-[150px] !h-[60vh]"></span>
        </div>
        <span class="blur-circle absolute top-0 right-0 !w-[150px] lg:!w-[200px]"></span>
    </header>

    <script>
        window.addEventListener("load", (event) => {
            const navIcon = document.querySelector("#nav-icon4")
            navIcon.addEventListener("click", () => {
                navIcon.classList.toggle("open");
                document.querySelector("#menu-mobile").classList.toggle("active");
            });
        });
    </script>