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
$page_ID      = get_the_ID();
?>

<section class="pt-[60px] pb-[100px] lg:pb-[140px] relative">
    <div class="block_content flex flex-col items-center">
        <div class="pb-[50px]"><?php echo $title ?></div>
        <div class="lg:w-[480px] contact-form">
            <?php echo do_shortcode("[gravityform id='1' title='false']") ?>
        </div>
    </div>
    <figure class="absolute bottom-[80px] left-0 hidden lg:block">
        <img class="rotate-180" decoding="async"
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-465.svg">
    </figure>
    <figure class="absolute top-0 right-0 <?php echo $page_ID != "256" ? 'hidden lg:block' : 'hidden xl:block' ?>"
        style="filter: brightness(0) saturate(100%) invert(82%) sepia(67%) saturate(4960%) hue-rotate(348deg) brightness(97%) contrast(84%);">
        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-465.svg">
    </figure>
    <figure class="absolute bottom-3 w-full left-0 lg:hidden block">
        <img class="w-full" decoding="async"
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/group-lines.svg">
    </figure>
    <span class="!w-[200px] !h-[200px] blur-circle absolute top-[50px] right-0"></span>
    <span class="!w-[200px] !h-[200px] blur-circle absolute bottom-[50px] left-0"></span>
</section>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const items = document.querySelectorAll(".accordion-wrapper .column")
        items.forEach(item => {
            const button = item.querySelector("button")
            if (button.textContent.includes("2025 Price Sheet")) {
                setTimeout(() => {
                    console.log(button)
                    button.click()
                }, 300);
            }
        });
    });
</script>