<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php echo get_post_field( 'post_name', get_the_ID() ) ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();
		?>

		<div class="company-address">
			<div class="logo-address">
				<?php
					$image = get_field('logo');
					$size = 'full';

					if($image) {
						echo wp_get_attachment_image( $image, $size );
					}

					echo get_field('address');
				?>
			</div>

			<div class="map">
				<?php $map = get_field('map'); ?>

				<div id="map"></div>

				<script type="text/javascript">
			      	function initMap() {
						var myLatLng = {lat: <?= $map['lat'] ?>, lng: <?= $map['lng'] ?>};

			        	var map = new google.maps.Map(document.getElementById('map'), {
				          	center: myLatLng,
				          	zoom: 8
			        	});

						var marker = new google.maps.Marker({
				            map: map,
				            position: myLatLng
				        });
			      	}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiIaw6RcUWU40PdLtW5brxm8CHwXKvSxY&callback=initMap" async defer></script>
			</div>
		</div>

		<div class="company-employees">
			<p>Loading employee list...</p>
		</div>

		<script>
			function getEmployees() {
				var data = { 'action': 'load', 'post_type': 'employee' }

				jQuery.ajax({
					url : '<?php echo admin_url('admin-ajax.php'); ?>',
					data : data,
					type : 'POST',
					success: function( data ){
						jQuery('.company-employees').html(data);
					}
				});
			}

			jQuery(document).ready(function() {
				setTimeout(getEmployees, 1000);
			});
		</script>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
