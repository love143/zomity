<header id="header">
	<!-- Top header bar -->
	
	<div id="topHeader">
		<div class="wrapper">
			<div class="top_nav">
				<div class="container">
					<div class="left">
						<?php
							if ($page['top_bar_left']):
								print render($page['top_bar_left']);
							endif;
						?>
					</div>
					<!-- end left links -->
					<div class="right">
						<?php
							if ($page['top_bar_right']):
								print render($page['top_bar_right']);
							endif;
						?>
					</div>
					<!-- end right social links -->
				</div>
			</div>
		</div>
	</div>
	<!-- end top navigation -->
	<div id="trueHeader">
		<div class="wrapper">
			<div class="container">
				<!-- Logo -->
				<div class="logo">
					<?php
						if($logo){
					?>
					<a href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>
					<?php }?>
					
					<?php if ($site_slogan){ ?>
						<div id="site-slogan"><?php print $site_slogan; ?></div>
					<?php } ?>
				</div>
				<!-- Menu -->
				<div class="menu_main">
					<nav class="navbar navbar-default fhmm" role="navigation">
						<div class="navbar-header">
							<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">Menu <i class="fa fa-bars tbars"></i></button>
						</div>
						<!-- end navbar-header -->
						<div id="defaultmenu" class="navbar-collapse collapse">
							<?php 
								if ($page['main_menu']): 
									print render($page['main_menu']);
								endif;
							?>
						</div>
						<!-- end #navbar-collapse-1 -->
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>