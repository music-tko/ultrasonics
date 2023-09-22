<div class="rounded-full border-2 border-gray-100 border-opacity-100 py-1 px-6 w-max my-5 mx-4 lg:m-0">
  <form class="flex items-center" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="screen-reader-text"><?php _e( 'Search for:', 'your-theme-text-domain' ); ?></label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Search...', 'your-theme-text-domain' ); ?>">
    <button type="submit" id="searchsubmit" class="search-submit">
    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
      <rect x="38" width="38" height="38" rx="19" transform="rotate(90 38 0)" fill="#D0252B"/>
      <path d="M23.5792 21.3208H22.721L22.4168 21.0429C23.5182 19.8326 24.1236 18.2875 24.1224 16.6895C24.1224 15.3665 23.7082 14.0731 22.9323 12.973C22.1564 11.8729 21.0536 11.0155 19.7634 10.5092C18.4731 10.0029 17.0533 9.87042 15.6836 10.1285C14.3139 10.3867 13.0557 11.0238 12.0682 11.9593C11.0807 12.8949 10.4081 14.0868 10.1357 15.3845C9.86322 16.6821 10.0031 18.0272 10.5375 19.2495C11.0719 20.4719 11.977 21.5166 13.1382 22.2517C14.2994 22.9867 15.6646 23.3791 17.0612 23.3791C18.8102 23.3791 20.418 22.7719 21.6564 21.7633L21.9497 22.0515V22.8645L27.3814 28L29 26.4666L23.5792 21.3208ZM17.0612 21.3208C14.3562 21.3208 12.1727 19.2521 12.1727 16.6895C12.1727 14.1269 14.3562 12.0583 17.0612 12.0583C19.7662 12.0583 21.9497 14.1269 21.9497 16.6895C21.9497 19.2521 19.7662 21.3208 17.0612 21.3208Z" fill="white"/>
    </svg>
    </button>
  </form>
</div>