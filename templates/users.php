<?php
script('lotsofusers', 'app');
script('lotsofusers', 'usermodel');
script('lotsofusers', 'usercollection');
script('lotsofusers', 'usersview');
script('lotsofusers', 'groupmodel');
script('lotsofusers', 'groupcollection');
script('lotsofusers', 'groupsview');
script('lotsofusers', 'script');
style('lotsofusers', 'style');
?>

<div id="app-users">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('part.navigation')); ?>
		<?php print_unescaped($this->inc('part.settings')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('part.usersearch')); ?>
		</div>
	</div>
</div>
