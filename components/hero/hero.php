<?php

$hero_heading = get_field('hero_heading');
$hero_text = get_field('hero_text');
$hero_list = get_field('hero_list');
$hero_image = get_field('hero_image');
?>

<div class="Hero_container flex flex-col lg:flex-row-reverse lg:items-center lg:justify-items-end gap-5 max-w-full mx-auto">
  <div class="Hero_container__image lg:w-7/12">
    <?php if (!empty($hero_image)) : ?>
      <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" class="w-full m-0 lg:mt-8" />
    <?php endif; ?>
  </div>
  <div class="Hero_container__texts lg:w-4/12	pt-2 px-4 lg:p-4">
    <h1 class="text-5xl mb-4"><?php echo esc_html($hero_heading); ?></h1>
    <p class="text-lg mb-4"><?php echo esc_html($hero_text); ?></p>
    <div class="text-lg mb-4">
      <?php if (!empty($hero_list)): ?>
        <?php echo $hero_list; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
