<?php get_header( ); ?>
            <section id="content" role="main">
                <h1>Mes projets récents</h1>
                <ul class="galerie">
                    <?php 
                        $arg = array('post_type' => 'works');
                        $loop = new WP_Query($arg);
                    ;?>
                    <?php if(have_posts()): ?>
                        <?php while($loop->have_posts()): $loop->the_post();?>
                            <li class="recent-works">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url"><?php the_post_thumbnail(); ?>
                                    <h2 class="title" itemprop="name"><?php the_title(); ?></h2>
                                    <p itemprop="description"><?php the_terms($post->ID,'annees','Années: ',' - ',' '); ?></p>
                                    <p><?php the_terms($post->ID,'techniques','Crée avec ',' - ',' '); ?></p>
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