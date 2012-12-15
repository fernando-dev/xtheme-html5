<?php get_header(); ?>

            <section id="maincont" class="clearfix">
                <section id="main" class="clearfix">
                    <section id="mainleft">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <article class="post">
                            <header>
                                <h1> <?php the_title(); ?> </h1>
                            </header>
                            <div class="entry-meta">
                                <span class="meta-prep meta-prep-author"> Categorias: <?php the_category(', '); ?>  - Publicado em</span> <span class="entry-date"><?php the_time('j'); ?> de  <?php the_time('F'); ?> de <?php the_time('Y'); ?></span> <span class="meta-sep">por</span> <span class="author vcard"><?php the_author(); ?></span>
                                <span class="comments-link"><?php comments_popup_link('0','1','%');?></span>
                            </div>

                            <div class="entry-content">
                                <a class="post-thumb" href="<?php the_Permalink() ?>">
                                    <?php
                                        if (has_post_thumbnail()):
                                            the_post_thumbnail('post-thumb');
                                        else:
                                    ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/no-image.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                    <?php
                                        endif;
                                    ?>
                                </a>
                                <?php the_content(); ?>
                            </div>

                            <div class="entry-utility">                                
                                <span> <?php the_tags('Tags: ', ' - ', ''); ?></span>
                            </div>
                        </article>
                        
                        <?php comments_template(); ?>
                        
                        <?php endwhile; else: ?>

                        <?php endif; ?>
                    </section>

                    <section id="mainright">
                        <article>
                            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
                            <?php endif; ?>
                        </article>
                    </section>
                </section>
            </section>

<?php get_footer(); ?>