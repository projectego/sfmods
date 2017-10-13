<?php require('header.php'); ?>

<article id="spells">

	<nav id="page-navigation">
		<ul class="no-bullets sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-new"><cite>Custom</cite></div></li>
			<li><div data-tab="#tab-sf2"><cite>SF2 Spells</cite></div></li>
		</ul>
	</nav>

	<div class="col2">

		<div class="tab" id="tab-new">

			<h2>New Spells</h2>
			<ul class="items-list">
				<li><img class="lazy" data-src="sprites/spells/armageddon.bmp"> Armageddon</li>
				<li><img class="lazy" data-src="sprites/spells/blizzard.bmp"> Armageddon</li>
				<li><img class="lazy" data-src="sprites/spells/demon-breath.bmp"> Demon Breath</li>
				<li><img class="lazy" data-src="sprites/spells/demon-breath-v2.bmp"> Demon Breath v2</li>
				<li><img class="lazy" data-src="sprites/spells/eclipse.bmp"> Eclipse</li>
				<li><img class="lazy" data-src="sprites/spells/inferno.bmp"> Inferno</li>
				<li><img class="lazy" data-src="sprites/spells/inferno-2.bmp"> Inferno (Alt)</li>
				<li><img class="lazy" data-src="sprites/spells/lightning-storm.bmp"> Lightning Storm</li>
				<li><img class="lazy" data-src="sprites/spells/poison.bmp"> Poison</li>
				<li><img class="lazy" data-src="sprites/spells/super-boost.bmp"> Super Boost</li>
				<li><img class="lazy" data-src="sprites/spells/super-desoul.bmp"> Super Desoul</li>
				<li><img class="lazy" data-src="sprites/spells/super-poison.bmp"> Super Poison</li>
				<li><img class="lazy" data-src="sprites/spells/super-shield.bmp"> Super Shield</li>
			</ul>

		</div>

		<div class="tab" id="tab-sf2">

			<h2>Ported SF2 Spells</h2>
			<p>Only spells that have received graphical updates from the transition from SF1 to SF2 are included below.</p>
			<ul class="items-list">
				<li><img class="lazy" data-src="sprites/spells/sf2/attack.bmp"> Attack</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/blaze.bmp"> Blaze</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/bolt.bmp"> Bolt</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/boost.bmp"> Boost</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/desoul.bmp"> Desoul</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/egress.bmp"> Egress</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/sleep.bmp"> Sleep</li>
				<li><img class="lazy" data-src="sprites/spells/sf2/slow.bmp"> Slow</li>
			</ul>

		</div>

	</div>

</article>

<?php require('sidebar.php'); ?>

<?php require('footer.php'); ?>
