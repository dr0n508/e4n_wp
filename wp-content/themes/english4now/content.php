<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
                    <div class="wrapper-item" data-same-height="blog-info">
                    	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
                        <div class="wrap-img">
                            <?php the_post_thumbnail('mini', array()); ?>
                        </div>
                        <?php endif; ?>
                        <div class="wrapper-post">
                            <p class="date-post"><?php the_time('j F Y'); ?></p>
                            <h3 class="header-article"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                            <p class="tag"><?php echo the_category(); ?></p>
                        </div>
                    </div>
                </div>


                




