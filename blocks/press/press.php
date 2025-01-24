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

// First tab
$text            = get_field('text');
$articles        = get_field('articles');


?>

<section class="flex flex-col relative">
    <div class="block_content">
        <div> <?php echo $text ?></div>
        <div class=" lg:w-[700px] m-auto">
            <h3 class="py-[60px] lg:py-24">Articles About IDS</h3>
            <?php foreach ($articles as $key => $card) : ?>
                <article class="pb-24 flex flex-col">
                    <figure>
                        <img class="w-[200px]" src="<?php echo $card["image"] ?>">
                    </figure>
                    <h3 class="py-6"><?php echo $card["title"] ?></h3>
                    <div class="flex gap-6">
                        <span class="text-Orange text-[18px] font-[500]"><?php echo $card["name"] ?></span>
                        <span class="text-GrayText text-[18px] font-[500]"><?php echo $card["date"] ?></span>
                    </div>
                    <div class="py-6"><?php echo $card["text"] ?></div>
                    <a class="text-[18px] text-Dark font-[500]" target="_blank"
                        href="<?php echo $card["cta"]["url"] ?>"><?php echo $card["cta"]["title"] ?></a>
                </article>
            <?php endforeach ?>
        </div>
    </div>
</section>