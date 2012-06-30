<?php get_header(); ?>



            <section id="maincont" class="clearfix">
                <section id="main" class="clearfix">
                    <section id="mainleft">
                        <header>
                            <h1> Procurar </h1>
                        </header>
                
                        <p style="margin:5px 0">                    
                            <?php
                                $mySearch =& new WP_Query("s=$s & showposts=-1");
                                $num = $mySearch->post_count;
                                echo 'Sua pesquisa pela palara <strong><em><u>'; the_search_query(); echo '</u></em> </strong>'; echo 'retornou ' . $num.' resultados <em>';
                            ?> em <?php  get_num_queries(); ?> <?php timer_stop(1); ?> segundos.
                        </p>
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <article class="post">
                            <header>
                                <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a></h1>
                            </header>
                            <div class="entry-meta">
                                <span class="meta-prep meta-prep-author"> Categorias: <?php the_category(', '); ?>  - Publicado em</span> <span class="entry-date"><?php the_time('j'); ?> de  <?php the_time('F'); ?> de <?php the_time('Y'); ?></span> <span class="meta-sep">por</span> <span class="author vcard"><?php the_author(); ?></span>
                                <span class="comments-link"><?php comments_popup_link('0','1','%');?></span>
                            </div>
                        </article>
                        <?php endwhile; else: ?>
                            <div class="entry">
                                <b>Sua procura por - <?php the_search_query();?> - n&atilde;o encontrou nenhum resultado.</b>
                                
                                <p>Sugest&otilde;es:</p>
                                <ul>
                                    <li>  Certifique-se que todas as palavras est&atilde;o escritas corretamente.</li>
                                    <li>  Tente palavras-chave diferentes.</li>
                                    <li>  Tente palavras mais gen&eacute;ricas.</li>
                                </ul>
                            </div>  
                        <?php endif; ?>
                        
                        <?php wp_pagenavi() ?>
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