 <hr>
 <p>-------------------------Footer -Start- ----------------------------</p> 
 
 		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'banpo' ) ); ?>"><?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'banpo' ), 'WordPress' );
		?></a>
		<span class="sep"> | </span>
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'banpo' ), 'banpo', '<a href="http://underscores.me/">Underscores.me</a>' );
		?>
 <hr>		
</body>
</html> 