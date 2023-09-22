<?php
$media_heading = get_field('media_heading');
$media_paragraph = get_field('media_paragraph');
$media_list = get_field('media_list');
$media_image = get_field('media_image');
$media_video = get_field('media_video');
$media_position_desktop = get_field('media_position_-_desktop');
$media_position_mobile = get_field('media_position_-_mobile');
$cta_selection = get_field('cta_selection');
$cta_link_group = get_field('cta_group');
$download_button_group = get_field('download_button');

$flexDirectionDesktop = ($media_position_desktop === 'left: Left') ? 'flex-row' : 'flex-row-reverse';

if (!empty($download_button_group) && is_array($download_button_group)) {
    $download_button_text = $download_button_group['download_button_text'];
    $download_button_file = $download_button_group['download_button_file'];
}

if (!empty($cta_link_group) && is_array($cta_link_group)) {
  $cta_link_text = $cta_link_group['cta_label'];
  $cta_link = $cta_link_group['cta_link'];
}

$displayYouTubeEmbed = false;

if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $media_video, $matches)) {
    $youtubeVideoID = $matches[1];
    $displayYouTubeEmbed = true;
}

?>

<div class="MediaWithText  p-4 lg:flex items-center max-w-full lg:w-10/12 lg:gap-12 lg:<?php echo $flexDirectionDesktop; ?>">
  <?php if ($displayYouTubeEmbed): ?>
    <div class="MediaWithText_container w-full lg:w-1/2 relative">
      <div class="embed-container w-full h-full" onclick="stopVideo()" style="display: none">
        <iframe
          width="100%"
          height="100%"
          src="https://www.youtube.com/embed/<?php echo esc_attr($youtubeVideoID); ?>"
          frameborder="0"
          allow="autoplay"
        ></iframe>
      </div>
      <div class="MediaWithText_container__overlay video-overlay w-full h-full">
        <img class="rounded-3xl" src="<?php echo esc_url($media_image['url']); ?>" alt="<?php echo esc_attr($media_image['alt']); ?>">
          <div class="MediaWithText_container__playBtn overlay-play-button absolute top-10 lg:top-40">
            <svg xmlns="http://www.w3.org/2000/svg" width="141" height="141" viewBox="0 0 141 141" fill="none">
              <circle cx="70.578" cy="70.7694" r="64.6366" fill="#D0252B" fill-opacity="0.5"/>
              <circle cx="70.5261" cy="70.6316" r="46.5691" fill="#363895" fill-opacity="0.5"/>
              <circle cx="70.5264" cy="70.6357" r="38.6982" fill="#D0252B"/>
              <circle cx="70.526" cy="70.6393" r="46.7877" fill="#D0252B"/>
              <path d="M79.0527 71.6193L62.8192 80.9917L62.8192 62.2468L79.0527 71.6193Z" fill="white"/>
            </svg>
          </div>
      </div>
    </div>
  <?php elseif (!$media_video): ?>
    <div class="MediaWithText_container__overlay w-full h-full lg:w-1/2 relative">
      <img class="rounded-3xl" src="<?php echo esc_url($media_image['url']); ?>" alt="<?php echo esc_attr($media_image['alt']); ?>">
    </div>
  <?php endif; ?>
  <div class="w-full lg:w-1/2 p-4 pl-0">
    <h1 class="text-4xl font-bold mb-4"><?php echo esc_html($media_heading); ?></h1>
    <p class="text-lg mb-4"><?php echo esc_html($media_paragraph); ?></p>
    <?php if (!empty($media_list)): ?>
        <?php echo $media_list; ?>
    <?php endif; ?>

    <?php if ($cta_selection === 'CTA Link'): ?>
      <a href="<?php echo esc_url($cta_link); ?>" class="flex gap-4 no-underline">
        <?php echo esc_html($cta_link_text); ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
          <rect x="32" width="32" height="32" rx="16" transform="rotate(90 32 0)" fill="#D0252B"/>
          <path d="M9.13277 16.2539L9.12402 16.1264C9.12403 15.8998 9.20608 15.6809 9.35498 15.5102C9.50389 15.3395 9.70958 15.2284 9.93402 15.1976L10.0615 15.1889L19.6715 15.1889L16.854 12.3701C16.6951 12.2112 16.5986 12.0004 16.5821 11.7762C16.5656 11.5521 16.6301 11.3294 16.764 11.1489L16.854 11.0439C17.013 10.885 17.2238 10.7885 17.4479 10.7719C17.6721 10.7554 17.8947 10.82 18.0753 10.9539L18.1803 11.0439L22.599 15.4639C22.7578 15.6226 22.8543 15.8331 22.8711 16.0569C22.8878 16.2808 22.8237 16.5033 22.6903 16.6839L22.599 16.7889L18.1803 21.2089C18.013 21.3766 17.7884 21.4748 17.5517 21.4837C17.315 21.4926 17.0836 21.4116 16.9042 21.2569C16.7248 21.1022 16.6106 20.8853 16.5846 20.6498C16.5586 20.4143 16.6227 20.1778 16.764 19.9876L16.854 19.8826L19.674 17.0639L10.0615 17.0639C9.83498 17.0639 9.6161 16.9818 9.44536 16.8329C9.27462 16.684 9.16358 16.4783 9.13277 16.2539Z" fill="white"/>
        </svg>
      </a>
    <?php elseif ($cta_selection === 'Download Button'): ?>
        <a href="<?php echo esc_url($download_button_file['url']); ?>" download="<?php echo esc_attr(basename($download_button_file['url'])); ?>" class="flex gap-4 no-underline	">
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="25">
          <rect transform="rotate(90 32 0)" x="32" width="32" height="32" rx="16" fill="#D0252B"/>
          <path d="m10.375 23.25h11.25c0.2375 1e-4 0.4662 0.0903 0.6398 0.2525 0.1735 0.1621 0.2791 0.3841 0.2952 0.6211 0.0162 0.237-0.0581 0.4713-0.208 0.6555-0.1499 0.1843-0.3642 0.3048-0.5995 0.3371l-0.1275 0.0088h-11.25c-0.2375-1e-4 -0.46616-0.0903-0.63973-0.2525-0.17356-0.1621-0.2791-0.3841-0.29529-0.6211s0.05818-0.4713 0.20807-0.6555c0.1499-0.1843 0.36415-0.3048 0.59945-0.3372l0.1275-0.0087h11.25-11.25zm5.4975-14.991 0.1275-0.00875c0.2266 1e-5 0.4454 0.08205 0.6162 0.23096 0.1707 0.1489 0.2818 0.3546 0.3126 0.57904l0.0087 0.1275v9.61l2.8188-2.8175c0.1589-0.1589 0.3697-0.2554 0.5939-0.2719 0.2241-0.0166 0.4468 0.048 0.6273 0.1819l0.105 0.09c0.1589 0.159 0.2554 0.3697 0.272 0.5939 0.0165 0.2242-0.0481 0.4468-0.182 0.6274l-0.09 0.1049-4.42 4.4188c-0.1587 0.1588-0.3692 0.2553-0.5931 0.2721-0.2238 0.0167-0.4463-0.0475-0.6269-0.1809l-0.105-0.0912-4.42-4.4188c-0.1677-0.1672-0.2659-0.3918-0.2748-0.6285-0.0089-0.2368 0.0721-0.4681 0.2268-0.6475s0.3716-0.2936 0.6071-0.3196 0.472 0.0381 0.6622 0.1794l0.105 0.09 2.8187 2.82v-9.6125c0-0.22655 0.0821-0.44543 0.231-0.61616 0.1489-0.17074 0.3546-0.28178 0.579-0.31259l0.1275-0.00875-0.1275 0.00875z" fill="#fff"/>
        </svg>
          <?php echo esc_html($download_button_text); ?>
        </a>
    <?php endif; ?>
  </div>
</div>

