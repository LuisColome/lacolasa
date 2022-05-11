<?php 

/**
 * Archive partial
 *
 * @package      LaColasa
 * @author       Luis Colomé
 * @since        1.0.0
 * @license      GPL-2.0+
**/

?>

<article class="lcm-post"> 

    <div class="lcm-post__aside">
        <a class="lcm-post__image-link" href="<?php the_permalink() ?>" tabindex="-1" aria-hidden="true"><?php echo preg_replace( '/(width|height|srcset|sizes)="[^"]*"/', '', get_the_post_thumbnail( get_the_ID(), 'lcm-featured-image') ); ?></a>
        <p class="lcm-post__category">
            <?php ea_entry_category(); ?>
        </p>
    </div>

	<div class="lcm-post__body">
 		<h2 class="lcm-post__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <p class="lcm-post__copy">
            <?php echo wp_trim_words( get_the_content(), 22, '...' ); ?>
        </p>

        <div class="lcm-post__footer">
            <span class="lcm-post__date"><?php the_time('M d, Y'); ?></span>
            <a class="lcm-post__read-more-link" href="<?php the_permalink() ?>" tabindex="-1" aria-hidden="true">Leer más <span class="screen-reader-text"> de <?php the_title() ?></span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z"></path><path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path></svg></a>
        </div>
    </div>

</article>

<?php