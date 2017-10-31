<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar row" id="top-bar-menu">
	<div class="top-bar-left float-left">
        <?php if (is_home()) { ?>
            <h1 class="brand-title"><?php bloginfo('name'); ?></h1>
        <?php } else { ?>
            <a href="<?php echo home_url(); ?>" class="brand-title"><?php bloginfo('name'); ?></a>
        <?php } ?>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>