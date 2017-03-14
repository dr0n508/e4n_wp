<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="top-page clearfix">
    <div class="container">
        <h1 class="header-page">Наш <span>блог</span></h1>
        <p class="slogan-page"><span>Лучшие статьи об английском языке.</span></p>
    </div>
</section>

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

		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>



	</div>
	</section>
</div>
</section>

        <div class="pagination-centered">
        	<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
        </div>

<?php get_footer(); ?>
