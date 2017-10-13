<?php require('header.php'); ?>

<article id="characters">

	<nav id="page-navigation">
		<ul class="sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-alef"><figure class="map-sprite"><img src="images/sprites/alef.gif"></figure><cite>Alef</cite></div></li>
			<li><div data-tab="#tab-anri"><figure class="map-sprite"><img src="images/sprites/anri.gif"></figure><cite>Anri</cite></div></li>
			<li><div data-tab="#tab-balbazak-force"><figure class="map-sprite"><img src="images/sprites/balbazak.gif"></figure><cite>Balbazak</cite></div></li>
			<li><div data-tab="#tab-boken"><figure class="map-sprite"><img src="images/sprites/boken.gif"></figure><cite>Boken</cite></li>
			<li><div data-tab="#tab-bowie"><figure class="map-sprite"><img src="images/sprites/bowie.gif"></figure><cite>Bowie</cite></li>
			<li><div data-tab="#tab-chaos-force"><figure class="map-sprite"><img src="images/sprites/chaos.gif"></figure><cite>Chaos</cite></div></li>
			<li><div data-tab="#tab-claude"><figure class="map-sprite"><img src="images/sprites/claude.gif"></figure><cite>Claude</cite></li>
			<li><div data-tab="#tab-darksol-force"><figure class="map-sprite"><img src="images/sprites/darksol.gif"></figure><cite>Darksol</cite></li>
			<li><div data-tab="#tab-elliot-force"><figure class="map-sprite"><img src="images/sprites/elliot.gif"></figure><cite>Elliot</cite></li>
			<li><div data-tab="#tab-gerhalt"><figure class="map-sprite"><img src="images/sprites/gerhalt.gif"></figure><cite>Gerhalt</cite></li>
			<li><div data-tab="#tab-ghoul-force"><figure class="map-sprite"><img src="images/sprites/ghoul.gif"></figure><cite>Ghoul</cite></li>
			<li><div data-tab="#tab-goblin-torch-eye"><figure class="map-sprite"><img src="images/sprites/goblin-torch-eye.gif"></figure><cite>Goblin &amp; Torch Eye</cite></li>
			<li><div data-tab="#tab-gong"><figure class="map-sprite"><img src="images/sprites/gong.gif"></figure><cite>Gong</cite></li>
			<li><div data-tab="#tab-guntz"><figure class="map-sprite"><img src="images/sprites/guntz.gif"></figure><cite>Guntz</cite></li>
			<li><div data-tab="#tab-hanzou"><figure class="map-sprite"><img src="images/sprites/hanzou.gif"></figure><cite>Hanzou</cite></li>
			<li><div data-tab="#tab-kane-force"><figure class="map-sprite"><img src="images/sprites/Kane-force.gif"></figure><cite>Kane</cite></li>
			<li><div data-tab="#tab-king-bedoe"><figure class="map-sprite"><img src="images/sprites/king-bedoe.gif"></figure><cite>King Bedoe</cite></li>
			<li><div data-tab="#tab-lizardman-force"><figure class="map-sprite"><img src="images/sprites/lizardman-force.gif"></figure><cite>Lizardman</cite></li>
			<li><div data-tab="#tab-lowe"><figure class="map-sprite"><img src="images/sprites/lowe.gif"></figure><cite>Lowe</cite></li>
			<li><div data-tab="#tab-luke"><figure class="map-sprite"><img src="images/sprites/luke.gif"></figure><cite>Luke</cite></li>
			<li><div data-tab="#tab-mae"><figure class="map-sprite"><img src="images/sprites/mae.gif"></figure><cite>Mae</cite></div></li>
			<li><div data-tab="#tab-max"><figure class="map-sprite"><img src="images/sprites/max.gif"></figure><cite>Max</cite></div></li>
			<li><div data-tab="#tab-minotaur-force"><figure class="map-sprite"><img src="images/sprites/minotaur-force.gif"></figure><cite>Minotaur</cite></li>
			<li><div data-tab="#tab-mitula"><figure class="map-sprite"><img src="images/sprites/mitula.gif"></figure><cite>Mitula</cite></li>
			<li><div data-tab="#tab-musashi"><figure class="map-sprite"><img src="images/sprites/musashi.gif"></figure><cite>Musashi</cite></li>
			<li><div data-tab="#tab-odd-eye-force"><figure class="map-sprite"><img src="images/sprites/odd-eye.gif"></figure><cite>Odd Eye</cite></li>
			<li><div data-tab="#tab-pelle"><figure class="map-sprite"><img src="images/sprites/pelle.gif"></figure><cite>Pelle</cite></li>
			<li><div data-tab="#tab-princess-elis"><figure class="map-sprite"><img src="images/sprites/princess-elis.gif"></figure><cite>Princess Elis</cite></li>
			<li><div data-tab="#tab-slade"><figure class="map-sprite"><img src="images/sprites/slade.gif"></figure><cite>Slade</cite></li>
			<li><div data-tab="#tab-spirit"><figure class="map-sprite"><img src="images/sprites/spirit.gif"></figure><cite>Spirit</cite></li>
			<li><div data-tab="#tab-tyris-flare"><figure class="map-sprite"><img src="images/sprites/tyris-flare.gif"></figure><cite>Tyris Flare</cite></li>
			<li><div data-tab="#tab-varios"><figure class="map-sprite"><img src="images/sprites/varios.gif"></figure><cite>Varios</cite></li>
			<li><div data-tab="#tab-zynk"><figure class="map-sprite"><img src="images/sprites/zynk.gif"></figure><cite>Zynk</cite></li>
		</ul>
	</nav>

	<div class="col2">

		<?php $id="alef"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Palette update</h2>
			<div class="notice"><big>&#9888;</big> Issues may arise with clipboarding pasting this sprite into the Editor. We advise updating Alef's Wizard palette manually.</div>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="1", $set="0", $offset="0", $comparison=false); ?>
		</article>

		<?php $id="anri"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Character</h2>
			<?php portrait_sprites($folder=$id, $blink=false, $speech=false, $title="", $set="0", $comparison=true); ?>
		</article>

		<?php $id="balbazak-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="boken"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Adaptation</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		  <aside class="toggle-details">
		    <div class="portrait-details">
					<dl> <dd>6</dd> <dd>0</dd> <dd>2</dd> <dd>3</dd> </dl>
					<dl><dd>7</dd> <dd>0</dd> <dd>3</dd> <dd>3</dd> </dl>
		    </div>
		    <div class="portrait-details">
					<dl> <dd>6</dd> <dd>1</dd> <dd>2</dd> <dd>5</dd> </dl>
					<dl> <dd>7</dd> <dd>1</dd> <dd>3</dd> <dd>5</dd> </dl>
		    </div>
		  </aside><!-- aside -->
		</article>

		<?php $id="bowie"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Ported from Shining Force II</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		  <aside class="toggle-details">
		    <div class="portrait-details">
					<dl> <dd>6</dd> <dd>0</dd> <dd>1</dd> <dd>3</dd> </dl>
					<dl> <dd>7</dd> <dd>0</dd> <dd>2</dd> <dd>3</dd> </dl>
					<dl> <dd>6</dd> <dd>1</dd> <dd>1</dd> <dd>4</dd> </dl>
					<dl> <dd>7</dd> <dd>1</dd> <dd>2</dd> <dd>4</dd> </dl>
					<dl> <dd>6</dd> <dd>2</dd> <dd>3</dd> <dd>3</dd> </dl>
					<dl> <dd>7</dd> <dd>2</dd> <dd>4</dd> <dd>3</dd> </dl>
					<dl> <dd>6</dd> <dd>3</dd> <dd>3</dd> <dd>4</dd> </dl>
					<dl> <dd>7</dd> <dd>3</dd> <dd>4</dd> <dd>4</dd> </dl>
		    </div>
		    <div class="portrait-details">
					<dl> <dd>6</dd> <dd>4</dd> <dd>2</dd> <dd>5</dd> </dl>
					<dl> <dd>7</dd> <dd>4</dd> <dd>3</dd> <dd>5</dd> </dl>
					<dl> <dd>6</dd> <dd>5</dd> <dd>2</dd> <dd>6</dd> </dl>
					<dl> <dd>7</dd> <dd>5</dd> <dd>3</dd> <dd>6</dd> </dl>
		    </div>
		  </aside><!-- aside -->
		</article>

		<?php $id="chaos-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Alternate/Laser Attack", $type="Force", $number="2", $set="0", $offset="4", $comparison=false); ?>
		</article>

		<?php $id="claude"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Ported from Shining Force II</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="1", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="1", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		  <aside class="toggle-details">
		    <div class="portrait-details">
					<dl> <dd>6</dd> <dd>0</dd> <dd>1</dd> <dd>2</dd> </dl>
					<dl> <dd>7</dd> <dd>0</dd> <dd>2</dd> <dd>2</dd> </dl>
					<dl> <dd>6</dd> <dd>1</dd> <dd>3</dd> <dd>2</dd> </dl>
					<dl> <dd>7</dd> <dd>1</dd> <dd>4</dd> <dd>2</dd> </dl>
		    </div>
		    <div class="portrait-details">
					<dl> <dd>6</dd> <dd>2</dd> <dd>1</dd> <dd>5</dd> </dl>
					<dl> <dd>7</dd> <dd>2</dd> <dd>2</dd> <dd>5</dd> </dl>
					<dl> <dd>6</dd> <dd>3</dd> <dd>3</dd> <dd>5</dd> </dl>
					<dl> <dd>7</dd> <dd>3</dd> <dd>4</dd> <dd>5</dd> </dl>
		  	</div>
			</aside><!-- aside -->
			<h2>Updated Animation</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="darksol-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<h2>Swordsman</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="elliot-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="gerhalt"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Ported from Shining Force II</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Edited by unknown artist", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=false, $speech=false, $title="Animation preview unavailable", $set="0", $comparison=false); ?>
			<h2>Ported from Shining Force II</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Edited by unknown artist", $set="2", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="1", $comparison=false); ?>
		</article>

		<?php $id="ghoul-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="goblin-torch-eye"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="gong"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design for Promotion</h2>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="guntz"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design for Promotion</h2>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="hanzou"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Promoted Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
		</article>

		<?php $id="kane-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php map_sprites($folder=$id, $palette="2", $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="king-bedoe"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="1", $comparison=false); ?>
		</article>

		<?php $id="lizardman-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Normal/Force palette", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="lowe"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Unpromoted Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<h2>Original Promoted Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="luke"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Promoted Design</h2>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="mae"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Lance", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Spear", $type="Force", $number="2", $set="0", $offset="4", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=false, $speech=false, $title="'Speech' animation now shows white teeth, not grey", $set="0", $comparison=false); ?>
		</article>

		<?php $id="max"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Posing</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="minotaur-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Normal/Force palette", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="minotaur-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="mitula"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php // battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php // battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="musashi"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original posing, with added scabbard for Battle frames</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
		</article>

		<?php $id="odd-eye-force"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original reversed</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=false, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="pelle"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Redesigned Battle Art based on Mercenary/Rune Knight</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Lance", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Spear", $type="Force", $number="2", $set="0", $offset="4", $comparison=false); ?>
		</article>

		<?php $id="princess-elis"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="designed by unknown artist", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="slade"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Straight Port from SF2</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
			<h2>Straight Port from SF2</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="3", $set="1", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="1", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Update by [unknown]", $set="2", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="1", $comparison=false); ?>
		</article>

		<?php $id="spirit"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original Design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Original side-view and rear-view sprites", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=false, $speech=true, $title="", $set="0", $comparison=false); ?>
		</article>

		<?php $id="tyris-flare"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original unpromoted design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
			<h2>Original promoted design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="1", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="1", $comparison=false); ?>
		</article>

		<?php $id="varios"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Original unpromoted design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php //map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<h2>Original promoted design</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="1", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="", $type="Force", $number="2", $set="1", $offset="2", $comparison=false); ?>
			<?php //map_sprites($folder=$id, $palette="1", $title="", $set="1", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="", $set="0", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=true, $title="SF1 style; older Varios", $set="1", $comparison=false); ?>
		</article>

		<?php $id="zynk"; ?>
		<article class="tab" id="tab-<?php echo $id; ?>">
			<h2>Updated Battle Design by Dan</h2>
			<?php battle_sprites($folder=$id, $stance="Idle", $title="", $type="Force", $number="2", $set="0", $offset="0", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Melee Attack", $type="Force", $number="2", $set="0", $offset="2", $comparison=false); ?>
			<?php battle_sprites($folder=$id, $stance="Attack", $title="Laser Attack", $type="Force", $number="2", $set="0", $offset="4", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="", $set="0", $comparison=false); ?>
			<?php map_sprites($folder=$id, $palette="1", $title="Edited by unknown artist", $set="1", $comparison=false); ?>
			<?php portrait_sprites($folder=$id, $blink=true, $speech=false, $title="", $set="0", $comparison=false); ?>
		</article>

</article>

<?php require('sidebar.php'); ?>

<?php require('footer.php'); ?>
