<footer class="relative">
    <span class="blur-circle !w-[200px] !h-[300px] absolute left-0 bottom-0"></span>
    <span class="blur-circle absolute  top-0 right-[40%]"></span>
    <div class="block_content pt-24 pb-11 relative">
        <div class="flex gap-20">
            <div class="w-1/2">
                <figure>
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg" alt="IDS logo">
                    </a>
                </figure>
                <p class="mt-9 mb-1 max-w-[475px] text-GrayText ">
                    Lorem ipsum dolor sit amet consectetur. Lectus et faucibus sagittis non consectetur adipiscing.
                </p>
                <p class="flex text-Dark">Follow us on <img class="ml-2"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter.svg"></p>
            </div>
            <div class="w-1/2 flex flex-row justify-center gap-28">
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
        <div class="mt-24 flex items-center justify-between">
            <div class="w-2/5">
                <span class="text-base font-[500] text-GrayText">© 2023 IDS. All rights reserved.</span>
            </div>
            <figure>
                <img class="w-[300px]"
                    src="https://wordpress-755960-5157946.cloudwaysapps.com/wp-content/uploads/2025/01/27c2322272737dc2e845c01797c05e33-1.webp"
                    alt="">
            </figure>
            <div class="flex gap-2">
                <a class="text-base font-[500] text-GrayText" href="#">Terms</a>
                <a class="text-base font-[500] text-GrayText" href="#">Privacy</a>
                <a class="text-base font-[500] text-GrayText" href="#">Disclosures</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>