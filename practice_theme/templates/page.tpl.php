<div id="wrapper">
	<div id="page">
		<div id="header">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>

			<?php if ($site_name || $site_slogan): ?>
				<div id="name-and-slogan">
					<?php if ($site_name): ?>
						<h1 id="site-name">
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
						</h1>
					<?php endif; ?>	

					<?php if($site_slogan): ?>
						<div id="slogan">
							<?php print ($site_slogan) ?>
						</div>
					<?php endif; ?>

				</div>
			<?php endif; ?>
		</div>

		<?php if ($main_menu || $secondary_menu): ?>
			<div id="navigation">
				<div class="section">
					<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix'))/*, 'heading' => t('Main menu')*/)); ?>
					<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix'))/*, 'heading' => t('Secondary menu')*/)); ?>
				</div>
			</div> <!-- /.section, /#navigation -->
		<?php endif; ?>

		<div id="main-wrapper">
			<div id="content">
				<div class="section">
					<?php if ($page['highlighted']): ?>
					<div id="highlighted"><?php print render($page['highlighted']); ?></div>
					<?php endif; ?>
					<?php print render($title_prefix); ?>
					<?php if ($title): ?>
						<h1 class="title" id="page-title"><?php print $title; ?></h1>
					<?php endif; ?>
					<?php print render($title_suffix); ?>
					<?php if ($tabs): ?>
						<div class="tabs"><?php print render($tabs); ?></div>
					<?php endif; ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?>
						<ul class="action-links"><?php print render($action_links); ?></ul>
					<?php endif; ?>
					<?php print render($page['content']); ?>
					<?php print $feed_icons; ?>
				</div>
			</div>

			<?php if ($page['sidebar_first']): ?>
				<div id="sidebar-first">
					<div class="section">
						<?php print render($page['sidebar_first']); ?>
					</div>
				</div> <!-- /.section, /#sidebar-first -->
			<?php endif; ?>

			<?php if ($page['sidebar_second']): ?>
				<div id="sidebar-second">
					<div class="section">
						<?php print render($page['sidebar_second']); ?>
					</div>
				</div> <!-- /.section, /#sidebar-second -->
			<?php endif; ?>
		</div>

		<div id="footer">
			<div class="section">
	  			<?php print render($page['footer']); ?>
			</div>
		</div> <!-- /.section, /#footer -->

	</div>
</div>