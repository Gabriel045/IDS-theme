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
$text        = get_field('text');
$cards       = get_field('cards');

?>

<section class="py-[100px] lg:py-[120px] relative">
    <span class="blur-circle absolute bottom-[80px] right-0"></span>
    <div class="block_content">
        <div><?php echo $title ?></div>
        <div class="flex items-center flex-col mt-4">
            <p class="text-GrayText text-center block max-w-[570px]"><?php echo $text ?></p>
        </div>
        <div id="multiple-items" class="mt-[60px]">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="slider-item hover-arrow">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri()  ?>/assets/images/starts.svg" alt="5 starts">
                    </figure>
                    <p class="!text-[23px] font-[700] !text-Dark leading-[29px] mt-6">
                        <?php echo $card["testimonial"] ?>
                    </p>
                    <div class="flex fle-row gap-5 mt-7">
                        <figure>
                            <img class="w-11 h-11 rounded-[100%] object-cover" src=" <?php echo $card["image"] ?>">
                        </figure>
                        <div class="flex flex-col">
                            <p class="text-Dark font-[700] text-[18px]">
                                <?php echo $card["full_name"] ?>
                            </p>
                            <span class="text-[14px] text-GrayText">
                                <?php echo $card["company_name"] ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(() => {
        jQuery('#multiple-items').slick({
            infinite: true,
            autoplay: false,
            autoplaySpeed: 4000,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            useTransform: false,
            arrows: true,
            prevArrow: `<span class='a-left  control-c prev slick-prev relative'><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                <circle cx="22" cy="22" r="22" transform="rotate(180 22 22)" fill="white" />
                <circle cx="22" cy="22" r="21.5" transform="rotate(180 22 22)" stroke="#08192D" stroke-opacity="0.5" />
                <path
                    d="M23.8264 16.1333C23.9792 16.2861 24.0555 16.467 24.0555 16.676C24.0555 16.8846 23.9792 17.0653 23.8264 17.2181L19.35 21.6944L23.8417 26.1861C23.9842 26.3287 24.0555 26.5069 24.0555 26.7208C24.0555 26.9347 23.9792 27.1181 23.8264 27.2708C23.6736 27.4236 23.4927 27.5 23.2837 27.5C23.0751 27.5 22.8944 27.4236 22.7417 27.2708L17.6083 22.1222C17.5472 22.0611 17.5038 21.9949 17.4782 21.9236C17.4529 21.8523 17.4403 21.7759 17.4403 21.6944C17.4403 21.613 17.4529 21.5366 17.4782 21.4653C17.5038 21.394 17.5472 21.3278 17.6083 21.2667L22.7569 16.1181C22.8995 15.9755 23.0751 15.9042 23.2837 15.9042C23.4927 15.9042 23.6736 15.9806 23.8264 16.1333Z"
                    fill="#08192D" />
            </svg> </span>`,
            nextArrow: `<span class='a-right  control-c next slick-next relative'><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                <circle cx="22" cy="22" r="22" fill="white"/>
                <circle cx="22" cy="22" r="21.5" stroke="#08192D" stroke-opacity="0.5"/>
                <path d="M20.1745 27.8667C20.0217 27.7139 19.9453 27.533 19.9453 27.324C19.9453 27.1154 20.0217 26.9347 20.1745 26.7819L24.6509 22.3056L20.1592 17.8139C20.0166 17.6713 19.9453 17.4931 19.9453 17.2792C19.9453 17.0653 20.0217 16.8819 20.1745 16.7292C20.3273 16.5764 20.5081 16.5 20.7171 16.5C20.9257 16.5 21.1064 16.5764 21.2592 16.7292L26.3925 21.8778C26.4536 21.9389 26.497 22.0051 26.5227 22.0764C26.548 22.1477 26.5606 22.2241 26.5606 22.3056C26.5606 22.387 26.548 22.4634 26.5227 22.5347C26.497 22.606 26.4536 22.6722 26.3925 22.7333L21.2439 27.8819C21.1013 28.0245 20.9257 28.0958 20.7171 28.0958C20.5081 28.0958 20.3273 28.0194 20.1745 27.8667Z" fill="#08192D"/>
                </svg> </span>`,
            responsive: [{
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    })
</script>