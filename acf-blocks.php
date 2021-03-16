<?php
add_action('acf/init', 'acf_init');
function acf_init()
{
    // Check if function exists and hook into setup.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'content-media',
            'title'             => __('Content & Media'),
            'description'       => __('Will display content and media next to each other.'),
            'render_callback'   => 'render_callback',
            'category'          => 'formatting',
            'icon'              => 'media-document',
            'keywords'          => array('content & media', 'content', 'media'),
            'enqueue_style'     => get_template_directory_uri() . '/library/dist/content-media/content-media.css'
        ));
        acf_register_block_type(array(
            'name'              => 'featured-content',
            'title'             => __('Featured Content'),
            'description'       => __('Displays a featured block of text.'),
            'render_callback'   => 'render_callback',
            'category'          => 'formatting',
            'icon'              => 'media-text',
            'keywords'          => array('featured content', 'content'),
            'enqueue_style'     => get_template_directory_uri() . '/library/dist/featured-content/featured-content.css'
        ));
        acf_register_block_type(array(
            'name'              => 'faqs',
            'title'             => __('FAQs'),
            'description'       => __('Block for listing FAQs.'),
            'render_callback'   => 'render_callback',
            'category'          => 'formatting',
            'icon'              => 'editor-ul',
            'keywords'          => array('faqs', 'frequently asked questions'),
            'enqueue_style'     => get_template_directory_uri() . '/library/dist/faqs/faqs.css',
            'enqueue_script'     => get_template_directory_uri() . '/library/dist/faqs/faqs.min.js'
        ));
    }
}

function render_callback($block)
{
    // Name has to be equal to the file name after content
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/blocks" folder
    $path = get_template_directory() . "/blocks/{$slug}/{$slug}.php";
    if (file_exists($path)) {
        include($path);
    }
}
