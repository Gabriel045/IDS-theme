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

$text        = get_field('text');
$cards        = get_field('cards');
?>

<section class="flex flex-col">
    <div class="block_content relative">
        <div><?php echo $text ?></div>
        <div class="flex flex-wrap  gap-[1%] gap-y-12 h-auto pt-[15px] lg:pt-[60px]">
            <?php foreach ($cards as $card) : ?>
                <article class="members w-full md:w-[49%] lg:w-[32.5%]">
                    <figure>
                        <img class="w-full aspect-square" src="<?php echo $card['image']; ?>" alt="team">
                    </figure>
                    <h3 class="mt-3"><?php echo $card["name"] ?></h3>
                    <p class="mb-5"><?php echo wp_trim_words($card["text"], 25) ?> </p>
                    <a href="<?php echo $card["link"]["url"] ?>" class="flex  gap-2">
                        <span class="text-[#0A4489] text-[22px] font-[500]"><?php echo $card["link"]["title"] ?></span>
                        <img class="w-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vector-arrow.svg">
                    </a>

                    <!-- popup -->
                    <div
                        class="popup hidden z-[99] fixed top-0 left-0 w-full h-full bg-[#58555538] justify-center items-center">
                        <div class="max-w-[900px] w-4/5 md:w-[90%] flex flex-col">
                            <div class="h-auto bg-Orange p-5 rounded-t-[10px] flex gap-[20px] items-center relative">
                                <span
                                    class="close cursor-pointer absolute top-3 right-5 text-white font-[700] text-[24px]">X</span>
                                <figure>
                                    <img class="h-[150px] rounded-[10px] object-cover" src="<?php echo $card['image']; ?>"
                                        alt="team">
                                </figure>
                                <h3 class="text-white"> <?php echo $card["name"] ?></h3>
                            </div>
                            <div class="bg-white rounded-b-[10px] h-full px-5 py-9">
                                <div class="mb-5"><?php echo $card["text"] ?> </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll(".members").forEach((item) => {
        item.querySelector("a").addEventListener("click", (e) => {
            e.preventDefault();
            item.querySelector(".popup").classList.remove("hidden");
            item.querySelector(".popup").classList.add("flex");
        })
    })
    document.querySelectorAll(".popup").forEach((item) => {
        item.addEventListener("click", (e) => {
            if (e.target.classList.contains("popup")) {
                e.target.classList.remove("flex");
                e.target.classList.add("hidden");
            }
        })
    })

    document.querySelectorAll(".close").forEach((item) => {
        item.addEventListener("click", (e) => {
            e.target.closest(".popup").classList.remove("flex");
            e.target.closest(".popup").classList.add("hidden");
        })
    })
</script>