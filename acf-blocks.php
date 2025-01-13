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
}
