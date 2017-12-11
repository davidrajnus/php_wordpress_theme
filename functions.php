<?php  
  /**
   * Enqueue scripts
   *
   * @param string $handle Script name
   * @param string $src Script url
   * @param array $deps (optional) Array of script names on which this script depends
   * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
   * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
   */
  function assets_files() {
    wp_enqueue_script( 'main-asset-js', get_theme_file_uri( '/js/scripts-bundled.js' ), NULL, microtime(), true);
    wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('asset_main_styles', get_stylesheet_uri(), NULL, microtime());
  }
  add_action( 'wp_enqueue_scripts', 'assets_files' );

  function travel_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location 1');
    register_nav_menu('footerLocationTwo', 'Footer Location 2');
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'travel_features')
    
?>
