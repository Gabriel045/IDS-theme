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
$map          = get_field('map');
$page_name    = get_the_title();
?>

<section class="flex flex-col relative py-[60px] lg:py-[100px] <?php echo $page_name == "Contact" ?  "!pt-0" : "" ?>">
    <div class="block_content">
        <h2 class="text-center"><?php echo $title ?></h2>
        <div id="map" class="f-full pt-16">
            <iframe src="https://www.google.com/maps/d/embed?mid=1u_QeMKztk-XoXDxUUIi5uaPhyXay0SiS&ehbc=2E312F"
                width="100%" height="600"></iframe>
        </div>
    </div>
</section>