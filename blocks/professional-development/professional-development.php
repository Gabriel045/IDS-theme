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

$col_1        = get_field('col_1');
$col_2        = get_field('col_2');
$image        = get_field('image');
$content      = get_field('content');

?>

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
$image        = get_field('image');
$content      = get_field('content');

// Second tab
$cards        = get_field('cards');
$text         = get_field('text');

// Third tab
$image_2        = get_field('image_2');
$content_3      = get_field('content_3');
$accordion      = get_field('accordion');


?>

<section class="pb-[50px] lg:pb-[100px] relative pt-[60px] mt-[-50px] flex flex-col items-center">
    <span class="blur-circle absolute top-[100px] left-0"></span>
    <div class="block_content">
        <div class="flex flex-wrap lg:flex-nowrap max-[1023px]:flex-col  max-[1023px]:gap-y-14 gap-[6%]">
            <div class="w-full lg:w-[56%]">
                <figure class="hero-img h-full">
                    <img class="rounded-tl-[100px] object-center object-cover h-full relative z-10"
                        src="<?php echo $image ?>">
                </figure>
            </div>
            <div class="w-full lg:w-[44%] relative">
                <div> <?php echo $content ?> </div>
            </div>
        </div>
    </div>

    <!--  -->
    <span class="blur-circle absolute top-[300px] right-0 !h-[1500px] !w-[100px]"></span>
    <div class="block_content">
        <div class="flex gap-[30px] lg:gap-[68px] py-16 flex-wrap lg:flex-nowrap relative">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="hero-img rounded-t-[30px] px-[58px] py-12 w-full lg:w-1/2 bg-white flex flex-col h-auto"
                    style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <h3 class="text-center text-[24px] font-[700] text-[#0A4489]"><?php echo $card["title"] ?></h3>
                    <p class="!text-base text-center mt-5 ">
                        <?php echo $card["content_2"] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="flex items-center flex-col gap-7">
            <p
                class="!text-[16px] lg:!text-[24px] !leading-normal lg:!leading-10 text-GrayText text-center block max-w-[950px]">
                <?php echo $text ?>
            </p>
        </div>
    </div>

    <!--  -->
    <div class="block_content pt-[50px] lg:pt-[60px]">
        <div class="flex  flex-wrap lg:flex-nowrap max-[1023px]:flex-col-reverse gap-[30px] lg:gap-[60px]">
            <div class="w-full lg:w-1/2">
                <figure class="h-full">
                    <img class="rounded-[20px] lg:rounded-[50px] object-center object-cover lg:h-[880px] xl:h-[800px]"
                        src="<?php echo $image_2 ?>">
                </figure>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <div> <?php echo $content_3 ?> </div>
                <div class="accordion pt-[25px]">
                    <?php foreach ($accordion as $key => $item) : ?>
                        <details class="pb-[20px]">
                            <summary><span><?php echo $item["tab"] ?></span></summary>
                            <p class="pt-[8px]"><?php echo $item["description"] ?></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    window.addEventListener("load", (event) => {
        document.querySelector(".accordion details").open = true;
        const details = document.querySelectorAll(".accordion details")
        details.forEach((detail) => {
            detail.addEventListener("click", () => {
                details.forEach((item) => {
                    if (item !== detail) {
                        item.removeAttribute("open")
                    }
                })
            })
        })
    });
</script>