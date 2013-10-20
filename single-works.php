<?php get_header(); ?>
    <section id="showcase" itemscope itemtype="http://schema.org/Article">
        <h1 class="bigtitle" itemprop="name"><?php the_title(); ?></h1>
        <div id="tools">
            <span class="icon-left-open" title="Projet précédent"></span>
            <span class="icon-th" title="Tous les projets"></span>
            <span class="icon-right-open"  title="Projet Suivant"></span>
        </div>
    </section>
            <section id="content" role="main" itemscope itemtype="http://schema.org/Article">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                            
                            <section id="contactform">
                                    <div class="preview" itemprop="image">
                                    <?php the_content(); ?>
                                </div>
                            </section>
                            <section class="moreinfos">
                                
                                <h2 role="heading" aria-level="2">Description</h2>
                                <article itemprop="description">
                                    <?php
                                        $url_container = get_post_custom();
                                        $url = $url_container['Description'];
                                    ; ?>
                                    <?php echo $url[0] ; ?>
                                </article>
                                <h2>Techniques utilisées</h2>
                                <p><?php the_terms($post->ID,'techniques','',' - ',''); ?></p>
                                 <p><?php the_terms($post->ID,'annees','Années: ',' - ',' '); ?></p> 
                                <p> <?php
                                        $url_container = get_post_custom();
                                        $url = $url_container['URL du site'];
                                    ; ?>
                                    <a href="<?php echo $url[0] ; ?>"  title="<?php the_title(); ?>" target="_new" class="visit" itemprop="url">Visitez le site</a>
                                </p>
                                Posté le <time date="<?php the_time('Y-m-d'); ?>" pubdate itemprop="datePublished"><?php echo get_the_date( ); ?></time>
                            </section>
                    <?php endwhile; ?>
                <?php endif; ?>
                            <div id="main-footer"></div>
            </section><!-- END MAIN -->
        </div>
<?php get_footer(); ?>