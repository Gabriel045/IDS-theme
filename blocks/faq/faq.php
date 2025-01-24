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

$title            = get_field('title');
$questions        = get_field('questions');
$bottom_text      = get_field('bottom_text');
?>

<section id="faq" class="flex flex-col relative pb-[100px]">
    <div class="block_content">
        <div class="text-center max-w-[500px] m-auto"><?php echo $title ?></div>
        <div class="<?php echo $bottom_text ? 'py-[60px] lg:py-20' : 'pt-[60px] pt-20' ?>  flex flex-col gap-y-7">
            <?php foreach ($questions as $key => $question) : ?>
            <details class="bg-[#E8E8E84F] p-8">
                <summary class="cursor-pointer flex items-center gap-3">
                    <span
                        class="text-[18px] lg:text-[24px] inline-block leading-normal text-Dark font-[500] w-full"><?php echo $question["title"] ?></span>
                </summary>
                <div class="mt-[30px] px-[30px]"><?php echo $question["content"] ?></div>
            </details>
            <?php endforeach ?>
        </div>
        <div class="max-w-[880px] m-auto"><?php echo $bottom_text ?></div>
    </div>
</section>