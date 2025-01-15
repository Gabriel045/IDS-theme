<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */


if (isset($block['data']['preview_image_my_acf_block'])) {

    echo '<img src="' . get_template_directory_uri() . $block['data']['preview_image_my_acf_block'] . ' " style="width: 100%; height: auto;">';

    return;
}


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'hero-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.

$title        = get_field('title');
$cards        = get_field('cards');
$bottom_text  = get_field('bottom_text');
$cta          = get_field('cta');

// second tab
$title_2       = get_field('title_2');
$heading       = get_field('heading');
$cards_2       = get_field('cards_2');


// third tab
$image        = get_field('image');
$content      = get_field('content');



?>

<section class="flex flex-col">
    <span class="blur-circle absolute top-[200px] left-0"></span>
    <span class="blur-circle absolute top-[800px] left-0"></span>
    <div class="block_content">
        <div><?php echo $title ?></div>
        <div class="flex gap-7 py-14 lg:py-16 flex-wrap lg:flex-nowrap relative">
            <figure class="absolute bottom-[-180px] z-[1] right-[-165px] hidden lg:block">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-465.svg">
            </figure>
            <?php foreach ($cards as $key => $card) : ?>
                <div class="hero-img rounded-t-[30px] px-10 pt-[60px] pb-[40px] w-full lg:w-1/3 bg-white flex flex-col justify-between gap-10 h-auto"
                    style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h3 class="text-center text-[24px] font-[700] text-[#0A4489]"><?php echo $card["title"] ?></h3>
                    <p class="!text-base text-center"><?php echo $card["text"] ?></p>
                    <a class="flex justify-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-blue.svg">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="flex items-center flex-col gap-7">
            <p class="!text-base text-GrayText text-center block max-w-[676px]"><?php echo $bottom_text ?></p>
            <a class="btn-orange" href="<?php echo $cta["url"] ?>"><?php echo $cta["title"] ?></a>
        </div>
    </div>
    <!-- Second Tab  -->
    <div class="block_content pt-14 lg:pt-24">
        <div><?php echo $title_2 ?></div>
        <div class="flex items-center flex-col mt-8">
            <p class="text-GrayText text-center block"><?php echo $heading ?></p>
        </div>
        <div class="flex gap-12 py-16 flex-wrap lg:flex-nowrap relative">
            <figure class="absolute bottom-[-180px] right-[-160px] z-[1] hidden lg:block"
                style="filter: brightness(0) saturate(100%) invert(82%) sepia(67%) saturate(4960%) hue-rotate(348deg) brightness(97%) contrast(84%);">
                <img src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-465.svg">
            </figure>
            <?php foreach ($cards_2 as $key => $card) : ?>
                <div class="hero-img rounded-t-[30px] px-8 lg:px-[61px] py-[69px] w-full lg:w-1/2 bg-[#0A4489] flex flex-col justify-between gap-10 h-auto"
                    style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h3 class="text-center text-[24px] text-white font-[700]"><?php echo $card["title"] ?></h3>
                    <p class="!text-base !text-[#FFFFFF99] text-center"><?php echo $card["text"] ?></p>
                    <a class="flex justify-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-blue.svg"
                            style="filter: brightness(0) saturate(100%) invert(82%) sepia(67%) saturate(4960%) hue-rotate(348deg) brightness(97%) contrast(84%);">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Third Tab  -->
    <div class="block_content pt-14 lg:pt-24">
        <div class="flex flex-wrap lg:flex-nowrap flex-col-reverse lg:flex-row gap-10 lg:gap-[95px]">
            <div class="w-full lg:w-[56%]">
                <figure class="hero-img h-full">
                    <img decoding="async" class="rounded-tl-[100px] object-left object-cover h-full relative z-10"
                        src="<?php echo $image  ?>">
                </figure>
            </div>
            <div class="w-full lg:w-[44%] relative">
                <div><?php echo $content  ?></div>
            </div>
        </div>
    </div>
</section>