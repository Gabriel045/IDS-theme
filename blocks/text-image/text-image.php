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

$image          = get_field('image');
$content        = get_field('content');
$video_url      = get_field('video_url');

?>
<script src="https://cdn.jsdelivr.net/npm/youtube-lite@1.0.0/dist/youtube-lite.min.js"></script>
<section id="text-image" class="py-[120px] flex flex-col relative">
    <span class="blur-circle absolute bottom-[200px] left-0"></span>
    <div class="block_content z-[9]">
        <div class="flex gap-[6%]">
            <div class="w-1/2">
                <figure class="h-full relative <?php echo $video_url ? "cursor-pointer play" : "" ?> ">
                    <?php if ($video_url) : ?>
                    <img decoding="async" class="absolute top-[50%] left-[50%] w-[100px] h-[100px]"
                        style="transform: translate(-50%, -50%);"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/play-icon.svg">
                    <?php endif; ?>
                    <img decoding="async" class="object-cover h-full" src="<?php echo  $image ?>">
                </figure>
            </div>
            <div class="w-1/2 relative flex items-center">
                <div>
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>
    <figure class="absolute bottom-[30px] left-0 rotate-180">
        <img decoding="async" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-463.svg">
    </figure>
</section>

<div id="video-popup"
    class="hidden fixed z-[999] justify-center items-center top-0 right-0 w-full h-full bg-[#4d4b4bba]">
    <span
        class="close-btn bg-Orange cursor-pointer w-[50px] h-[50px] rounded-[100%] text-[30px] font-[700] text-white absolute top-[50px] right-[50px] flex justify-center items-center ">X</span>
    <div class="w-3/5">
        <youtube-lite class="video-container" video="<?php echo $video_url ?>" params="autoplay=1" />
    </div>
</div>

<script>
document.querySelector('.play').addEventListener('click', () => {
    document.getElementById('video-popup').classList.remove('hidden')
    document.getElementById('video-popup').classList.add('flex')

    setTimeout(() => {
        document.querySelector(".video-container").click()
    }, 300);
})

document.querySelector('.close-btn').addEventListener('click', () => {
    document.getElementById('video-popup').classList.remove('flex')
    document.getElementById('video-popup').classList.add('hidden')
})

document.querySelector("#video-popup").addEventListener('click', (e) => {
    if (e.currentTarget.querySelector(".video-container") != e.target) {
        document.getElementById('video-popup').classList.remove('flex')
        document.getElementById('video-popup').classList.add('hidden')
    }
})
</script>