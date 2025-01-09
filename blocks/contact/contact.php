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
?>

<section class="pb-[140px] relative">
    <div class="block_content flex flex-col items-center">
        <div class="w-[480px] contact-form">
            <?php echo do_shortcode("[gravityform id='1' title='true']") ?>
        </div>
    </div>
    <figure class="absolute bottom-[80px] left-0">
        <img class="rotate-180" decoding="async"
            src="https://wordpress-755960-5157946.cloudwaysapps.com/wp-content/themes/IDS-theme/assets/images/Group-465.svg">
    </figure>
    <figure class="absolute top-0 right-0 "
        style="filter: brightness(0) saturate(100%) invert(82%) sepia(67%) saturate(4960%) hue-rotate(348deg) brightness(97%) contrast(84%);">
        <img decoding="async"
            src=" https://wordpress-755960-5157946.cloudwaysapps.com/wp-content/themes/IDS-theme/assets/images/Group-465.svg">
    </figure>
    <span class="!w-[200px] !h-[200px] blur-circle absolute top-[50px] right-0"></span>
    <span class="!w-[200px] !h-[200px] blur-circle absolute bottom-[50px] left-0"></span>
</section>