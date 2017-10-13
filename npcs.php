<?php require('header.php'); ?>

<article id="characters">

	<nav id="page-navigation">
		<ul class="sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-afro-lady"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/afro-lady.gif"></figure><cite>Afro Lady</cite></div></li>
			<li><div data-tab="#tab-alterone-king"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/alterone-king.gif"></figure><cite>Alterone King</cite></div></li>
			<li><div data-tab="#tab-blacksmith"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/blacksmith.gif"></figure><cite>Blacksmith</cite></div></li>
			<li><div data-tab="#tab-burly-man"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/burly-man.gif"></figure><cite>Burly Man</cite></div></li>
			<li><div data-tab="#tab-castle-maid"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/castle-maid.gif"></figure><cite>Castle Maid</cite></div></li>
			<li><div data-tab="#tab-dr-crock"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/dr-crock.gif"></figure><cite>Dr. Crock</cite></div></li>
			<li><div data-tab="#tab-evil-priest"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/evil-priest.gif"></figure><cite>Evil Priest</cite></div></li>
			<li><div data-tab="#tab-girl-pink-dress"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/girl-pink-dress.gif"></figure><cite>Girl in the Pink Dress</cite></div></li>
			<li><div data-tab="#tab-gramps"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/gramps.gif"></figure><cite>Gramps</cite></div></li>
			<li><div data-tab="#tab-guardiana-king"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/guardiana-king.gif"></figure><cite>Guardiana King</cite></div></li>
			<li><div data-tab="#tab-injured-soldier"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/injured-soldier.gif"></figure><cite>Injured Soldier</cite></div></li>
			<li><div data-tab="#tab-islander-lady"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/islander-lady.gif"></figure><cite>Islander Lady</cite></div></li>
			<li><div data-tab="#tab-karate-student"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/karate-student.gif"></figure><cite>Karate Student</cite></div></li>
			<li><div data-tab="#tab-karin"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/karin.gif"></figure><cite>Karin</cite></div></li>
			<li><div data-tab="#tab-koron"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/koron.gif"></figure><cite>Koron</cite></div></li>
			<li><div data-tab="#tab-krin"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/krin.gif"></figure><cite>Krin</cite></div></li>
			<li><div data-tab="#tab-lady-green-dress"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/lady-green-dress.gif"></figure><cite>Lady in Green Dress</cite></div></li>
			<li><div data-tab="#tab-mahato"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/mahato.gif"></figure><cite>Mahato</cite></div></li>
			<li><div data-tab="#tab-master-alchemist"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/master-alchemist.gif"></figure><cite>Master Alchemist</cite></div></li>
			<li><div data-tab="#tab-merchant"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/merchant.gif"></figure><cite>Merchant</cite></div></li>
			<li><div data-tab="#tab-pompadour-man"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/pompadour-man.gif"></figure><cite>Pompadour Man</cite></div></li>
			<li><div data-tab="#tab-prompt-king"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/prompt-king.gif"></figure><cite>Prompt King</cite></div></li>
			<li><div data-tab="#tab-prompt-soldier"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/prompt-soldier.gif"></figure><cite>Prompt Soldier</cite></div></li>
			<li><div data-tab="#tab-rindo-mayor"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/rindo-mayor.gif"></figure><cite>Rindo Mayor</cite></div></li>
			<li><div data-tab="#tab-shimol"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/shimol.gif"></figure><cite>Shimol</cite></div></li>
			<li><div data-tab="#tab-shipwrecked-priest"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/shipwrecked-priest.gif"></figure><cite>Shipwrecked Priest</cite></div></li>
			<li><div data-tab="#tab-waral-native"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/waral-native.gif"></figure><cite>Waral Native</cite></div></li>
			<li><div data-tab="#tab-wizard"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/wizard.gif"></figure><cite>Wizard</cite></div></li>
			<li><div data-tab="#tab-woman-purple-dress"><figure class="map-sprite"><img class="lazy" data-src="images/sprites/woman-purple-dress.gif"></figure><cite>Woman in Purple Dress</cite></div></li>
		</ul>
	</nav>

	<div class="col2">

		<?php $id="afro-lady"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="alterone-king"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="blacksmith"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="burly-man"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="castle-maid"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="dr-crock"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="evil-priest"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Shade Abbey encounter with Darksol</h2>
			<?php map_sprites($folder=$id, $palette="2", $title="Uses 'Enemy' map palette", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="girl-pink-dress"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="gramps"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="guardiana-king"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="injured-soldier"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original side-view and rear-view frames</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="islander-lady"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="karate-student"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="karin"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="In progress...", $set="0", $comparison=false); ?>
		</article>

		<?php $id="koron"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="krin"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="lady-green-dress"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="mahato"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="Otrant Recolour", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="master-alchemist"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="Otrant Recolour", $set="0", $comparison=false); ?>
		</article>

		<?php $id="merchant"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="pompadour-man"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="prompt-king"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="prompt-soldier"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="rindo-mayor"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="shimol"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="Shell's Aunt", $set="0", $comparison=false); ?>
		</article>

		<?php $id="shipwrecked-priest"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="waral-native"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Resurrection of Dark Dragon (GBA) Port</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="wizard"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="woman-purple-dress"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
		</article>

	</div>

</article>

<?php require('sidebar.php'); ?>

<?php require('footer.php'); ?>
