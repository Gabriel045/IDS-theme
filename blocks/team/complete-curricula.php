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

$text        = get_field('text');
$cards        = get_field('cards');
?>

<section class="flex flex-col relative">
    <div class="block_content">
        <div class="flex flex-wrap gap-[2%] gap-y-12 h-auto">
            <?php foreach ($cards as $card) : ?>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <figure>
                        <img src="<?php echo $card['image']; ?>" alt="team">
                    </figure>
                    <div class="my-5"><?php echo $card["text"] ?> </div>
                    <a href="<?php echo $card["link"]["url"] ?>" class="flex flex-col gap-2">
                        <span><?php echo $card["link"]["title"] ?></span>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vector-arrow.svg">
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>