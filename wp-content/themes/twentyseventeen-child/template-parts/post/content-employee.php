<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

    <div class="about-employee">
        <?php
            $image = get_field('image');
            $size = 'thumbnail';

            if($image) {
                echo wp_get_attachment_image( $image, $size );
            }
        ?>
        <p><?php echo get_field('name') ?></p>
        <p><?php echo get_field('email') ?></p>
        <p><?php echo get_field('www') ?></p>

        <?php print_r(get_field('related_posts')); $related_posts = get_field('related_posts') ?>

        <ul>
            <?php
                foreach($related_posts as $related_post) :
                    $rpost = get_post($related_post);

                    print_r($rpost);
            ?>
            <li>
                <?php
                    if(get_the_post_thumbnail($rpost->ID)) {
                        echo get_the_post_thumbnail($rpost->ID);
                    }
                ?>
                <h2><?= $rpost->post_title ?></h2>
                <p>
                    <?php
                        if(empty($rpost->post_excerpt)) {
                            echo wp_trim_words($rpost->post_content, 10);
                        } else {
                            echo $rpost->post_excerpt;
                        }
                    ?>
                </p>
                <a class="moretag" href="<?php echo get_permalink($rpost->ID) ?>">Read the full article...</a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
