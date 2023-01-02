<?php
get_header(); ?>

<h1 class="text-5xl hover:text-yellow-500"><?php the_title(); ?></h1>
<div>
    <p><?php the_content(); ?></p>
</div>

<?php get_footer();
?>
