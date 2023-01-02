<?php
get_header(); ?>
<section class="postSection">
<?php the_post(); ?>
<?php the_ID(); ?>
<p class="postDate"><?php the_date(); ?></p>
<h2 class="postHeading"><?php the_title(); ?> <h2>
<p class = "postContent"><?php the_content(); ?></p>
</section>
<?php get_footer(); ?>
