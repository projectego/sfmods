<?php require('header.php'); ?>

<article id="characters">

	<nav id="page-navigation">
		<ul class="sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-bad-brother"><figure class="map-sprite"><img src="images/sprites/bad-brother.gif"></figure><cite>Bad Brother</cite></div></li>
			<li><div data-tab="#tab-behemoth"><figure class="map-sprite"><img src="images/sprites/behemoth.gif"></figure><cite>Behemoth</cite></div></li>
			<li><div data-tab="#tab-cyclops"><figure class="map-sprite"><img src="images/sprites/cyclops.gif"></figure><cite>Cyclops</cite></div></li>
			<li><div data-tab="#tab-dark-disciple"><figure class="map-sprite"><img src="images/sprites/dark-disciple.gif"></figure><cite>Dark Disciple</cite></div></li>
			<li><div data-tab="#tab-dark-guld"><figure class="map-sprite"><img src="images/sprites/dark-guld.gif"></figure><cite>Dark Guld</cite></div></li>
			<li><div data-tab="#tab-darksol"><figure class="map-sprite"><img src="images/sprites/darksol.gif"></figure><cite>Darksol</cite></div></li>
			<li><div data-tab="#tab-death-adder"><figure class="map-sprite"><img src="images/sprites/death-adder.gif"></figure><cite>Death=Adder</cite></div></li>
			<li><div data-tab="#tab-death-armor"><figure class="map-sprite"><img src="images/sprites/death-armor.gif"></figure><cite>Death Armor</cite></div></li>
			<li><div data-tab="#tab-death-bringer"><figure class="map-sprite"><img src="images/sprites/death-bringer.gif"></figure><cite>Death Bringer</cite></div></li>
			<li><div data-tab="#tab-elite-soldier"><figure class="map-sprite"><img src="images/sprites/elite-soldier.gif"></figure><cite>Elite Soldier</cite></div></li>
			<li><div data-tab="#tab-eve"><figure class="map-sprite"><img src="images/sprites/eve.gif"></figure><cite>Eve</cite></div></li>
			<li><div data-tab="#tab-evil-bowie"><figure class="map-sprite"><img src="images/sprites/evil-bowie.gif"></figure><cite>Evil Bowie</cite></div></li>
			<li><div data-tab="#tab-evil-max"><figure class="map-sprite"><img src="images/sprites/evil-max.gif"></figure><cite>Evil Max</cite></div></li>
			<li><div data-tab="#tab-evil-zylo"><figure class="map-sprite"><img src="images/sprites/zylo.gif"></figure><cite>Evil Zylo</cite></div></li>
			<li><div data-tab="#tab-giant-scorpion"><figure class="map-sprite"><img src="images/sprites/giant-scorpion.gif"></figure><cite>Giant Scorpion</cite></div></li>
			<li><div data-tab="#tab-giant-spider"><figure class="map-sprite"><img src="images/sprites/giant-spider.gif"></figure><cite>Giant Spider</cite></div></li>
			<li><div data-tab="#tab-goblin"><figure class="map-sprite"><img src="images/sprites/goblin.gif"></figure><cite>Goblin</cite></div></li>
			<li><div data-tab="#tab-golden-axe-boss"><figure class="map-sprite"><img src="images/sprites/golden-axe-boss.gif"></figure><cite>Golden Axe (Boss)</cite></div></li>
			<li><div data-tab="#tab-gorgon"><figure class="map-sprite"><img src="images/sprites/gorgon.gif"></figure><cite>Gorgon/Medusa</cite></div></li>
			<li><div data-tab="#tab-kane"><figure class="map-sprite"><img src="images/sprites/kane.gif"></figure><cite>Kane</cite></div></li>
			<li><div data-tab="#tab-king-galam"><figure class="map-sprite"><img src="images/sprites/king-galam.gif"></figure><cite>King Galam</cite></div></li>
			<li><div data-tab="#tab-lizardman"><figure class="map-sprite"><img src="images/sprites/lizardman.gif"></figure><cite>Lizardman</cite></div></li>
			<li><div data-tab="#tab-marionette"><figure class="map-sprite"><img src="images/sprites/marionette.gif"></figure><cite>Marionette</cite></div></li>
			<li><div data-tab="#tab-minotauros"><figure class="map-sprite"><img src="images/sprites/minotauros.gif"></figure><cite>Minotauros</cite></div></li>
			<li><div data-tab="#tab-mishaela"><figure class="map-sprite"><img src="images/sprites/mishaela.gif"></figure><cite>Mishaela</cite></div></li>
			<li><div data-tab="#tab-super-darksol"><figure class="map-sprite"e><img src="images/sprites/super-darksol.gif"></figure><cite>Super Darksol</cite></div></li>
			<li><div data-tab="#tab-two-headed-troll"><figure class="map-sprite"><img src="images/sprites/two-headed-troll.gif"></figure><cite>Two-headed Troll</cite></div></li>
			<li><div data-tab="#tab-wraith"><figure class="map-sprite"><img src="images/sprites/wraith.gif"></figure><cite>Wraith</cite></div></li>
			<li><div data-tab="#tab-zeon"><figure class="map-sprite"><img src="images/sprites/king-galam.gif"></figure><cite>Zeon</cite></div></li>
		</ul>
	</nav>

	<div class="col2">

		<?php $id="bad-brother"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="behemoth"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="cyclops"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="dark-disciple"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="dark-guld"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="darksol"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Darksol wielding Chaos Breaker</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<h2>Darksol wielding Sword of Darkness</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="1", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="death-adder"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="death-armor"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="death-bringer"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Spellcasting", $type="Enemy", $number="2", $set="0", $offset="4", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="elite-soldier"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="eve"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="evil-bowie"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original concept</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="evil-max"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original concept</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="evil-zylo"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original concept</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="giant-scorpion"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="giant-spider"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="2", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="goblin"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Extended unused Idle(?) animation (previously limited to Idle #1)</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="golden-axe-boss"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="gorgon"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="kane"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Kane wielding Sword of Light and Sword of Darkness</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="king-galam"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="lizardman"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Extended unused Idle(?) animation (previously limited to Idle #1)</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php //portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="marionette"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original artwork</h2>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="minotauros"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Based on official Golden Axe artwork</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="mishaela"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Mishaela wielding glaive</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="super-darksol"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Super Shredder</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="two-headed-troll"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="1", $comparison=false); ?>
		</article>

		<?php $id="wraith"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="zeon"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Updated Battle Design by Dan</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Enemy", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Enemy", $number="2", $set="1", $offset="2", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=false, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

	</div>

</article>

<?php require('sidebar.php'); ?>

<?php require('footer.php'); ?>
