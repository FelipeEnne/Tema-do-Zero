<html>

	<head>
		<?php wp_head();?>

	</head>

	
<body <?php body_class(); ?>>
	<header>

		<div class="top_header">
			<nav class="navbar navbar-defaut">
				<div class="container-fluid">
					<div class="collapse navbar-collapse">

						<?php
						if(has_nav_menu('top')){
							wp_nav_menu(array(
								'theme_location' => 'top',
								'container' => false,
								'fallback_cb' => false,
								'menu_class' => 'nav navbar-nav'

							));

						}
						?>

					</div>
				</div>
			</nav>
		</div>


		<div class="main_header">
			<div class="container-fluid">
				<div class="logo">
				<?php if(has_custom_logo()){
					the_custom_logo();
				}?>
				</div>
			

			<div class="main_nav_border">
				<div class="main_nav">


					<?php
						if(has_nav_menu('primary')){
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'fallback_cb' => false,
								'menu_class' => 'nav navbar-nav'

							));

						}
						?>

					<div class="search_area">
						<?php get_search_form();
						?>

					</div>


				</div>
				<div class="main_info">
					<div class="row">
						<div class="col-sm-8">
							...
						</div>
						<div class="col-sm-4 social_area">
							...
						</div>
					</div>
				</div>


			</div>


			</div>
		</div>

		





	</header>