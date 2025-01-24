<?php

//ACF Blocks
add_action('init', 'register_acf_blocks');

function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/hero');
    register_block_type(__DIR__ . '/blocks/home-two-cols');
    register_block_type(__DIR__ . '/blocks/home-cards');
    register_block_type(__DIR__ . '/blocks/slider');
    register_block_type(__DIR__ . '/blocks/contact');
    register_block_type(__DIR__ . '/blocks/complete-curricula');
    register_block_type(__DIR__ . '/blocks/text-image');
    register_block_type(__DIR__ . '/blocks/three-cards');
    register_block_type(__DIR__ . '/blocks/conected-cards');
    register_block_type(__DIR__ . '/blocks/professional-development');
    register_block_type(__DIR__ . '/blocks/team');
    register_block_type(__DIR__ . '/blocks/text-image-repeater');
    register_block_type(__DIR__ . '/blocks/four-cards');
    register_block_type(__DIR__ . '/blocks/map');
    register_block_type(__DIR__ . '/blocks/faq');
    register_block_type(__DIR__ . '/blocks/image');
    register_block_type(__DIR__ . '/blocks/session-desc');
    register_block_type(__DIR__ . '/blocks/about-us');
    register_block_type(__DIR__ . '/blocks/press');
    register_block_type(__DIR__ . '/blocks/blog');
}