<footer class="relative">
    <span class="blur-circle !w-[200px] !h-[300px] absolute left-0 top-0"></span>
    <span class="blur-circle absolute  top-0 right-[40%] max-[1024px]:!w-[150px] !h-[200px]"></span>
    <div class="border-Orange border-[2px] mt-14"> </div>
    <div class="block_content pt-12 lg:pt-24 pb-11 relative">

        <div class="flex flex-wrap lg:flex-nowrap gap-12 lg:gap-20">
            <div class="w-full lg:w-1/2">
                <figure>
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg" alt="IDS logo">
                    </a>
                </figure>
                <p class="mt-9 mb-2 max-w-[475px] text-GrayText ">
                    ThinkData Ed transforms school education by providing professional learning and resources to support
                    teachers in developing students’ data acumen, computational reasoning, and interdisciplinary
                    collaboration.
                </p>
                <div class="flex text-GrayText font-[500]">Follow us on
                    <a target="_blank" href="https://x.com/uclaIDS">
                        <img class="ml-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter.svg">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/thinkdataed/">
                        <img class="ml-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/linkedin.svg">
                    </a>
                    <a target="_blank" href="https://www.instagram.com/thinkdataed">
                        <img class="ml-2"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg">
                    </a>
                    <a target="_blank" href="https://www.facebook.com/thinkdataed">
                        <img class="ml-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/facebook.svg">
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-row justify-start lg:justify-center gap-28">
                <div class="footer footer1">
                    <?php echo  wp_nav_menu(array(
                        'menu'   => 'Footer1',
                    ));  ?>
                </div>
                <div class="footer footer2 ">
                    <?php echo  wp_nav_menu(array(
                        'menu'   => 'Footer2',
                    ));  ?>
                </div>
            </div>
        </div>
        <div class="mt-12 lg:mt-16 flex items-center gap-y-7 lg:gap-y-0 flex-wrap lg:flex-nowrap  justify-between">
            <div class="w-full lg:w-2/5 text-center lg:text-start">
                <span class="text-base font-[500] text-GrayText">© 2025 IDS. All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>