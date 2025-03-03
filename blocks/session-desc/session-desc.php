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


?>
<section class="pb-[100px] lg:pb-[120px] flex flex-col relative">
    <div class="block_content">
        <h2 class="text-center"><?php echo $title ?></h2>
        <div class="mt-8 flex flex-wrap gap-[1%] gap-y-12">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="w-full md:w-[49%] lg:w-[32.5%]">
                    <figure>
                        <img src="<?php echo $card["image"] ?>">
                    </figure>
                    <div class="mt-4"><?php echo $card["text"] ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <span class="blur-circle absolute top-[50%]  !w-[100px] !h-[1000px]  left-[0%]"></span>
</section>