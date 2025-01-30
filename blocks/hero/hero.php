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

$title              = get_field('title');
$bottom_text        = get_field('bottom_text');
$button             = get_field('button');
$image              = get_field('image');
$border_line        = get_field('border_line');

?>

<section class="pt-8 pb-36 lg:pt-[120px] lg:pb-[120px] relative">
    <div class="block_content relative z-[9]">
        <div class="flex gap-9  lg:flex-nowrap  flex-wrap items-center">
            <div class="w-full lg:w-[48%]">
                <div><?php echo $title ?></div>
                <p class="max-w-[474px] py-6"><?php echo $bottom_text ?>
                </p>
                <?php if ($button["url"]) : ?>
                    <a class="btn-orange" href="<?php echo $button["url"] ?>"><?php echo $button["title"] ?></a>
                <?php endif; ?>
            </div>
            <div class="w-full lg:w-[52%]">
                <?php if ($image) : ?>
                    <figure class="hero-img <?php echo $border_line ? 'active' : '' ?>">
                        <img class="aspect-square object-cover rounded-tl-[25%]"
                            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" src="<?php echo $image ?>">
                    </figure>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <span class="blur-circle absolute bottom-0 left-[-150px]"></span>
    <figure class="absolute lg:hidden block bottom-[-12px] right-0">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-463.svg">
    </figure>
</section>