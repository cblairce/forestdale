<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="top-bar" data-magellan data-offset="55">
	<h1 class="show-for-sr">Main Navigation</h1>
	<div class="top-bar-left float-left" id="top-bar-menu">
		<ul class="menu">
            <a href="#home">
                <img src="/wp-content/uploads/2018/09/fdcc-logo-e1537929702847.png" class="logo">
			</a>
		</ul>
	</div>
	<div class="top-bar-right show-for-large">
		<div class="grid-x">
			<div class="cell auto" >
			  	<?php joints_top_nav(); ?>
			</div>
		</div>
	</div>
	<div class="top-bar-right float-right hide-for-large">
		<ul class="mobile menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
		</ul>
	</div>
</div>