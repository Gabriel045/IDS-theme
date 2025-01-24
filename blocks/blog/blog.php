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
$args = array(
    'post_type'      => 'blog',
    'posts_per_page' => -1,
    'orderby'        => 'Date',
    'order'          => 'Desc',
    'post_status'    => 'publish'
);

$cards = new WP_Query($args);
$cards = $cards->posts;

?>

<section class="">
    <div class="block_content">
        <div class="flex flex-wrap md:flex-nowrap gap-[4%] gap-y-[60px]">
            <?php foreach ($cards as $key => $card) :
                $date = $card->post_date;
                $newDate = date("F Y", strtotime($date));
                $author = get_field("author", $card);
                $excerpt = get_field("excerpt", $card);
            ?>
                <article class="w-full md:w-[48%] flex flex-col gap-y-[25px]">
                    <figure>
                        <img class="w-full aspect-video object-cover"
                            src="<?php echo get_the_post_thumbnail_url($card->ID) ?>">
                    </figure>
                    <h3 class="text-[28px]"><?php echo $card->post_title ?></h3>
                    <div>
                        <p>by <?php echo $author ?></p>
                        <p><?php echo $newDate ?></p>
                    </div>
                    <p><?php echo wp_trim_words($excerpt, 25) ?></p>
                    <a href="<?php echo get_permalink($card->ID) ?>" class="flex  gap-2">
                        <span class="text-[#0A4489] text-[22px] font-[500]">Learn More</span>
                        <img decoding="async" class="w-5"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vector-arrow.svg">
                    </a>
                </article>
            <?php endforeach ?>
        </div>
    </div>
</section>