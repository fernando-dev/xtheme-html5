

                <section id="gallerycont">
                    <div id="slider">
                        <ul>
                            <?php 
                                if (have_posts())
                                {
                                    while (have_posts())
                                    {
                                        the_post();
                                        if (has_post_thumbnail())
                                        {
                            ?>
                            <li><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-slider'); ?></a></li>
                            <?php 
                                        }
                                    }
                                }
                                else
                                {
                                    
                                }
                            ?>
                        </ul>
                    </div>
                </section>