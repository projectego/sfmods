<?php require('global.php'); ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<?php echo $head_title; ?>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href="favicon.ico" rel="icon" type="image/ico">

		<!-- Load up additional CCS files on pages that explicitly require them -->
		<?php echo $head_extra_css; ?>

		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/html5shiv.js"></script>
		<script src="js/js.js"></script>
		<script src="js/lazysizes.min.js"></script>
		<script>window.lazySizesConfig=window.lazySizesConfig||{},window.lazySizesConfig.lazyClass="lazy";</script>

		<!-- Load up additional JS files on pages that explicitly require them -->
		<?php echo $head_extra_js; ?>

	</head>

	<body>

	<div id="top"></div>

	<header id="site-header">
		<nav class="content-width">
			<a href="<?php echo $site_url; ?>"><h1>Shining Force Mods</h1></a>
			<ul>
				<li><a href="<?php echo $patreon_url; ?>">Patreon</a></li>
				<!--<li><a href="#">About</a></li>-->
				<li><a href="<?php echo $twitter_url; ?>">Twitter</a></li>
				<li><a href="#footer">Contact</a></li>
			</ul>
		</nav>
	</header>

	<div id="site-header-spacer"></div>

	<nav id="site-navigation">
		<ul>
			<li><a class="button" href="force.php"><figure><img src="images/tiles/force.gif"></figure> Force</a></li>
			<li><a class="button" href="enemies.php"><figure><img src="images/tiles/enemies.gif"></figure> Enemies</a></li>
			<li><a class="button" href="npcs.php"><figure><img src="images/tiles/speech.gif"></figure> NPCs</a></li>
			<li><a class="button" href="items.php"><figure><img src="images/tiles/items.gif"></figure> Items</a></li>
			<li><a class="button" href="spells.php"><figure><img src="images/tiles/spells.gif"></figure> Spells</a></li>
			<li><a class="button" href="weapons.php"><figure><img src="images/tiles/promote.gif"></figure> Weapons</a></li>
			<li><a class="button" href="world.php"><figure><img src="images/tiles/map.gif"></figure> World</a></li>
			<li><a class="button" href="script.php"><figure><img src="images/tiles/save.gif"></figure> Script</a></li>
			<li><a class="button" href="tools.php"><figure><img src="images/tiles/repair.gif"></figure> Tools</a></li>
			<li><a class="button" href="misc.php"><figure><img src="images/tiles/dig.gif"></figure> Misc.</a></li>
			<!--
			<li><a class="button" href="mods.php"><figure><img src="images/tiles/yes.gif"></figure> Mods</a></div></li>
			-->
		</ul>
	</nav>

	<!--
		<figure id="scene">
			<img class="scene" src="images/scene.gif">
			<img class="platform" src="images/platform.gif">
		</figure>
	-->

	<div id="content">

		<main>
