<?php require('header.php'); ?>

<article id="world">

	<nav id="page-navigation">
		<ul class="no-bullets sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-battle-backgrounds"><cite>Battle Backgrounds</cite></div></li>
		</ul>
	</nav>

	<div class="col2">

		<div class="tab" id="tab-default-weapons">

			<h2>Uranbatol Harbour</h2>
			<?php battle_background_sprites($folder="uranbatol-harbour"); ?>

		</div>

	</div>

</article>

<?php require('sidebar.php'); ?>

<?php require('footer.php'); ?>
