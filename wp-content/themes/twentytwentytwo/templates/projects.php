<?php
/*Template Name: Projects*/
get_header();
query_posts(array(
   'post_type' => 'project',
   'posts_per_page' => '6',
)); ?>

<div class="row" style="margin:10px;">
<?php
if ( have_posts() ) :
while (have_posts()) : the_post(); ?>
<div class="col-4">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
</div>
<?php endwhile; ?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Next' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Previous' ); ?></div>
<?php
else :

	_e( 'Sorry, no posts matched your criteria.' ); 

endif; ?>

</div>
<?php
get_footer();
?>