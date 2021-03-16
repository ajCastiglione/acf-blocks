<?php

/**
 * FAQs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faqs-block';
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'faqs';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$faqs = get_field('faqs');

?>
<section id="<?php echo esc_attr($id); ?>">

    <div class="<?php echo esc_attr($className); ?>">

        <div class="faqs__wrapper">

            <h2 class="faqs__title"><?= $title ?></h2>

            <?php foreach ($faqs as $faq) : ?>

                <div class="faq">

                    <h4 class="faq-title"><?= $faq['title'] ?> <i class="fas fa-chevron-circle-down"></i></h4>
                    <div class="faq-content"><?= $faq['content'] ?></div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>