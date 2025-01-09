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

$col_1        = get_field('col_1');
$col_2        = get_field('col_2');
$image        = get_field('image');
$content      = get_field('content');

?>

<section class="flex flex-col relative">
    <div class="block_content">
        <div class="flex gap-[10%] items-end h-auto">
            <div><?php echo $col_1 ?></div>
            <div><?php echo $col_2 ?></div>
        </div>
    </div>
</section>

<!--  -->
<section class="py-[120px] flex flex-col relative">
    <div class="block_content">
        <div class="flex gap-[6%]">
            <div class="w-1/2">
                <figure class="h-full">
                    <img decoding="async" class="rounded-[26px] object-cover h-full" src="<?php echo  $image ?>">
                </figure>
            </div>
            <div class="w-1/2 relative flex items-center">
                <div>
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>
    <figure class="absolute top-[80px] right-[-50px]">
        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-463.svg">
    </figure>
    <span class="blur-circle absolute  bottom-0 right-[40%]"></span>

</section>