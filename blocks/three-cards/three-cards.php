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
$heading      = get_field('heading');
$cards        = get_field('cards');
$text         = get_field('text');
$cta         = get_field('cta');
?>

<section class="flex flex-col relative">
    <div class="block_content">
        <div class="flex items-center flex-col gap-6">
            <div class="max-w-[876px]"><?php echo $title ?></div>
            <p class="!text-base text-GrayText text-center block max-w-[612px]"><?php echo $heading ?></p>
        </div>
        <div class="flex gap-7 max-[1024px]:!pt-[30px] py-16 flex-wrap lg:flex-nowrap relative">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="rounded-t-[30px] px-10 pt-[60px] pb-[40px] w-full <?php echo count($cards) == 3 ? 'lg:w-1/3' : 'w-full md:w-1/2' ?> bg-white flex flex-col justify-between gap-10 h-auto"
                    style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h3 class="text-center text-[24px] font-[700] text-[#0A4489]"><?php echo $card["title"] ?></h3>
                    <?php if (!empty($card["text"])) : ?>
                        <p class="!text-base text-center"><?php echo $card["text"] ?></p>
                    <?php endif ?>
                    <?php if (!empty($card["link"]["url"])) : ?>
                        <figure class="flex justify-center">
                            <a class="w-fit" href="<?php echo $card["link"]["url"] ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-blue.svg">
                            </a>
                        </figure>
                    <?php endif ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="flex items-center flex-col gap-7">
            <div id="text-image" class="!text-base text-GrayText text-center block max-w-[676px]"><?php echo $text ?>
            </div>
            <?php if (!empty($cta["url"])) : ?>
                <a class="btn-orange" href="<?php echo $cta["url"] ?>"><?php echo $cta["title"] ?></a>
            <?php endif ?>
        </div>
    </div>
</section>