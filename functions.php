<?php

class ClassicTheme
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', [$this,'enqueueStyles'] );
    }

    public function enqueueStyles(): void
    {
        wp_enqueue_style("main-style", get_stylesheet_uri(), array());
        wp_enqueue_style("footer-style", get_theme_file_uri("/css/footer.css"), array());

    }
}

$init = new ClassicTheme();

?>
