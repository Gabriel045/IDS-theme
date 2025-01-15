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
$image        = get_field('image');
$bottom_text  = get_field('bottom_text');
?>

<section class="flex flex-col relative">
    <span class="blur-circle absolute top-[150px] right-0 !h-[100px]"></span>
    <div class="block_content">
        <h2 class="text-center"><?php echo $title ?></h2>
        <figure class="pt-8 flex justify-center">
            <img src="<?php echo $image ?>" alt="">
        </figure>
        <?php if ($bottom_text) : ?>
            <div class="flex justify-center">
                <div class="mt-[24px] lg:max-w-[440px]"><?php echo $bottom_text ?></div>
            </div>
        <?php endif ?>
    </div>
</section>