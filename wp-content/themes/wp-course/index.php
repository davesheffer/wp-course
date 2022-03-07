<?php get_header()?>
    
<?php
    if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post() ?>
         <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
         <div>
           <?php wpcourse_post_meta(); ?>
         </div>

        <div><?php the_excerpt( ) ?></div>
        <?php wpcourse_readmore_link() ?>
        <?php } ?>
    
<?php } else { ?>
    <p><?php _e('Sorry No Posts','wpcourse'); ?>;</p>
<?php }?>
<?php 
$comments = 3;

 printf(_n('One Comments', '%s Comments', $comments, 'wpcourse'), $comments); 


?>
<?php the_posts_pagination( )?>
<?php get_footer() ?>