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

$image        = get_field('image');
$title        = get_field('title');
// $button             = get_field('button');

?>

<section class="pb-10 lg:pb-[120px] relative pt-[60px] mt-[-50px]">
    <span class="blur-circle absolute top-0 lg:top-[200px] left-0  max-[1023px]:!w-[200px]"></span>
    <span class="blur-circle absolute bottom-[200px] lg:bottom-auto top-auto lg:top-[200px] right-0 !h-[600px]"></span>
    <figure class="absolute hidden lg:block top-0 right-0">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-463.svg">
    </figure>
    <div class="block_content">
        <div class="flex flex-wrap lg:flex-nowrap flex-col-reverse lg:flex-row gap-10 lg:gap-[95px]">
            <div class="w-full lg:w-[56%]">
                <figure class="hero-img h-full">
                    <img class="rounded-tl-[100px] object-center object-cover h-full relative z-10"
                        src="<?php echo $image ?>">
                </figure>
            </div>
            <div class="w-full lg:w-[44%] relative">
                <div> <?php echo $title ?> </div>
                <ul class="mt-5 relative z-10">
                    <li class="mb-7 flex gap-[10px]">
                        <a href="#" class="text-[#0A4489] leading-6 text-[18px] lg:text-[22px] font-[500]">High School
                            Data Science</a>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-orange.svg">
                    </li>
                    <li class="mb-7 flex gap-[10px]">
                        <a href="#" class="text-[#0A4489] leading-6 text-[18px] lg:text-[22px] font-[500]">Middle School
                            Data
                            Science</a>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-orange.svg">
                    </li>
                    <li class="mb-7 flex gap-[10px]">
                        <a href="#" class="text-[#0A4489] leading-6 text-[18px] lg:text-[22px] font-[500]">Professional
                            Development
                            <br>
                            Programs/Workshops</a>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-orange.svg">
                    </li>
                </ul>
                <figure class="absolute hidden lg:block bottom-[-30px] left-[-200px] rotate-[180deg]">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-463.svg">
                </figure>
            </div>
        </div>
    </div>
</section>