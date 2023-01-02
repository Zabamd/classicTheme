<?php
get_header(); ?>
<p>Ehh</p>
<section class="postSection">
<?
if(have_posts()):
    while(have_posts()):
        ?>
        <div class="thePost"><?php the_post(); ?></div>
        <h3><a href="<?php the_permalink() ?>" > <?php the_title(); ?></a></h3>
        <p><?php the_content(); ?></p>
        <?php
    endwhile;
endif;
?>
</section>
<?
get_footer();

?> 