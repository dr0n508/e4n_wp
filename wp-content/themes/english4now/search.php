<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="blog">
    <section class="search clearfix">
            <div class="container">
                <div class="wrapper-search col-lg-3 col-lg-offset-9">
                    <form role="search" method="get" id="searchform" class="searchform" action="/">
	            	<div class="input-group input-group-lg">
						<input type="text" value="" name="s" id="s" class="form-control">
						<span class="input-group-btn">
							<button type="submit" id="searchsubmit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
			
                </div>
            </div>
    </section>

    <section class="categories clearfix">
        <div class="container">
            <div class="wrapper-categories">
				<?php wp_list_categories( $args ); ?>
			</div>
		</div>
</section>


<div class="container">
        <section class="articles col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<div class="masonry-container">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	</div>
	</section>
</div>


</section>
<div class="pagination-centered">
        	<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
        </div>


<?php get_footer(); ?>