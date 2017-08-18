<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
$(document).ready(function(){
 $('.parallax').parallax();
  $(".button-collapse").sideNav();
    });
 $(document).ready(function() {
    $('select').material_select();
  });
$('#dbOption').on('change',function(){
    if( $(this).val()==="1"){
    $("#otherOptions").show()
    }
    else{
    $("#otherOptions").hide()
    }
  if( $(this).val()==="2"){
    $("#otherChoices").show()
    }
    else{
    $("#otherChoices").hide()
    }
  if( $(this).val()==="3"){
    $("#option3").show()
    }
    else{
    $("#option3").hide()
    }
});
$(document).ready(function(){
    $('.white-links-activator').click(function(){
      $('.white-links').toggle();
      $(this).toggleClass('open');
    });
});
$(document).ready(function(){
    $('.advanced-search-activator').click(function(){
      $('.advanced-search').toggle();
      $(this).toggleClass('open');
    });
});
$('.dropdown-buttona').dropdown({
      inDuration: 125,
      outDuration: 125,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
</script>
</body>
</html>
