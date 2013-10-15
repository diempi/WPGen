<?php get_header(); ?>
<?php
    $term = get_term_by("slug",get_query_var("term"),get_query_var("taxonomy"));
?>
    <h1> Projets crée en <?php echo($term->name); ?> </h1>
    <div class="container">
        <article <?php post_class(); ?>>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                    <hr>
                <?php endwhile; ?>
            <?php endif; ?>
        </article>
        
    </div>
    <div id="sidebar">
        <?php dynamic_sidebar('projects'); ?>
    </div>
<?php get_footer(); ?>