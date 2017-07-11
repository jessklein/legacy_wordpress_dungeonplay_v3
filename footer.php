		</div> <!-- #container -->

		<?php do_action( 'bp_after_container' ) ?>
		<?php do_action( 'bp_before_footer' ) ?>

		<div id="footer">
                        <p><strong><?php printf( __( '%s is powered by <a href="http://wordpress.org">WordPress</a> and <a href="http://buddypress.org">BuddyPress</a>. Copyright &copy; 2010, all rights reserved.', 'buddypress' ), get_bloginfo( 'name' ) ); ?></strong></p>
                        <p><em>World of Warcraft&reg; and Blizzard Entertainment&reg; are all trademarks or registered trademarks of Blizzard Entertainment in the United States and/or other countries.<br />
                        This site is in no way associated with or endorsed by Blizzard Entertainment&reg;.</em></p>
			<?php do_action( 'bp_footer' ) ?>
		</div><!-- #footer -->

		<?php do_action( 'bp_after_footer' ) ?>

		<?php wp_footer(); ?>
	</body>

</html>