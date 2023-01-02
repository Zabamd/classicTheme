<?php

class ClassicTheme
{
    public function __construct()
    {
        add_action("wp_enqueue_scripts", [$this, "enqueueStyles"]);
    }

    public function enqueueStyles(): void
    {
        wp_enqueue_style("main-style", get_stylesheet_uri(), []);
    }
}

//theme init
new ClassicTheme();

?>
