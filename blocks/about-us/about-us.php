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
$content        = get_field('content');
$cta        = get_field('cta');

//Second tab
$content_2        = get_field('content_2');

//Third tab
$cards        = get_field('cards');
$bottom_text  = get_field('bottom_text');


//Four tab
$title        = get_field('title');
$cards_2  = get_field('cards_2');

?>

<section class="flex flex-col relative">
    <div class="block_content pb-[60px] lg:pb-[100px]">
        <div class="flex flex-col items-center">
            <div class="top_section max-w-[950px]"><?php echo $content ?></div>
            <a href="<?php echo $cta["url"] ?>" class="btn-orange mt-10"><?php echo $cta["title"] ?></a>
        </div>
    </div>
</section>

<!--  -->
<section class="relative py-0 lg:py-[80px]">
    <span class="blur-circle absolute bottom-[100px] lg:bottom-[50px] right-0 max-[1024px]:!w-[150px]"></span>
    <div class="block_content">
        <div class="flex justify-center">
            <div class="max-w-[495px]"><?php echo $content_2 ?></div>
        </div>
    </div>
    <figure class="absolute bottom-[20px] left-0 hidden lg:block">
        <img class="rotate-180" decoding="async"
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-465.svg">
    </figure>
    <figure class="absolute top-0 right-0 hidden lg:block"
        style="filter: brightness(0) saturate(100%) invert(82%) sepia(67%) saturate(4960%) hue-rotate(348deg) brightness(97%) contrast(84%);">
        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-465.svg">
    </figure>
</section>

<!--  -->
<section class="relative py-[60px] lg:py-[80px]">
    <span class="blur-circle absolute bottom-[200px] lg:bottom-[50px] right-0 !w-[150px] !h-[800px]"></span>
    <div class="block_content">
        <h2 class="text-center">Collaborators</h2>
        <div class="flex gap-7 py-16 flex-wrap lg:flex-nowrap relative">
            <?php foreach ($cards as $key => $card) : ?>
                <article
                    class="rounded-t-[30px] px-10 pt-[60px] pb-[40px] w-full <?php echo count($cards) == 3 ? 'lg:w-1/3' : 'w-full md:w-1/2' ?> bg-white flex flex-col justify-between gap-10 h-auto"
                    style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <figure class="w-full flex justify-center">
                        <img src="<?php echo $card["image"] ?>">
                    </figure>
                    <h4 class="text-center text-[#0A4489]"><?php echo $card["text"] ?></h4>
                    <?php if (!empty($card["link"]["url"])) : ?>
                        <figure class="flex justify-center">
                            <a class="w-fit" target="<?php echo $card["link"]["target"] ?>"
                                href="<?php echo $card["link"]["url"] ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-blue.svg">
                            </a>
                        </figure>
                    <?php endif ?>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="flex justify-center">
            <div class="max-w-[770px]"><?php echo $bottom_text ?></div>
        </div>
    </div>
</section>

<!--  -->
<section id="text-image" class="relative">
    <div class="block_content">
        <div class="flex justify-center">
            <div class="max-w-[770px]"><?php echo $title ?></div>
        </div>
        <div class="pt-24 flex gap-y-24 gap-[8%] flex-wrap">
            <?php foreach ($cards_2 as $key => $card) : ?>
                <article class="w-full md:w-[46%]">
                    <figure class="flex justify-start">
                        <img src="<?php echo $card["image_2"] ?>">
                    </figure>
                    <div class="pt-6"><?php echo $card["name"] ?></div>
                </article>
            <?php endforeach ?>
        </div>
    </div>
</section>