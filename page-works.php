<?php
/*
	Template Name: portfolio
*/ 
?>
<?php get_header( ); ?>
    <section id="showcase">
        <h1 class="bigtitle"><?php the_title(); ?></h1>
        <div id="branding">
            <?php 
                $techs = get_terms( 'techniques');
            ;?>
            <ul>
            <?php
                    foreach ($techs as $tech) {
            ;?>
                <li class="techniques">
                        <a href="<?php echo get_term_link($tech); ?>" title="<?php echo ($tech->name); ?>" data-hover="<?php echo ($tech->name); ?>"><SPAN><?php echo ($tech->name); ?></SPAN></a>
                </li>
             <?php       
                }      
            ; ?>
        </div>
    </section>
            <section id="content">
                <ul class="galerie">
                    <?php 
                        $arg = array('post_type' => 'works');
                        $loop = new WP_Query($arg);
                    ;?>
                    <?php if(have_posts()): ?>
                        <?php while($loop->have_posts()): $loop->the_post();?>
                            <li class="recent-works"  itemscope itemtype="http://schema.org/Article">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">
                                    <div class="thumb" itemprop="image"><?php the_post_thumbnail(); ?></div> 
                                    <h3 class="title" itemprop="name"><?php the_title(); ?></h3>
                                    <p><?php the_terms($post->ID,'techniques','Crée avec ',' - ',' '); ?></p>
                                    <p itemprop="description"><?php the_terms($post->ID,'annees','Années: ',' - ',' '); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <h1>Je parle</h1>
                <ul>
                    <li class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/html5.png" alt="Logo de HTML5" title="Logo de HTML5"></li>
                    <li class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/css3.png" alt="Logo de CSS23" title="Logo de CSS3"></li>
                    <li class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/php.png" alt="Logo de PHP" title="Logo de PHP"></li>
                    <li class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/wp.png" alt="Logo de Wordress" title="Logo de Wordpress"></li>
                    <li class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/img/drupal.png" alt="Logo de Drupal" title="Logo de Drupal"></li>
                </ul>
                <div id="main-footer"></div>
            </section><!-- END MAIN -->
        </div>
 <?php get_footer( ); ?>