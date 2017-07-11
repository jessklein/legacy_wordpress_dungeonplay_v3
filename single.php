<?php get_header() ?>

	<div id="content">
		<div class="padder">

		<?php do_action( 'bp_before_blog_single_post' ) ?>

		<div class="page" id="blog-single">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="item-options">

					<div class="alignleft"><?php next_posts_link( __( '&larr; Previous Entries', 'buddypress' ) ) ?></div>
					<div class="alignright"><?php previous_posts_link( __( 'Next Entries &rarr;', 'buddypress' ) ) ?></div>

				</div>

				<div class="post" id="post-<?php the_ID(); ?>">

					<div class="author-box">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), '50' ); ?>
						<p><?php printf( __( 'by %s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></p>
					</div>

					<div class="post-content">
						<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

						<p class="date"><?php the_time('F j, Y') ?> <em><?php _e( 'in', 'buddypress' ) ?> <?php the_category(', ') ?> <?php printf( __( 'by %s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></em></p>

						<div class="entry-single">
							<?php the_content( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>

							<?php wp_link_pages(array('before' => __( '<p><strong>Pages:</strong> ', 'buddypress' ), 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<div class="moreposts">
							<?php $original_post = $post;
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								$first_tag = $tags[0]->term_id;
								$args=array(
									'tag__in' => array($first_tag),
									'post__not_in' => array($post->ID),
									'showposts'=>5,
									'caller_get_posts'=>1
								);
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
									echo '<h4>Other posts you may also enjoy:</h4>';
									echo "<ul>";
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile;
									echo "</ul>";
								}
							}
							$post = $original_post;
							wp_reset_query(); ?>
						</div>
						</div>

						<p class="postmetadata"><span class="tags"><?php the_tags( __( 'Tags: ', 'buddypress' ), ', ', '<br />'); ?></span> <span class="comments"><?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></span></p>
					</div>
					<div class="entry-utility">
						This post was published on <?php the_time('F d, Y') ?>, written by <?php the_author_posts_link(); ?> and filed under <?php the_category(', '); ?>. <?php the_tags(); ?>. If you enjoyed this post, be sure to <a href="http://feeds.feedburner.com/DungeonPlay">subscribe to our RSS feed</a> so you don't miss a single update. You can also <a href="http://www.dungeonplay.net/forums">join us on our forums</a> to interact with other members of the community or follow us on <a href="http://www.twitter.com/dungeonplay">Twitter</a>. <?php edit_post_link('Edit this entry', '', ''); ?>
					</div><!-- .entry-utility -->
				</div>

			<?php comments_template(); ?>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.', 'buddypress' ) ?></p>

			<?php endif; ?>

		</div>

		<?php do_action( 'bp_after_blog_single_post' ) ?>

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_footer() ?>