 <div id="comments">
    <?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('0 coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios' );?> at&eacute; agora.</h3>

        <ol>
            <?php foreach ($comments as $comment) : ?>
                <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
                    
                    <span class="avatar">
                        <?php echo get_avatar( $comment, 60); ?>
                    </span>
                    
                    <cite><?php comment_author_link() ?></cite> Disse:
                    
                    <br />
                    
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em>Seu coment&aacute;rio est&aacute; aguardando modera&ccedil;&atilde;o.</em>
                        <small><?php cancel_comment_reply_link() ?></small>
                    <?php endif; ?>
                        
                    <br />
                    
                    <?php comment_text() ?>
                    
                </li>
            <?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
            <?php endforeach; ?>
        </ol>

	<div class="comment-nav">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
	</div>
    <?php else : ?>

    <?php endif; ?>
</div>

<div id="respond">
    <h3><?php comment_form_title( 'Deixe um coment&aacute;rio', 'Deixe um coment&aacute;rio para %s' ); ?></h3>
    <div class="cancel-comment-reply">
        <small><?php cancel_comment_reply_link(); ?></small>
    </div>
    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <?php if ( is_user_logged_in() ) : ?>
                <p class="logged">Logado como: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Encerrar sess&atilde;o!">Sair &raquo;</a></p>
            <?php else : ?>
                <input type="text" name="author" id="author" value="Nome" size="22" tabindex="1" onfocus="if(this.value=='Nome'){this.value=''};" onblur="if(this.value==''){this.value='Nome'};" />
                <input type="text" name="email" id="email" value="Email" size="22" tabindex="2" onfocus="if(this.value=='Email'){this.value=''};" onblur="if(this.value==''){this.value='Email'};" />
                <input type="text" name="url" id="url" value="Website" size="22" tabindex="3" onfocus="if(this.value=='Website'){this.value=''};" onblur="if(this.value==''){this.value='Website'};" />
            <?php endif; ?>
            <textarea name="comment" id="comment" cols="10" rows="10" tabindex="4"></textarea>
            <input name="submit" type="submit" class="submit" tabindex="5" value="Enviar coment&aacute;rio" />
                <?php comment_id_fields(); ?>                
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    <?php endif; ?>
</div>