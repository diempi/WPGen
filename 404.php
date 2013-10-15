<?php get_header( ); ?>

	<header role="banner">
		<div id="logo"><?php _e('Mon logo'); ?></div>
		<h1><a href="<?php echo site_url(); ?>"><?php _e('La liste des articles'); ?></a></h1>		
	</header>
	<div id="articles" role="main">
		je suis dans un template de page-blog
		<?php if(have_posts()): ?>
			<p>Voici la liste des posts de ce site</p>
				<?php while(have_posts()): the_post(); ?>
					<article class="post" id="post-<?php the_ID()  ?>">
						<h2 role="heading" aria-level="2">
							<?php the_title(); ?>
						</h2>
						<time date="<?php the_time('Y-m-d'); ?>" pubdate><?php echo get_the_date( ); ?></time>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php comments_template(); ?>
<?php get_footer( ); ?>