<?php

/**
 * Content & Media Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'content-media-block';
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'content-media';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image_side = get_field('image_side');
$image = get_field('image');
$content = get_field('content');

?>
<section id="<?php echo esc_attr($id); ?>">
    <div class="<?php echo esc_attr($className); ?>">

        <div class="content-media__container img-<?= $image_side ?>">
            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img">
            <div class="content"><?= $content ?></div>
        </div>

    </div>
</section>