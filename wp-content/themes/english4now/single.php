<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="top-page clearfix">
    <div class="container">
        <h2 class="header-page">Наш <span>блог</span></h2>

        <p class="slogan-page"><span>Лучшие статьи об английском языке.</span></p>

    </div>
</section>

<section class="single-blog">
    <div class="container">
		<section class="blog">
			<div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-9">
				<?php
				while ( have_posts() ) : the_post(); ?>
			            <article class="article-blog">
			                <header class="header-article">

			                   	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>	
			                   		<?php the_post_thumbnail('mini', array()); ?>
			                   	<?endif ?>
			                    <div class="wrap-meta-article">
			                        <span class="date-post"><?php the_time('j F Y'); ?></span>
			                        <span class="tag"><i class="fa fa-tags"></i><?php echo the_category(); ?></span>
			                        <span class="author-article"><i class="fa fa-user"></i>&nbsp;<?php the_author(); ?></span>
			                    </div>

			                    <h1><?php echo the_title(); ?></h1>


			                </header>
			                <p class="paragraph-page"><?php the_content(); ?></p>
			                </article>
			        </div>
			    <?php endwhile;?>



			    		<div class="col-lg-3 col-md-4 col-sm-3">
            <aside class="sidebar-blog">
            	<form role="search" method="get" id="searchform" class="searchform" action="/">
	            	<div class="input-group input-group-lg">
						<input type="text" value="" name="s" id="s" class="form-control">
						<span class="input-group-btn">
							<button type="submit" id="searchsubmit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<hr />
            	<?php get_sidebar(); ?>
            </aside>
        </div>
		</section>

		</div>
</section>


<?php get_footer(); ?>