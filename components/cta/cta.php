<?php
$cta_text = get_field('cta_text');
$cta_link = get_field('cta_link');
$cta_background_color = get_field('cta_background_color');

if (!empty($cta_text) && !empty($cta_link)) {
?>
  <div class="CTA_container m-4 lg:m-auto lg:py-2 px-11 max-w-full lg:w-10/12 rounded-xl flex justify-between items-center" style="background-color: <?php echo esc_attr($cta_background_color); ?>">
    <p class="text-white font-bold text-2xl"><?php echo esc_html($cta_text); ?></p>
    <a href="<?php echo esc_url($cta_link); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
        <rect x="60" width="60" height="60" rx="30" transform="rotate(90 60 0)" fill="#D0252B"/>
        <path d="M15.0191 29.7726L15 29.4989C15 29.0126 15.179 28.5428 15.5039 28.1763C15.8288 27.8098 16.2776 27.5715 16.7673 27.5053L17.0455 27.4865L38.0133 27.4865L31.8659 21.436C31.5191 21.0948 31.3086 20.6424 31.2725 20.1612C31.2365 19.68 31.3774 19.2021 31.6695 18.8146L31.8659 18.5892C32.2127 18.2481 32.6726 18.0409 33.1617 18.0054C33.6508 17.97 34.1365 18.1086 34.5305 18.396L34.7596 18.5892L44.4007 28.0768C44.7471 28.4176 44.9578 28.8693 44.9943 29.3499C45.0308 29.8304 44.8909 30.308 44.5998 30.6956L44.4007 30.921L34.7596 40.4086C34.3946 40.7687 33.9046 40.9795 33.3881 40.9986C32.8715 41.0177 32.3668 40.8437 31.9754 40.5116C31.5839 40.1796 31.3348 39.714 31.2781 39.2086C31.2213 38.7031 31.3612 38.1953 31.6695 37.7872L31.8659 37.5618L38.0187 31.5113L17.0455 31.5113C16.5512 31.5113 16.0736 31.3351 15.7011 31.0155C15.3286 30.6959 15.0863 30.2544 15.0191 29.7726Z" fill="white"/>
      </svg>
    </a>
  </div>
<?php
}
?>
