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
$title       = get_field('title');
$cards       = get_field('cards');
$content     = get_field('content');
?>

<section class="flex flex-col">
    <span class="blur-circle absolute top-[150px] left-0"></span>
    <div class="block_content pt-8 lg:pt-8">
        <h2 class="text-center"><?php echo $title ?></h2>
        <div class="flex gap-12 pt-16 pb-24 flex-wrap lg:flex-nowrap relative w-3/4 lg:w-full m-auto">
            <?php foreach ($cards as $key => $card) : ?>
            <div class="hero-img rounded-t-[30px] px-8 py-[69px] w-full md:w-1/2 lg:w-1/4 bg-[#0A4489] flex flex-col justify-between gap-10 h-auto"
                style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <h3 class="text-center text-[24px] text-white font-[700]"><?php echo $card["content"] ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
        <div><?php echo $content ?></div>
    </div>
</section>