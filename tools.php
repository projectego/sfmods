<?php require('header.php'); ?>

<?php

/*
$chart_1 = "Stat increases are consistent and occur at regular intervals.";
$chart_2 = "Stat increases accrue slowly at first, but increase dramatically on the final stretch to level 20.";
$chart_3 = "Stat increases accrue very quickly during the earlier levels, then drastically decrease for a similar number of levels before once again greatly increasing on the final stretch to level 20.";
$chart_4 = "Stat increases accrue quickly at first, but decrease dramatically on the final stretch to level 20.";
*/
$chart_1 = "Linear progression.";
$chart_2 = "Late progression.";
$chart_3 = "Early and late progression.";
$chart_4 = "Early progression.";

$stat_base_info = "This will determine the stat value for your character at Level 1.";
$stat_unpromoted_info = "This will determine your character's predicted stat value at level 20 (unpromoted) and will influence the stats they acquire as they level up.<br><br>A high value will typically mean that a character will earn higher stats and more often when levelling up, whereas a low value will typically mean that a character will earn lower stats and infrequently.";
$stat_promoted_info = "";

?>

<article id="tools">

	<nav id="page-navigation">
		<ul class="sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-force-member-builder"><figure class="map-sprite"><img src="images/sprites/max.gif"></figure><cite></cite></div></li>
			<li><div data-tab="#tab-enemy-builder"><figure class="map-sprite"><img src="images/sprites/darksol.gif"></figure><cite></cite></div></li>
		</ul>
	</nav>

	<div class="col2">

		<div class="tab" id="tab-force-member-builder">

			<h1>Force Member Generator</h1>

			<div class="stat" id="presets-input">
				<header>
					<h2>Presets</h2>
					<span>Optional: Use a preset to help determine your character's stats?</span>
				</header>
				<div class="presets toggle">
					<label id="preset-max"><figure class="button"><img src="images/portraits/max-p.gif"></figure>Max</label>
					<label id="preset-mae"><figure class="button"><img src="images/portraits/mae.gif"></figure>Mae</label>
					<label id="preset-gort"><figure class="button"><img src="images/portraits/gort.gif"></figure>Gort</label>
					<label id="preset-tao"><figure class="button"><img src="images/portraits/tao.gif"></figure>Tao</label>
					<label id="preset-khris"><figure class="button"><img src="images/portraits/khris.gif"></figure>Khris</label>
					<label id="preset-hans"><figure class="button"><img src="images/portraits/hans.gif"></figure>Hans</label>
					<label id="preset-balbaroy"><figure class="button"><img src="images/portraits/balbaroy.gif"></figure>Balbaroy</label>
					<label id="preset-bowie"><figure class="button"><img src="sprites/bowie/p0_0.bmp"></figure>Bowie</label>
					<div class="clear"></div>
				</div>
			</div>

			<div class="stat" id="weapon-input">
				<header>
					<h2>Class</h2>
					<span>What is your character's primary weapon?</span>
				</header>
				<div class="weapons">
					<label><input checked name="weapon-input" type="radio" value="0"><img src="images/inventory/blank.gif">Unarmed</label>
					<label><input class="balbaroy bowie max" name="weapon-input" type="radio" value="1"><img src="images/inventory/short-sword.gif">Sword</label>
					<label><input class="gort" name="weapon-input" type="radio" value="2"><img src="images/inventory/hand-axe.gif">Axe</label>
					<label><input class="mae" name="weapon-input" type="radio" value="3"><img src="images/inventory/bronze-lance.gif">Lance/Spear</label>
					<label><input class="diane hans" name="weapon-input" type="radio" value="4"><img src="images/inventory/wooden-arrow.gif">Arrow</label>
					<label><input class="khris tao" name="weapon-input" type="radio" value="5"><img src="images/inventory/wooden-staff.gif">Staff</label>
					<div class="clear"></div>
				</div>
			</div>

			<div class="stat" id="level-input">
				<header>
					<h2>Level</h2>
					<span>Approximately when will the character join the Force?</span>
				</header>
				<div class="padding">
					<select id="level-input">
						<!-- <option disabled selected value="Select a location...">Select a location...</option> -->
						<option class="bowie hans ken lowe luke tao max" selected value="0">Guardiana</option>
						<option class="gort mae" value="1">Guardiana (Revisited)</option>
						<option class="khris" value="2">Alterone</option>
						<option class="" value="3">Rindo</option>
						<option class="" value="4">Manarina</option>
						<option class="balbaroy" value="5">Shade Abbey</option>
						<option class="" value="6">Bustoke</option>
						<option class="" value="7">Pao</option>
						<option class="" value="8">Pao (Revisited)</option>
						<option class="" value="9">Uranbatol</option>
						<option class="" value="10">Waral</option>
						<option class="" value="11">Rudo</option>
						<option class="" value="12">Dragonia</option>
						<option class="" value="13">Prompt</option>
						<option class="" value="14">Runefaust</option>
					</select>
				</div>
			</div>

			<div class="table-container">
				<h2>Configurator</h2>
				<table class="fancy-table type-2">
					<thead>
						<tr>
							<td>&nbsp;</td>
							<td>Base Stats</td>
							<td>Projected Level 20 Stats</td>
							<td>Projected Level 20 (Promoted) Stats</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Attack</td>
							<td>
								<select id="attack-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="gort" value="4">High</option>
									<option class="balbaroy bowie hans khris max" selected value="3">Average</option>
									<option class="mae" value="2">Low</option>
									<option class="tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
							</td>
							<td>
								<select id="u-attack-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="bowie gort mae max" value="4">High</option>
									<option class="" selected value="3">Average</option>
									<option class="balbaroy hans khris" value="2">Low</option>
									<option class="tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="bowie gort khris tao" name="u-attack-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="hans" name="u-attack-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="balbaroy max" name="u-attack-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="" name="u-attack-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
							<td>
								<select id="p-attack-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="balbaroy bowie max" value="4">High</option>
									<option class="gort mae" selected value="3">Average</option>
									<option class="hans khris" value="2">Low</option>
									<option class="tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="balbaroy bowie gort hans khris max tao" name="p-attack-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="" name="p-attack-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="" name="p-attack-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="" name="p-attack-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Defense</td>
							<td>
								<select id="defense-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="" value="4">High</option>
									<option class="balbaroy gort" selected value="3">Average</option>
									<option class="hans khris mae" value="2">Low</option>
									<option class="bowie max tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
							</td>
							<td>
								<select id="u-defense-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="gort" value="4">High</option>
									<option class="bowie mae max" selected value="3">Average</option>
									<option class="balbaroy hans" value="2">Low</option>
									<option class="khris tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="bowie khris tao" name="u-defense-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="hans" name="u-defense-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="balbaroy gort max" name="u-defense-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="mae" name="u-defense-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
							<td>
								<select id="p-defense-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="bowie gort max" value="4">High</option>
									<option class="" selected value="3">Average</option>
									<option class="balbaroy mae" value="2">Low</option>
									<option class="hans khris tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="balbaroy bowie gort hans max tao" name="p-defense-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="" name="p-defense-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="" name="p-defense-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="khris" name="p-defense-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Agility</td>
							<td>
								<select id="agility-input">
									<option class="" value="6">Overpowered</option>
									<option class="balbaroy mae" value="5">Very High</option>
									<option class="hans tao" value="4">High</option>
									<option class="" selected value="3">Average</option>
									<option class="bowie gort khris max" value="2">Low</option>
									<!-- <option class="" value="1">Very Low</option> -->
									<!-- <option class="" value="0">Underpowered</option> -->

								</select>
							</td>
							<td>
								<select id="u-agility-input">
									<option class="" value="6">Overpowered</option>
									<option class="tao" value="5">Very High</option>
									<option class="" value="4">High</option>
									<option class="" selected value="3">Average</option>
									<option class="balbaroy bowie gort khris mae max" value="2">Low</option>
									<option class="hans" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="gort khris tao" name="u-agility-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="" name="u-agility-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="balbaroyhans max" name="u-agility-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="bowie" name="u-agility-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
							<td>
								<select id="p-agility-input">
									<option class="" value="6">Overpowered</option>
									<option class="mae tao" value="5">Very High</option>
									<option class="balbaroy" value="4">High</option>
									<option class="hans" selected value="3">Average</option>
									<option class="khris" value="2">Low</option>
									<option class="gort max" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="balbaroy hans khris" name="p-agility-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="" name="p-agility-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="bowie gort" name="p-agility-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="max tao" name="p-agility-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Move</td>
							<td>
								<select id="move-input">
									<option class="" value="6">Overpowered</option>
									<option class="balbaroy mae" value="5">Very High</option>
									<option class="bowie gort max" value="4">High</option>
									<option class="hans khris tao" selected value="3">Average</option>
									<option class="" value="2">Low</option>
									<option class="" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
							</td>
							<td>(No growth options)</td>
							<td>(No growth options)</td>
						</tr>
						<tr>
							<td>Critical %</td>
							<td>
								<select id="critical-input">
									<option class="" value="6">Overpowered</option>
									<!-- <option class="" value="5">Very High</option> -->
									<!-- <option class="" value="4">High</option> -->
									<option class="balbaroy bowie gort hans khris mae max tao" selected value="3">Average</option>
									<!-- <option class="" value="2">Low</option> -->
									<!-- <option class="" value="1">Very Low</option> -->
									<option class="" value="0">Underpowered</option>
								</select>
							</td>
							<td>
								<select id="u-critical-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="gort hans max" value="4">High</option>
									<option class="balbaroy bowie" selected value="3">Average</option>
									<option class="" value="2">Low</option>
									<option class="khris mae tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="bowie gort hans khris max tao" name="u-critical-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="bleu" name="u-critical-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="balbaroy" name="u-critical-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="" name="u-critical-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
							<td>
								<select id="p-critical-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="hans" value="4">High</option>
									<option class="bowie gort max" selected value="3">Average</option>
									<option class="khris mae" value="2">Low</option>
									<option class="balbaroy tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="balbaroy bowie gort khris max tao" name="p-critical-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="hans" name="p-critical-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="" name="p-critical-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="" name="p-critical-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Health</td>
							<td>
								<select id="hp-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="" value="4">High</option>
									<option class="bowie gort hans khris mae max" selected value="3">Average</option>
									<option class="balbaroy tao" value="2">Low</option>
									<option class="" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
							</td>
							<td>
								<select id="u-hp-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="bowie mae max" value="4">High</option>
									<option class="hans" selected value="3">Average</option>
									<option class="balbaroy gort khris" value="2">Low</option>
									<option class="tao" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="bowie gort khris max tao" name="u-hp-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="hans mae" name="u-hp-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="balbaroy" name="u-hp-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="" name="u-hp-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
							<td>
								<select id="p-hp-input">
									<option class="" value="6">Overpowered</option>
									<option class="" value="5">Very High</option>
									<option class="max" value="4">High</option>
									<option class="bowie gort mae" selected value="3">Average</option>
									<option class="hans tao" value="2">Low</option>
									<option class="balbaroy khris" value="1">Very Low</option>
									<!-- <option class="" value="0">Underpowered</option> -->
								</select>
								<div class="growth-curves">
									<label><input checked class="balbaroy bowie gort khris max" name="p-hp-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
									<label><input class="hans tao" name="p-hp-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
									<label><input class="" name="p-hp-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
									<label><input class="mae" name="p-hp-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<select id="magic-input">
									<!--<option class="" value="5">Magic Creature</option>-->
									<option class="alef anri tao" value="4">Mage/Wizard</option>
									<option class="khris lowe torasu" value="3">Healer/Vicar</option>
									<option class="bowie" value="2">Hero (SF2)</option>
									<option class="max" value="1">Hero (SF1)</option>
									<option class="balbaroy bleu gort hans ken luke mae" selected value="0">No Magic</option>
								</select>
							</td>
							<td>
								<div class="hidden mp-input">
									<select id="mp-input">
										<option class="" value="6">Overpowered</option>
										<option class="" value="5">Very High</option>
										<option class="" value="4">High</option>
										<option class="bowie max" selected value="3">Average</option>
										<option class="khris tao" value="2">Low</option>
										<option class="alef anri" value="1">Very Low</option>
										<!-- <option class="" value="0">Underpowered</option> -->
									</select>
								</div>
							</td>
							<td>
								<div class="hidden mp-input">
									<select id="u-mp-input">
										<option class="" value="6">Overpowered</option>
										<option class="tao" value="5">Very High</option>
										<option class="" value="4">High</option>
										<option class="bowie khris max" selected value="3">Average</option>
										<option class="" value="2">Low</option>
										<option class="" value="1">Very Low</option>
										<!-- <option class="" value="0">Underpowered</option> -->
									</select>
									<div class="growth-curves">
										<label><input checked class="max" name="u-mp-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
										<label><input class="" name="u-mp-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
										<label><input class="khris tao" name="u-mp-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
										<label><input class="bowie" name="u-mp-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
									</div>
								</div>
							</td>
							<td>
								<div class="hidden mp-input">
									<select id="p-mp-input">
										<option class="" value="6">Overpowered</option>
										<option class="tao" value="5">Very High</option>
										<option class="khris" value="4">High</option>
										<option class="bowie max" selected value="3">Average</option>
										<option class="" value="2">Low</option>
										<option class="" value="1">Very Low</option>
										<!-- <option class="" value="0">Underpowered</option> -->
									</select>
									<div class="growth-curves">
										<label><input checked class="khris max tao" name="p-mp-growth-input" type="radio" value="1"><img src="images/chart-1.gif"></label>
										<label><input class="" name="p-mp-growth-input" type="radio" value="2"><img src="images/chart-2.gif"></label>
										<label><input class="" name="p-mp-growth-input" type="radio" value="3"><img src="images/chart-3.gif"></label>
										<label><input class="bowie" name="p-mp-growth-input" type="radio" value="4"><img src="images/chart-4.gif"></label>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<dl id="growth-curves-legend">
				<dt><img src="images/chart-1.gif"></dt>
				<dd>Linear</dd>
				<dt><img src="images/chart-2.gif"></dt>
				<dd>Late</dd>
				<dt><img src="images/chart-3.gif"></dt>
				<dd>Early and Late</dd>
				<dt><img src="images/chart-4.gif"></dt>
				<dd>Early</dd>
			</dl>

			<div><span class="button compare-button fancy-button show-after-generate" id="character-compare">Compare to Max</span></div>

			<span class="big-button button fancy-button" id="generate">Generate Force Member<span class="show-after-generate"> Again</span>!</span>

			<div class="show-after-generate table-container" id="character-stats">
				<h2 class="toggle-width">Stats</h2>
				<table class="fancy-table type-2">
					<thead>
						<tr>
							<td>&nbsp;</td>
							<td>Base Stats</td>
							<td class="hidden max-stats"><img src="images/portraits/max.gif"></td>
							<td>Projected Level 20 Stats</td>
							<td class="hidden max-stats"><img src="images/portraits/max.gif"></td>
							<td>Projected Level 20 (Promoted) Stats</td>
							<td class="hidden max-stats"><img src="images/portraits/max-p.gif"></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Class</td>
							<td><span class="class-output">[????]</span></td>
							<td class="hidden max-stats">[SDMN]</td>
							<td><span class="class-output">[????]</span></td>
							<td class="hidden max-stats">[SDMN]</td>
							<td><span class="p-class-output">[????]</span></td>
							<td class="hidden max-stats">[HERO]</td>
						</tr>
						<tr>
							<td>Level</td>
							<td><span class="level-output">1</span></td>
							<td class="hidden max-stats">1</td>
							<td>20</td>
							<td class="hidden max-stats">20</td>
							<td>40/20 (promoted)</td>
							<td class="hidden max-stats">40/20 (promoted)</td>
						</tr>
						<tr>
							<td>Attack</a></td>
							<td><span class="attack-output">0</span></td>
							<td class="hidden max-stats">6</td>
							<td><img class="u-attack-growth-output" src="images/chart-1.gif"> <span class="u-attack-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-3.gif"> 17</td>
							<td><img class="p-attack-growth-output" src="images/chart-1.gif"> <span class="p-attack-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-1.gif"> 23</td>
						</tr>
						<tr>
							<td>Defense</td>
							<td><span class="defense-output">0</span></td>
							<td class="hidden max-stats">4</td>
							<td><img class="u-defense-growth-output" src="images/chart-1.gif"> <span class="u-defense-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-3.gif"> 16</td>
							<td><img class="p-defense-growth-output" src="images/chart-1.gif"> <span class="p-defense-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-1.gif"> 48</td>
						</tr>
						<tr>
							<td>Agility</td>
							<td><span class="agility-output">0</span></td>
							<td class="hidden max-stats">4</td>
							<td><img class="u-agility-growth-output" src="images/chart-1.gif"> <span class="u-agility-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-3.gif"> 14</td>
							<td><img class="p-agility-growth-output" src="images/chart-1.gif"> <span class="p-agility-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-4.gif"> 35</td>
						</tr>
						<tr>
							<td>Move</td>
							<td><span class="move-output">0</span></td>
							<td class="hidden max-stats">6</td>
							<td>-</td>
							<td class="hidden max-stats">-</td>
							<td>-</td>
							<td class="hidden max-stats">-</td>
						</tr>
						<tr>
							<td>Critical</td>
							<td><span class="critical-output">0%</span></td>
							<td class="hidden max-stats">3%</td>
							<td><img class="u-critical-growth-output" src="images/chart-1.gif"> <span class="u-critical-output">0%</span></td>
							<td class="hidden max-stats"><img src="images/chart-1.gif"> 4%</td>
							<td><img class="p-critical-growth-output" src="images/chart-1.gif"> <span class="p-critical-output">0%</span></td>
							<td class="hidden max-stats"><img src="images/chart-1.gif"> 8%</td>
						</tr>
						<tr>
							<td>HP</td>
							<td><span class="hp-output">0/0</span></td>
							<td class="hidden max-stats">12/12</td>
							<td><img class="u-hp-growth-output" src="images/chart-1.gif"> <span class="u-hp-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-1.gif"> 23</td>
							<td><img class="p-hp-growth-output" src="images/chart-1.gif"> <span class="p-hp-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-1.gif"> 46</td>
						</tr>
						<tr class="hidden" id="mp-output">
							<td>MP</td>
							<td><span class="mp-output">0/0</span></td>
							<td class="hidden max-stats">8/8</td>
							<td><img class="u-mp-growth-output" src="images/chart-1.gif"> <span class="u-mp-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-3.gif"> 4</td>
							<td><img class="p-mp-growth-output" src="images/chart-1.gif"> <span class="p-mp-output">0</span></td>
							<td class="hidden max-stats"><img src="images/chart-3.gif"> 2</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="clear"></div>

			<div class="character-misc stat show-after-generate">
				<header>
					<h2>Extras</h2>
					<span>Miscellaneous stuff</span>
				</header>
				<div class="padding2">
					<div class="col">
						<div class="padding">
							<h3>Inventory</h3>
							<ul class="inventory items" id="force-items">
								<li class="left left-item"><img src="images/inventory/blank.gif"></li>
								<li class="right right-item"><img src="images/inventory/blank.gif"></li>
								<li class="top top-item"><img src="images/inventory/blank.gif"></li>
								<li class="bottom bottom-item" ><img src="images/inventory/blank.gif"></li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="padding">
							<h3>Spells</h3>
							<ul class="inventory spells" id="force-spells">
								<li class="left left-spell"><img src="images/inventory/blank.gif"></li>
								<li class="right right-spell"><img src="images/inventory/blank.gif"></li>
								<li class="top top-spell"><img src="images/inventory/blank.gif"></li>
								<li class="bottom bottom-spell" ><img src="images/inventory/blank.gif"></li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="padding">
							<div class="spell-output"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

		</article>

		<article class="tab" id="tab-enemy-builder">

			<h1>Enemy Generator (CURRENTLY BROKEN!)</h1>

			<div class="stat" id="presets-input">
				<header>
					<h2>Presets</h2>
					<span>Optional: Use a preset to help determine the enemy's stats?</span>
				</header>
				<div class="presets toggle">
					<label id="preset-goblin"><figure class="button"><img src="images/sprites/goblin.gif"></figure> Goblin</label>
					<label id="preset-dark-mage"><figure class="button"><img src="images/sprites/dark-mage.gif"></figure> Dark Mage</label>
					<label id="preset-lizardman"><figure class="button"><img src="images/sprites/lizardman.gif"></figure> Lizardman</label>
					<label id="preset-minotaur"><figure class="button"><img src="images/sprites/minotaur.gif"></figure> Minotaur</label>
					<label id="preset-ghoul"><figure class="button"><img src="images/sprites/ghoul.gif"></figure> Ghoul</label>
					<label id="preset-kane"><figure class="button"><img src="images/portraits/lord-kane.gif"></figure> Kane</label>
					<label id="preset-ramladu"><figure class="button"><img src="images/portraits/ramladu.gif"></figure> Ramladu</label>
					<label id="preset-darksol"><figure class="button"><img src="images/portraits/darksol.gif"></figure> Darksol</label>
					<div class="clear"></div>
				</div>
			</div>

			<div class="stat" id="presets-input">
				<header>
					<h2>Role</h2>
					<span>What type of enemy is this?</span>
				</header>
				<div class="role">
					<label><input checked class="" name="e-role-input" type="radio" value="0"> Regular Enemy</label>
					<label><input class="" name="e-role-input" type="radio" value="1"> Boss</label>
					<div class="clear"></div>
				</div>
			</div>

			<div class="stat" id="weapon-input">
				<header>
					<h2>Class</h2>
					<span>What is this enemy's primary weapon?</span>
				</header>
				<div class="weapons">
					<label><input checked name="" type="radio" value="0"><img src="images/inventory/blank.gif"> Unarmed</label>
					<label><input class="" name="e-weapon-input" type="radio" value="1"><img src="images/inventory/short-sword.gif"> Sword</label>
					<label><input class="" name="e-weapon-input" type="radio" value="2"><img src="images/inventory/hand-axe.gif"> Axe</label>
					<label><input class="" name="e-weapon-input" type="radio" value="3"><img src="images/inventory/bronze-lance.gif"> Lance/Spear</label>
					<label><input class="" name="e-weapon-input" type="radio" value="4"><img src="images/inventory/wooden-arrow.gif"> Arrow</label>
					<label><input class="" name="e-weapon-input" type="radio" value="5"><img src="images/inventory/wooden-staff.gif"> Staff</label>
					<div class="clear"></div>
				</div>
			</div>

			<div class="stat" id="level-input">
				<header>
					<h2>Effective Level</h2>
					<span>Approximately when will the player encounter this enemy?</span>
				</header>
				<div class="padding">
					<select id="e-level-input">
						<!-- <option disabled selected value="Select a location...">Select a location...</option> -->
						<option class="" selected value="0">Battle 1: Gate of the Ancients</option>
						<option class="" value="1">Battle 2: Return to Guardiana</option>
						<option class="" value="2">Battle 3: To Alterone</option>
						<option class="" value="3">Battle 4: Alterone</option>
						<option class="" value="4">Battle 5: To Manarina</option>
						<option class="" value="5">Battle 6: The Cavern of Darkness</option>
						<option class="" value="6">Battle 7: Rindo Circus</option>
						<option class="" value="7">Battle 8: Shade Abbey</option>
						<option class="" value="8">Battle 9: Bustoke Quarry</option>
						<option class="" value="9">Battle 10: To Pao Bridge</option>
						<option class="" value="10">Battle 11: Pao Bridge</option>
						<option class="" value="11">Battle 12: Pao Prairie</option>
						<option class="" value="12">Battle 13: Uranbatol Fortress</option>
						<option class="" value="13">Battle 14: Uranbatol Harbour</option>
						<option class="" value="14">Battle 15: Ship Battle #1</option>
						<option class="" value="15">Battle 16: Path of the Ancients</option>
						<option class="" value="16">Battle 17: Ship Battle #2</option>
						<option class="" value="17">Battle 18: To Dragonia</option>
						<option class="" value="18">Battle 19: Dragonia</option>
						<option class="" value="19">Battle 20: To Demon Castle</option>
						<option class="" value="20">Battle 21: Demon Castle</option>
						<option class="" value="21">Battle 22: To the Tower of the Ancients</option>
						<option class="" value="22">Battle 23: Tower of the Ancients</option>
						<option class="" value="23">Battle 24: Metapha</option>
						<option class="" value="24">Battle 25: To Runefaust</option>
						<option class="" value="25">Battle 26: Runefaust Castle</option>
						<option class="" value="26">Battle 27: King Ramladu's Court</option>
						<option class="" value="27">Battle 28: Castle of the Ancients</option>
						<option class="" value="28">Battle 29: Darksol's Lair</option>
						<option class="" value="29">Battle 30: Dark Dragon's Lair</option>
					</select>
				</div>
			</div>

			<div class="stat" id="enemy-stats">
				<header>
					<h2>Stats Configurator</h2>
					<span>Let's build this enemy's stats</span>
				</header>
				<div class="enemy-stats">
					<label>
						<span>Attack</span>
						<select id="e-attack-input">
							<option class="" value="6">Overpowered</option>
							<option class="" value="5">Very High</option>
							<option class="" value="4">High</option>
							<option class="" selected value="3">Average</option>
							<option class="" value="2">Low</option>
							<option class="" value="1">Very Low</option>
						</select>
					</label>
					<label>
						<span>Defense</span>
						<select id="e-defense-input">
							<option class="" value="6">Overpowered</option>
							<option class="" value="5">Very High</option>
							<option class="" value="4">High</option>
							<option class="" selected value="3">Average</option>
							<option class="" value="2">Low</option>
							<option class="" value="1">Very Low</option>
						</select>
					</label>
					<label>
						<span>Agility</span>
						<select id="e-agility-input">
							<option class="" value="6">Overpowered</option>
							<option class="" value="5">Very High</option>
							<option class="" value="4">High</option>
							<option class="" selected value="3">Average</option>
							<option class="" value="2">Low</option>
							<option class="" value="1">Very Low</option>
						</select>
					</label>
					<label>
						<span>Move</span>
						<select id="e-move-input">
							<option class="" value="6">Overpowered</option>
							<option class="" value="5">Very High</option>
							<option class="" value="4">High</option>
							<option class="" selected value="3">Average</option>
							<option class="" value="2">Low</option>
							<option class="" value="1">Very Low</option>
						</select>
					</label>
					<label>
						<span>HP</span>
						<select id="e-hp-input">
							<option class="" value="6">Overpowered</option>
							<option class="" value="5">Very High</option>
							<option class="" value="4">High</option>
							<option class="" selected value="3">Average</option>
							<option class="" value="2">Low</option>
							<option class="" value="1">Very Low</option>
							<!-- <option class="" value="0">Underpowered</option> -->
						</select>
					</label>
					<label>
						<span>MP</span>
						<select id="e-magic-input">
							<option class="" value="2">Mage/Wizard</option>
							<option class="" value="1">Healer/Vicar</option>
							<option class="" selected value="0">No Magic</option>
						</select>
						<div class="hidden e-mp-input">
							<select id="e-mp-input">
								<option class="" value="6">Overpowered</option>
								<option class="" value="5">Very High</option>
								<option class="" value="4">High</option>
								<option class="" selected value="3">Average</option>
								<option class="" value="2">Low</option>
								<option class="" value="1">Very Low</option>
							</select>
						</div>
					</label>
					<label>
						<span>Gold Reward</span>
						<select id="e-reward-input">
							<option class="" value="5">Very High</option>
							<option class="" value="4">High</option>
							<option class="" selected value="3">Average</option>
							<option class="" value="2">Low</option>
							<option class="" value="1">Very Low</option>
						</select>
					</label>
					<div class="clear"></div>
				</div>
			</div>

			<div><span class="button compare-button fancy-button show-after-generate-enemy" id="enemy-compare">Compare to Darksol</span></div>

			<span class="big-button button fancy-button" id="generate-enemy">Generate Enemy<span class="show-after-generate-enemy"> Again</span>!</span>

			<div class="show-after-generate-enemy table-container box-left" id="character-stats">
				<h2>Stats</h2>
				<table class="fancy-table type-2">
					<thead>
						<tr>
							<td>&nbsp;</td>
							<td>Base Stats</td>
							<td class="hidden darksol-stats"><img src="images/portraits/darksol.gif"></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Health Points</td>
							<td><span class="e-hp-output">0/0</span></td>
							<td class="hidden darksol-stats">12/12</td>
						</tr>
						<tr class="hidden" id="e-mp-output">
							<td>Magic Points</td>
							<td><span class="e-mp-output">0/0</span></td>
							<td class="hidden darksol-stats">8/8</td>
						</tr>
						<tr>
							<td>Attack</a></td>
							<td><span class="e-attack-output">0</span></td>
							<td class="hidden darksol-stats">6</td>
						</tr>
						<tr>
							<td>Defense</td>
							<td><span class="e-defense-output">0</span></td>
							<td class="hidden darksol-stats">4</td>
						</tr>
						<tr>
							<td>Agility</td>
							<td><span class="e-agility-output">0</span></td>
							<td class="hidden darksol-stats">4</td>
						</tr>
						<tr>
							<td>Move</td>
							<td><span class="e-move-output">0</span></td>
							<td class="hidden darksol-stats">6</td>
						</tr>
						<tr>
							<td>Effective Level</td>
							<td><span class="e-level-output">1</span></td>
							<td class="hidden darksol-stats">1</td>
						</tr>
						<tr>
							<td>Gold Reward (Coins)</td>
							<td><span class="e-reward-output">1</span></td>
							<td class="hidden darksol-stats">1</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="character-misc stat show-after-generate-enemy box-right" id="enemy-misc">
				<h2>Inventory</h2>
				<div class="padding2">
					<div class="col">
						<div class="padding">
							<h3>Inventory</h3>
							<ul class="inventory items" id="enemy-items">
								<li class="left left-item"><img src="images/inventory/blank.gif"></li>
								<li class="right right-item"><img src="images/inventory/blank.gif"></li>
								<li class="top top-item"><img src="images/inventory/blank.gif"></li>
								<li class="bottom bottom-item" ><img src="images/inventory/blank.gif"></li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="padding">
							<h3>Spells</h3>
							<ul class="inventory spells" id="enemy-spells">
								<li class="left left-spell"><img src="images/inventory/blank.gif"></li>
								<li class="right right-spell"><img src="images/inventory/blank.gif"></li>
								<li class="top top-spell"><img src="images/inventory/blank.gif"></li>
								<li class="bottom bottom-spell" ><img src="images/inventory/blank.gif"></li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="padding">
							<div class="e-spell-output"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

		</div>

	</div>

</article>

<?php // require('sidebar.php'); ?>

<?php require('footer.php'); ?>
