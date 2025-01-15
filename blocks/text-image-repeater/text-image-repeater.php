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
$cards        = get_field('cards');
$page_ID = get_the_ID()
?>

<section id="text-image" class="pb-[120px] flex flex-col relative">
    <!-- <span class="blur-circle absolute bottom-[200px] left-0"></span> -->
    <div class="block_content z-[9]">
        <?php foreach ($cards as $key => $card) : ?>
        <div class="pt-[60px]">
            <?php if ($card["title"]) : ?>
            <div class="pb-[60px]"><?php echo $card["title"] ?></div>
            <?php endif ?>
            <div
                class="flex gap-[6%] max-[1023px]:gap-y-[50px] flex-wrap lg:flex-nowrap  <?php echo $card["image_position"][0] == "Right" ? "flex-col-reverse lg:flex-row-reverse" : "flex-col-reverse lg:flex-row" ?>">
                <div class="w-full lg:w-1/2 <?php echo $page_ID == "338" ? 'flex items-center' : '' ?>">
                    <figure class="<?php echo $page_ID != "338" ? 'h-full' : '' ?> relative ">
                        <img decoding="async" class="object-cover h-full" src="<?php echo  $card["image"] ?>">
                    </figure>
                </div>
                <div class="w-full lg:w-1/2 relative flex items-center">
                    <div>
                        <?php echo $card["content"] ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</section>