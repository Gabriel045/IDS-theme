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
$cards_2     = get_field('cards_2');
$cta         = get_field('cta');

?>

<section id="conected" class="pt-[120px] relative">
    <span class="blur-circle absolute top-[300px] !w-[150px] h-[300px] lg:!h-[900px] left-0"></span>
    <span class="blur-circle absolute  max-[1024px]:!w-[100px] bottom-[100px] lg:bottom-[200px] right-0"></span>
    <div class="block_content flex flex-col items-center w-full">
        <div class="mb-12 lg:max-w-[681px]"><?php echo $title ?></div>
        <div class="max-w-[390px] lg:max-w-[890px] flex flex-row">
            <div class="flex flex-col gap-y-[57px] lg:gap-y-[126px]  w-[40%]">
                <?php foreach ($cards as $key => $card) : ?>
                    <div class="z-[99] h-[155px] lg:h-[340px] rounded-t-[30px] px-[18px] lg:px-[40px] py-11 lg:py-[69px] w-full bg-[#0A4489] flex flex-col justify-center  gap-2 lg:gap-10"
                        style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        <div class="conected-p  text-center"><?php echo $card["text"]  ?>
                        </div>
                        <?php if (!empty($card["arrow"])) : ?>
                            <a target="<?php echo $card["cta"]["target"] ?>" href="<?php echo $card["cta"]["url"]  ?>"
                                class="flex justify-center">
                                <img class="max-[1024px]:w-6" decoding="async"
                                    src="https://wordpress-755960-5157946.cloudwaysapps.com/wp-content/themes/IDS-theme/assets/images/arrow-blue.svg"
                                    style="filter: brightness(0) saturate(100%) invert(100%) sepia(6%) saturate(564%) hue-rotate(176deg) brightness(111%) contrast(100%);">
                            </a>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="flex flex-col w-[20%]">
                <figure class="mt-[72px] lg:mt-[186px] h-full">
                    <img class="h-[90%] object-cover" decoding="async"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lines.svg" alt="lines">
                </figure>
            </div>
            <div class="flex flex-col gap-y-[57px] lg:gap-y-[126px] w-[40%] mt-[106px] lg:mt-[233px]">
                <?php foreach ($cards_2 as $key => $card) : ?>
                    <div class="z-[99] h-[155px] lg:h-[340px] rounded-t-[30px] px-[18px] lg:px-[40px] py-11 lg:py-[69px] w-full bg-[#0A4489] flex flex-col justify-center  gap-2 lg:gap-10"
                        style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        <div class="conected-p  text-center"><?php echo $card["text"]  ?>
                        </div>
                        <?php if (!empty($card["arrow"])) : ?>
                            <a target="<?php echo $card["cta"]["target"] ?>" href="<?php echo $card["cta"]["url"]  ?>"
                                class="flex justify-center">
                                <img class="max-[1024px]:w-6" decoding="async"
                                    src="https://wordpress-755960-5157946.cloudwaysapps.com/wp-content/themes/IDS-theme/assets/images/arrow-blue.svg"
                                    style="filter: brightness(0) saturate(100%) invert(100%) sepia(6%) saturate(564%) hue-rotate(176deg) brightness(111%) contrast(100%);">
                            </a>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <?php if (!empty($cta["url"])): ?>
            <a class="btn-orange mt-[80px]" href="<?php echo $cta["url"] ?>"><?php echo $cta["title"] ?> </a>
        <?php endif ?>
    </div>
</section>