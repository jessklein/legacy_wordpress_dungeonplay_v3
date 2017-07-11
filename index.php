<?php get_header() ?>

	<div id="content">
		<div class="padder">

		<?php do_action( 'bp_before_blog_home' ) ?>

		<div class="page" id="blog-latest">
			
			<!-- Featured Posts -->
			
			<div class="catbox">
				<h2 class="gen_cat">Latest News</h2>
				<?php $my_query = new WP_Query('category_name=News&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
				<?php do_action( 'bp_before_blog_post' ) ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="post-content">
						<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
							echo '<div class="post-thumbnail">';
							the_post_thumbnail();
							echo '</div>'; 
						} else {
							// the current post lacks a thumbnail
						}
						?>
						<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
						<p><span class="postdate"><em><?php the_time('F j, Y') ?></em></span> <span class="postcat"><?php the_category(', ') ?></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
						<div class="entry">
							<?php the_content( __( 'Continue Reading &rarr;', 'buddypress' ) ); ?>
						</div>
					</div>		
				</div>
				<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; ?>
				<?php query_posts('category_name=News&posts_per_page=6'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> -- <?php the_time('F j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
				<a href="index.php?category_name=News">Read More News</a>
			</div>

		<div class="catbox-left">
			
			<!-- Death Knight Posts (Left) -->
			
			<div class="catbox-small-left">
			<h2 class="dk_cat"><a href="index.php?category_name=Death Knight">Death Knight</a> <div class="rsslink"><a href="http://dungeonplay.net/category/death-knight/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Death Knight&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Death Knight&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Death Knight">Read More in Death Knight</a>
			</div>
			
			<!-- Hunter Posts (Left)-->
			
			<div class="catbox-small-left">
			<h2 class="hunter_cat"><a href="index.php?category_name=Hunter">Hunter</a> <div class="rsslink"><a href="http://dungeonplay.net/category/hunter/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Hunter&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Hunter&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Hunter">Read More in Hunter</a>
			</div>
			
			<!-- Paladin Posts (Left) -->
			
			<div class="catbox-small-left">
			<h2 class="paladin_cat"><a href="index.php?category_name=Paladin">Paladin</a> <div class="rsslink"><a href="http://dungeonplay.net/category/paladin/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Paladin&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Paladin&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Paladin">Read More in Paladin</a>
			</div>
			
			<!-- Rogue Posts (Left) -->
			
			<div class="catbox-small-left">
			<h2 class="rogue_cat"><a href="index.php?category_name=Rogue">Rogue</a> <div class="rsslink"><a href="http://dungeonplay.net/category/rogue/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Rogue&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Rogue&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Rogue">Read More in Rogue</a>
			</div>
			
			<!-- Warlock Posts (Left) -->
			
			<div class="catbox-small-left">
			<h2 class="warlock_cat"><a href="index.php?category_name=Warlock">Warlock</a> <div class="rsslink"><a href="http://dungeonplay.net/category/warlock/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Warlock&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Warlock&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span> -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Warlock">Read More in Warlock</a>
			</div>
		</div>
		<div class="catbox-right">
			<!-- Druid Posts (Right) -->
			
			<div class="catbox-small-right">
			<h2 class="druid_cat"><a href="index.php?category_name=Druid">Druid</a> <div class="rsslink"><a href="http://dungeonplay.net/category/druid/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Druid&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Druid&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>  -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Druid">Read More in Druid</a>
			</div>
			
			<!-- Mage Posts (Right) -->
			
			<div class="catbox-small-right">
			<h2 class="mage_cat"><a href="index.php?category_name=Mage">Mage</a> <div class="rsslink"><a href="http://dungeonplay.net/category/mage/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Mage&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Mage&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>  -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Mage">Read More in Mage</a>
			</div>
			
			<!-- Priest Posts (Right) -->
			
			<div class="catbox-small-right">
			<h2 class="priest_cat"><a href="index.php?category_name=Priest">Priest</a> <div class="rsslink"><a href="http://dungeonplay.net/category/priest/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Priest&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Priest&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>  -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Priest">Read More in Priest</a>
			</div>
			
			<!-- Shaman Posts (Right) -->
			
			<div class="catbox-small-right">
			<h2 class="shaman_cat"><a href="index.php?category_name=Shaman">Shaman</a> <div class="rsslink"><a href="http://dungeonplay.net/category/shaman/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Shaman&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Shaman&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>  -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Shaman">Read More in Shaman</a>
			</div>
			
			<!-- Warrior Posts (Right) -->
			
			<div class="catbox-small-right">
			<h2 class="warrior_cat"><a href="index.php?category_name=Warrior">Warrior</a> <div class="rsslink"><a href="http://dungeonplay.net/category/warrior/feed/"><img src="http://dungeonplay.net/wp-content/plugins/category-specific-rss-feed-menu/rss_small_icon.png" /></a></div></h2>
			<?php $my_query = new WP_Query('category_name=Warrior&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br />
					<p><span class="postdate"><em><?php the_time('M j, Y') ?></em></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_excerpt( __( 'Read the rest of this entry &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('category_name=Warrior&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>  -- <?php the_time('M j, Y') ?> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			<a href="index.php?category_name=Warrior">Read More in Warrior</a>
			</div>
		</div>
			<!-- General Posts -->
			
			<div class="catbox">
			<h2 class="gen_cat">More Posts</h2>
			<?php $my_query = new WP_Query('cat=-9,-10,-11,-12,-13,-14,-15,-16,-17,-18,-6&posts_per_page=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>
			<?php do_action( 'bp_before_blog_post' ) ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail
						echo '<div class="post-thumbnail">';
						the_post_thumbnail();
						echo '</div>'; 
					} else {
						// the current post lacks a thumbnail
					}
					?>
					<span class="posttitle-index"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>
					<p><span class="postdate"><em><?php the_time('F j, Y') ?></em></span> <span class="postcat"><?php the_category(', ') ?></span> <span class="postauthor"><?php printf( __( '%s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></span> <span class="postcomments"><?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></span></p>
					<div class="entry">
						<?php the_content( __( 'Continue Reading &rarr;', 'buddypress' ) ); ?>
					</div>
				</div>		
			</div>
			<?php do_action( 'bp_after_blog_post' ) ?>
			<?php endwhile; ?>
			<?php query_posts('cat=-9,-10,-11,-12,-13,-14,-15,-16,-17,-18,-6&posts_per_page=21'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
					<?php do_action( 'bp_before_blog_post' ) ?>
					<div id="post-<?php the_ID(); ?>">
						<div class="post-content">
							<p class="moretitles"><span class="posttitle-small"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>  -- [<?php the_category(', ') ?>] <em><?php the_time('F j, Y') ?></em> | <?php comments_popup_link( __( 'No Comments', 'buddypress' ), __( '1 Comment', 'buddypress' ), __( '% Comments', 'buddypress' ) ); ?></p>
						</div>		
					</div>
					<?php do_action( 'bp_after_blog_post' ) ?>
				<?php endwhile; endif; ?>
			</div>
		</div>

		<?php do_action( 'bp_after_blog_home' ) ?>

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_footer() ?>
