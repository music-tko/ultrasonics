<?php
// Get the ACF field values
$block_heading = get_field('block_heading');
$block_paragraph = get_field('block_paragraph');
?>

<div class="p-4 lg:max-w-full lg:w-10/12">
  <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($block_heading); ?></h2>
  <p class="text-lg"><?php echo esc_html($block_paragraph); ?></p>
</div>
