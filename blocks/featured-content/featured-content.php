<?php

/**
 * Featured Content Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'featured-content-block';
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-content';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$featured_content = get_field('featured_content');

?>
<section id="<?php echo esc_attr($id); ?>">
    <div class="<?php echo esc_attr($className); ?>">

        <div class="featured-content__container">
            <div class="content"><?= $featured_content ?></div>
        </div>

    </div>
</section>