<?php require('header.php'); ?>

<?php function thead($number) { ?>
	<thead>
		<tr>
			<td>Battle #<?php echo $number; ?></td>
			<td>HP</td>
			<td>MP</td>
			<td>Spells</td>
			<td>Attack</td>
			<td>Defense</td>
			<td>Agility</td>
			<td>Move</td>
			<td>Effective Level</td>
			<td>Editor ID#</td>
			<td>Gold Reward</td>
		</tr>
	</thead>
<?php } ?>

<?php function tfoot($notes, $gold) { ?>
	<tfoot>
		<tr>
			<td class="notes" colspan="10">Notes: <?php echo $notes; ?></td>
			<td class="total-gold">Total: <span class="gold"><?php echo $gold; ?></span></td>
		</tr>
	</tfoot>
<?php } ?>

<?php function enemy($type, $total) { ?>

	<?php if ($type == "armed-skeleton") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">36/36</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">36 <img src="images/inventory/great-axe.gif"> (62)</td>
			<td class="defense">33</td>
			<td class="agility">32</td>
			<td class="move">5</td>
			<td class="level">40</td>
			<td class="id">38</td>
			<td class="gold">2120</td>
		</tr>
	<?php } ?>

	<?php if ($type == "armed-skeleton-2") { // same as armed skeleton 1 but equipped with Atlas Axe?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/armed-skeleton.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">36/36</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">36 <img src="images/inventory/atlas-axe.gif"> (69)</td>
			<td class="defense">33</td>
			<td class="agility">32</td>
			<td class="move">5</td>
			<td class="level">40</td>
			<td class="id">38</td>
			<td class="gold">2120</td>
		</tr>
	<?php } ?>

	<?php if ($type == "artillery") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">24</td>
			<td class="defense">15</td>
			<td class="agility">14</td>
			<td class="move">4</td>
			<td class="level">16</td>
			<td class="id">29</td>
			<td class="gold">450</td>
		</tr>
	<?php } ?>

	<?php if ($type == "artillery-2") { // higher effective level ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/artillery.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">24</td>
			<td class="defense">15</td>
			<td class="agility">14</td>
			<td class="move">4</td>
			<td class="level">18</td>
			<td class="id">40</td>
			<td class="gold">450</td>
		</tr>
	<?php } ?>

	<?php if ($type == "artillery-3") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/artillery.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">24</td>
			<td class="defense">15</td>
			<td class="agility">14</td>
			<td class="move">4</td>
			<td class="level">14</td>
			<td class="id">46</td>
			<td class="gold">180</td>
		</tr>
	<?php } ?>

	<?php if ($type == "balbazak") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">65/65</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">18 <img src="images/inventory/steel-sword.gif"> (34)</td>
			<td class="defense">18</td>
			<td class="agility">20</td>
			<td class="move">5</td>
			<td class="level">25</td>
			<td class="id">53</td>
			<td class="gold">520</td>
		</tr>
	<?php } ?>

	<?php if ($type == "belial") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">21/21</td>
			<td class="mp">35/35</td>
			<td class="spells"><img src="images/inventory/bolt.gif"> Lvl. 1</td>
			<td class="attack">26</td>
			<td class="defense">20</td>
			<td class="agility">22</td>
			<td class="move">6</td>
			<td class="level">23</td>
			<td class="id">16</td>
			<td class="gold">680</td>
		</tr>
	<?php } ?>

	<?php if ($type == "blue-dragon") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">50/50</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">63</td>
			<td class="defense">32</td>
			<td class="agility">42</td>
			<td class="move">5</td>
			<td class="level">50</td>
			<td class="id">43</td>
			<td class="gold">2500</td>
		</tr>
	<?php } ?>

	<?php if ($type == "bowrider") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">18/18</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">13 <img src="images/inventory/assault-shell.gif"> (40)</td>
			<td class="defense">11</td>
			<td class="agility">14</td>
			<td class="move">7</td>
			<td class="level">17</td>
			<td class="id">1</td>
			<td class="gold">900</td>
		</tr>
	<?php } ?>

	<?php if ($type == "cerberus") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">27/27</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">42</td>
			<td class="defense">26</td>
			<td class="agility">38</td>
			<td class="move">7</td>
			<td class="level">35</td>
			<td class="id">13</td>
			<td class="gold">1700</td>
		</tr>
	<?php } ?>

	<?php if ($type == "chaos") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">65/65</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">50</td>
			<td class="defense">35</td>
			<td class="agility">32</td>
			<td class="move">6</td>
			<td class="level">40</td>
			<td class="id">55</td>
			<td class="gold">2000</td>
		</tr>
	<?php } ?>

	<?php if ($type == "chimaera") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">56/56</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">65</td>
			<td class="defense">30</td>
			<td class="agility">40</td>
			<td class="move">6</td>
			<td class="level">40</td>
			<td class="id">41</td>
			<td class="gold">2300</td>
		</tr>
	<?php } ?>

	<?php if ($type == "chimaera-2") { // higher Effective Level only? ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/chimaera.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">56/56</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">65</td>
			<td class="defense">30</td>
			<td class="agility">40</td>
			<td class="move">6</td>
			<td class="level">45</td>
			<td class="id">70</td>
			<td class="gold">2300</td>
		</tr>
	<?php } ?>

	<?php if ($type == "colossus") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/colossus.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">65/65</td>
			<td class="mp">100/100</td>
			<td class="spells"><img src="images/inventory/bolt.gif"> Lvl. 3</td>
			<td class="attack">50</td>
			<td class="defense">40</td>
			<td class="agility">37</td>
			<td class="move">4</td>
			<td class="level">99</td>
			<td class="id">58</td>
			<td class="gold">2500</td>
		</tr>
	<?php } ?>

	<?php if ($type == "colossus-2") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/colossus.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">65/65</td>
			<td class="mp">100/100</td>
			<td class="spells"><img src="images/inventory/freeze.gif"> Lvl. 3</td>
			<td class="attack">50</td>
			<td class="defense">40</td>
			<td class="agility">37</td>
			<td class="move">4</td>
			<td class="level">99</td>
			<td class="id">60</td>
			<td class="gold">0</td>
		</tr>
	<?php } ?>

	<?php if ($type == "colossus-3") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/colossus.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">65/65</td>
			<td class="mp">100/100</td>
			<td class="spells"><img src="images/inventory/blaze.gif"> Lvl. 3</td>
			<td class="attack">50</td>
			<td class="defense">40</td>
			<td class="agility">37</td>
			<td class="move">4</td>
			<td class="level">99</td>
			<td class="id">61</td>
			<td class="gold">0</td>
		</tr>
	<?php } ?>

	<?php if ($type == "conch") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">21/21</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">20</td>
			<td class="defense">15</td>
			<td class="agility">16</td>
			<td class="move">6</td>
			<td class="level">15</td>
			<td class="id">44</td>
			<td class="gold">230</td>
		</tr>
	<?php } ?>

	<?php if ($type == "dark-dragon") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">280/280</td>
			<td class="mp">100/100</td>
			<td class="spells">-</td>
			<td class="attack">65</td>
			<td class="defense">40</td>
			<td class="agility">60</td>
			<td class="move">0</td>
			<td class="level">99</td>
			<td class="id">59</td>
			<td class="gold">0</td>
		</tr>
	<?php } ?>

	<?php if ($type == "dark-dragon-2") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/dark-dragon.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">240/240</td>
			<td class="mp">100/100</td>
			<td class="spells">-</td>
			<td class="attack">67</td>
			<td class="defense">40</td>
			<td class="agility">52</td>
			<td class="move">0</td>
			<td class="level">99</td>
			<td class="id">72</td>
			<td class="gold">0</td>
		</tr>
	<?php } ?>

	<?php if ($type == "dark-dwarf") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">12/12</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">5 <img src="images/inventory/hand-axe.gif"> (12)</td>
			<td class="defense">8</td>
			<td class="agility">5</td>
			<td class="move">4</td>
			<td class="level">4</td>
			<td class="id">5</td>
			<td class="gold">25</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-elf") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">16/16</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">13 <img src="images/inventory/steel-arrow.gif"> (26)</td>
			<td class="defense">9</td>
			<td class="agility">10</td>
			<td class="move">6</td>
			<td class="level">10</td>
			<td class="id">8</td>
			<td class="gold">160</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-mage") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">26/26</td>
			<td class="spells"><img src="images/inventory/blaze.gif"> Lvl. 2</td>
			<td class="attack">7 <img src="images/inventory/wooden-staff.gif"> (11)</td>
			<td class="defense">8</td>
			<td class="agility">12</td>
			<td class="move">5</td>
			<td class="level">9</td>
			<td class="id">10</td>
			<td class="gold">170</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-mage-2") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/dark-mage.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">13/13</td>
			<td class="mp">26/26</td>
			<td class="spells"><img src="images/inventory/blaze.gif"> Lvl. 2</td>
			<td class="attack">6 <img src="images/inventory/wooden-staff.gif"> (10)</td>
			<td class="defense">6</td>
			<td class="agility">9</td>
			<td class="move">5</td>
			<td class="level">5</td>
			<td class="id">21</td>
			<td class="gold">92</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-mage-3") { // doesn't appear in any battles? ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/dark-mage.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">13/13</td>
			<td class="mp">26/26</td>
			<td class="spells"><img src="images/inventory/blaze.gif"> Lvl. 2</td>
			<td class="attack">6 <img src="images/inventory/wooden-staff.gif"> (10)</td>
			<td class="defense">6</td>
			<td class="agility">9</td>
			<td class="move">5</td>
			<td class="level">8</td>
			<td class="id">62</td>
			<td class="gold">120</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-mage-4") { // ??? ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/dark-mage.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">32/32</td>
			<td class="spells"><img src="images/inventory/blaze.gif"> Lvl. 2</td>
			<td class="attack">7 <img src="images/inventory/wooden-staff.gif"> (11)</td>
			<td class="defense">13</td>
			<td class="agility">26</td>
			<td class="move">5</td>
			<td class="level">21</td>
			<td class="id">67</td>
			<td class="gold">850</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-priest") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">16/16</td>
			<td class="mp">25/25</td>
			<td class="spells"><img src="images/inventory/heal.gif"> Lvl. 1</td>
			<td class="attack">9 <img src="images/inventory/power-staff.gif"> (21)</td>
			<td class="defense">9 <img src="images/inventory/shield-ring.gif"></td>
			<td class="agility">10</td>
			<td class="move">5</td>
			<td class="level">9</td>
			<td class="id">11</td>
			<td class="gold">125</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-priest-2") { // like 1 but comes with shield ring equipped ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/dark-priest.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">16/16</td>
			<td class="mp">25/25</td>
			<td class="spells"><img src="images/inventory/heal.gif"> Lvl. 1</td>
			<td class="attack">9 <img src="images/inventory/power-staff.gif"> (21)</td>
			<td class="defense">9 <img src="images/inventory/shield-ring.gif"></td>
			<td class="agility">10</td>
			<td class="move">5</td>
			<td class="level">9</td>
			<td class="id">11</td>
			<td class="gold">125</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dark-priest-3") { // doesn't appear? ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/dark-priest.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">25/25</td>
			<td class="spells"><img src="images/inventory/heal.gif"> Lvl. 1</td>
			<td class="attack">9 <img src="images/inventory/power-staff.gif"> (21)</td>
			<td class="defense">8</td>
			<td class="agility">11</td>
			<td class="move">5</td>
			<td class="level">12</td>
			<td class="id">19</td>
			<td class="gold">140</td>
	</tr>
	<?php } ?>

	<?php if ($type == "darksol") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">150/150</td>
			<td class="mp">100/100</td>
			<td class="spells">-</td>
			<td class="attack">40</td>
			<td class="defense">35</td>
			<td class="agility">54</td>
			<td class="move">6</td>
			<td class="level">99</td>
			<td class="id">50</td>
			<td class="gold">0</td>
		</tr>
	<?php } ?>

	<?php if ($type == "demon-master") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">27/27</td>
			<td class="mp">46/46</td>
			<td class="spells"><img src="images/inventory/freeze.gif"> Lvl. 3</td>
			<td class="attack">17 <img src="images/inventory/holy-staff.gif"> (43)</td>
			<td class="defense">24</td>
			<td class="agility">45</td>
			<td class="move">6</td>
			<td class="level">21</td>
			<td class="id">23</td>
			<td class="gold">1520</td>
	</tr>
	<?php } ?>

	<?php if ($type == "demon-master-2") { // investigate! ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/demon-master.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">27/27</td>
			<td class="mp">46/46</td>
			<td class="spells"><img src="images/inventory/freeze.gif"> Lvl. 3</td>
			<td class="attack">17 <img src="images/inventory/demon-rod.gif"> (52)</td>
			<td class="defense">24</td>
			<td class="agility">50</td>
			<td class="move">6</td>
			<td class="level">31</td>
			<td class="id">37</td>
			<td class="gold">1850</td>
	</tr>
	<?php } ?>

	<?php if ($type == "demon-master-3") { // same as demon master 2 but with muddle 3 spell ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/demon-master.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">27/27</td>
			<td class="mp">46/46</td>
			<td class="spells"><img src="images/inventory/muddle.gif"> Lvl. 3</td>
			<td class="attack">17 <img src="images/inventory/demon-rod.gif"> (52)</td>
			<td class="defense">24</td>
			<td class="agility">50</td>
			<td class="move">6</td>
			<td class="level">31</td>
			<td class="id">37</td>
			<td class="gold">1850</td>
	</tr>
	<?php } ?>

	<?php if ($type == "dire-clown") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">18</td>
			<td class="defense">11</td>
			<td class="agility">7</td>
			<td class="move">5</td>
			<td class="level">8</td>
			<td class="id">32</td>
			<td class="gold">130</td>
		</tr>
	<?php } ?>

	<?php if ($type == "durahan") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">19 <img src="images/inventory/broad-sword.gif"> (39)</td>
			<td class="defense">28</td>
			<td class="agility">13</td>
			<td class="move">5</td>
			<td class="level">21</td>
			<td class="id">4</td>
			<td class="gold">700</td>
	</tr>
	<?php } ?>

	<?php if ($type == "durahan-2") { // note the Shield Ring ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/durahan.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">19 <img src="images/inventory/broad-sword.gif"> (39)</td>
			<td class="defense">28 <img src="images/inventory/shield-ring.gif"></td>
			<td class="agility">13</td>
			<td class="move">5</td>
			<td class="level">21</td>
			<td class="id">33</td>
			<td class="gold">700</td>
	</tr>
	<?php } ?>

	<?php if ($type == "durahan-3") { // same as durahan 2 but with shield ring AND doom blade equipped, appears in Battle 22 (editor: 21) ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/durahan.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">19 <img src="images/inventory/doom-blade.gif"> (39)</td>
			<td class="defense">28 <img src="images/inventory/shield-ring.gif"></td>
			<td class="agility">13</td>
			<td class="move">5</td>
			<td class="level">21</td>
			<td class="id">33</td>
			<td class="gold">700</td>
	</tr>
	<?php } ?>

	<?php if ($type == "durahan-4") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">19 <img src="images/inventory/broad-sword.gif"> (39)</td>
			<td class="defense">28</td>
			<td class="agility">13</td>
			<td class="move">5</td>
			<td class="level">20</td>
			<td class="id">68</td>
			<td class="gold">750</td>
	</tr>
	<?php } ?>

	<?php if ($type == "elliot") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">60/60</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">20 <img src="images/inventory/long-sword.gif"> (32)</td>
			<td class="defense">17</td>
			<td class="agility">16</td>
			<td class="move">5</td>
			<td class="level">20</td>
			<td class="id">52</td>
			<td class="gold">450</td>
		</tr>
	<?php } ?>

	<?php if ($type == "evil-puppet") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">15/15</td>
			<td class="spells"><img src="images/inventory/freeze.gif"> Lvl. 1</td>
			<td class="attack">14</td>
			<td class="defense">10</td>
			<td class="agility">7</td>
			<td class="move">5</td>
			<td class="level">7</td>
			<td class="id">31</td>
			<td class="gold">100</td>
		</tr>
	<?php } ?>

	<?php if ($type == "evil-puppet-2") { // the Evil Puppet guarding Balbazak ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/evil-puppet.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">15/15</td>
			<td class="spells"><img src="images/inventory/heal.gif"> Lvl. 1</td>
			<td class="attack">14 <img src="images/inventory/power-staff.gif"> (26)</td>
			<td class="defense">10 <img src="images/inventory/shield-ring.gif"> (14)</td>
			<td class="agility">7</td>
			<td class="move">5</td>
			<td class="level">7</td>
			<td class="id">31</td>
			<td class="gold">100</td>
		</tr>
	<?php } ?>

	<?php if ($type == "gargoyle") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">18/18</td>
			<td class="mp">20/20</td>
			<td class="spells"><img src="images/inventory/muddle.gif"> Lvl. 1</td>
			<td class="attack">26</td>
			<td class="defense">15</td>
			<td class="agility">20</td>
			<td class="move">6</td>
			<td class="level">18</td>
			<td class="id">15</td>
			<td class="gold">440</td>
		</tr>
	<?php } ?>

	<?php if ($type == "ghoul") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">25/25</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">23</td>
			<td class="defense">14</td>
			<td class="agility">9</td>
			<td class="move">6</td>
			<td class="level">15</td>
			<td class="id">65</td>
			<td class="gold">200</td>
		</tr>
	<?php } ?>

	<?php if ($type == "giant-bat") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">11</td>
			<td class="defense">6</td>
			<td class="agility">9</td>
			<td class="move">7</td>
			<td class="level">5</td>
			<td class="id">24</td>
			<td class="gold">60</td>
		</tr>
	<?php } ?>

	<?php if ($type == "goblin") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">12/12</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">4 <img src="images/inventory/short-sword.gif"> (9)</td>
			<td class="defense">6</td>
			<td class="agility">5</td>
			<td class="move">5</td>
			<td class="level">3</td>
			<td class="id">0</td>
			<td class="gold">12</td>
		</tr>
	<?php } ?>

	<?php if ($type == "golem") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">17/17</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">28</td>
			<td class="defense">28</td>
			<td class="agility">16</td>
			<td class="move">4</td>
			<td class="level">20</td>
			<td class="id">17</td>
			<td class="gold">380</td>
		</tr>
	<?php } ?>

	<?php if ($type == "hellhound") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">19/19</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">10</td>
			<td class="defense">13</td>
			<td class="agility">13</td>
			<td class="move">7</td>
			<td class="level">16</td>
			<td class="id">14</td>
			<td class="gold">200</td>
		</tr>
	<?php } ?>

	<?php if ($type == "high-priest") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">20/20</td>
			<td class="mp">33/33</td>
			<td class="spells"><img src="images/inventory/heal.gif"> Lvl. 4</td>
			<td class="attack">13 <img src="images/inventory/holy-staff.gif"> (39)</td>
			<td class="defense">14</td>
			<td class="agility">13</td>
			<td class="move">6</td>
			<td class="level">19</td>
			<td class="id">12</td>
			<td class="gold">750</td>
	</tr>
	<?php } ?>

	<?php if ($type == "high-priest-2") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/high-priest.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">20/20</td>
			<td class="mp">33/33</td>
			<td class="spells"><img src="images/inventory/heal.gif"> Lvl. 4</td>
			<td class="attack">13 <img src="images/inventory/holy-staff.gif"> (39)</td>
			<td class="defense">14</td>
			<td class="agility">13</td>
			<td class="move">7</td>
			<td class="level">22</td>
			<td class="id">35</td>
			<td class="gold">1340</td>
	</tr>
	<?php } ?>

	<?php if ($type == "horseman") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">12/12</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">18 <img src="images/inventory/buster-shot.gif"> (53)</td>
			<td class="defense">16</td>
			<td class="agility">17</td>
			<td class="move">7</td>
			<td class="level">30</td>
			<td class="id">6</td>
			<td class="gold">1550</td>
		</tr>
	<?php } ?>

	<?php if ($type == "ice-worm") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">30/30</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">40</td>
			<td class="defense">25</td>
			<td class="agility">26</td>
			<td class="move">5</td>
			<td class="level">25</td>
			<td class="id">27</td>
			<td class="gold">1030</td>
		</tr>
	<?php } ?>

	<?php if ($type == "jet") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">28/28</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">45</td>
			<td class="defense">32</td>
			<td class="agility">33</td>
			<td class="move">7</td>
			<td class="level">40</td>
			<td class="id">49</td>
			<td class="gold">1430</td>
		</tr>
	<?php } ?>

	<?php if ($type == "kane") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">18/18</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">25 <img src="images/inventory/sword-of-darkness.gif"> (65) <img src="images/inventory/broad-sword.gif"></td>
			<td class="defense">30</td>
			<td class="agility">29</td>
			<td class="move">6</td>
			<td class="level">25</td>
			<td class="id">57</td>
			<td class="gold">1200</td>
		</tr>
	<?php } ?>

	<?php if ($type == "laser-eye") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">30/30</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">14</td>
			<td class="defense">19</td>
			<td class="agility">27</td>
			<td class="move">0</td>
			<td class="level">22</td>
			<td class="id">51</td>
			<td class="gold">350</td>
		</tr>
	<?php } ?>

	<?php if ($type == "lizardman") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">20/20</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">13 <img src="images/inventory/middle-axe.gif"> (24)</td>
			<td class="defense">12</td>
			<td class="agility">12</td>
			<td class="move">6</td>
			<td class="level">11</td>
			<td class="id">9</td>
			<td class="gold">150</td>
		</tr>
	<?php } ?>

	<?php if ($type == "mannequin") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">16/16</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">16</td>
			<td class="defense">10</td>
			<td class="agility">8</td>
			<td class="move">5</td>
			<td class="level">8</td>
			<td class="id">30</td>
			<td class="gold">125</td>
		</tr>
	<?php } ?>

	<?php if ($type == "marionette") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">16/16</td>
			<td class="mp">100/100</td>
			<td class="spells"><img src="images/inventory/freeze.gif"> Lvl. 3</td>
			<td class="attack">25</td>
			<td class="defense">13</td>
			<td class="agility">13</td>
			<td class="move">6</td>
			<td class="level">12</td>
			<td class="id">36</td>
			<td class="gold">200</td>
		</tr>
	<?php } ?>

	<?php if ($type == "master-mage") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">32/32</td>
			<td class="spells"><img src="images/inventory/freeze.gif"> Lvl. 2</td>
			<td class="attack">7 <img src="images/inventory/holy-staff.gif"> (33)</td>
			<td class="defense">13</td>
			<td class="agility">26</td>
			<td class="move">5</td>
			<td class="level">18</td>
			<td class="id">22</td>
			<td class="gold">850</td>
	</tr>
	<?php } ?>

	<?php if ($type == "minotaur") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">31/31</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">46</td>
			<td class="defense">30</td>
			<td class="agility">31</td>
			<td class="move">5</td>
			<td class="level">32</td>
			<td class="id">28</td>
			<td class="gold">1500</td>
		</tr>
	<?php } ?>

	<?php if ($type == "minotaur-2") { // different Class only? maybe a different special? looks to be unused... ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/minotaur.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">31/31</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">46</td>
			<td class="defense">30</td>
			<td class="agility">31</td>
			<td class="move">5</td>
			<td class="level">32</td>
			<td class="id">69</td>
			<td class="gold">1500</td>
		</tr>
	<?php } ?>

	<?php if ($type == "mishaela") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">65/65</td>
			<td class="mp">100/100</td>
			<td class="spells"><img src="images/inventory/bolt.gif"> Lvl. 2</td>
			<td class="attack">42</td>
			<td class="defense">30</td>
			<td class="agility">35</td>
			<td class="move">6</td>
			<td class="level">30</td>
			<td class="id">54</td>
			<td class="gold">1500</td>
		</tr>
	<?php } ?>

	<?php if ($type == "pegasus-knight") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">18/18</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">12 <img src="images/inventory/bronze-lance.gif"> (21)</td>
			<td class="defense">16</td>
			<td class="agility">12</td>
			<td class="move">7</td>
			<td class="level">14</td>
			<td class="id">39</td>
			<td class="gold">180</td>
		</tr>
	<?php } ?>

	<?php if ($type == "pegasus-knight-2") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/pegasus-knight.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">18/18</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">12 <img src="images/inventory/bronze-lance.gif"> (21)</td>
			<td class="defense">11</td>
			<td class="agility">12</td>
			<td class="move">7</td>
			<td class="level">17</td>
			<td class="id">66</td>
			<td class="gold">250</td>
		</tr>
	<?php } ?>

	<?php if ($type == "ramladu") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">99/99</td>
			<td class="mp">100/100</td>
			<td class="spells"><img src="images/inventory/aura.gif"> Lvl. 3</td>
			<td class="attack">67 <img src="images/inventory/holy-staff.gif"> (93)</td>
			<td class="defense">40</td>
			<td class="agility">49</td>
			<td class="move">6</td>
			<td class="level">60</td>
			<td class="id">56</td>
			<td class="gold">3000</td>
		</tr>
	<?php } ?>

	<?php if ($type == "rune-knight") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">7 <img src="images/inventory/bronze-lance.gif"> (16)</td>
			<td class="defense">7</td>
			<td class="agility">7</td>
			<td class="move">7</td>
			<td class="level">5</td>
			<td class="id">2</td>
			<td class="gold">45</td>
		</tr>
	<?php } ?>

	<?php if ($type == "seabat") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">22/22</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">20</td>
			<td class="defense">14</td>
			<td class="agility">14</td>
			<td class="move">7</td>
			<td class="level">17</td>
			<td class="id">25</td>
			<td class="gold">350</td>
		</tr>
	<?php } ?>

	<?php if ($type == "shellfish") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">25/25</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">23</td>
			<td class="defense">16</td>
			<td class="agility">23</td>
			<td class="move">6</td>
			<td class="level">17</td>
			<td class="id">45</td>
			<td class="gold">270</td>
		</tr>
	<?php } ?>

	<?php if ($type == "silver-knight") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">14/14</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">9 <img src="images/inventory/bronze-lance.gif"> (18)</td>
			<td class="defense">12</td>
			<td class="agility">11</td>
			<td class="move">7</td>
			<td class="level">12</td>
			<td class="id">3</td>
			<td class="gold">75</td>
		</tr>
	<?php } ?>

	<?php if ($type == "skeleton") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">13 <img src="images/inventory/middle-sword.gif"> (21)</td>
			<td class="defense">16</td>
			<td class="agility">7</td>
			<td class="move">6</td>
			<td class="level">9</td>
			<td class="id">34</td>
			<td class="gold">140</td>
		</tr>
	<?php } ?>

	<?php if ($type == "skeleton-2") { // only appears in the Cavern of Darkness? ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/skeleton.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">13 <img src="images/inventory/middle-sword.gif"> (21)</td>
			<td class="defense">16</td>
			<td class="agility">7</td>
			<td class="move">6</td>
			<td class="level">12</td>
			<td class="id">64</td>
			<td class="gold">160</td>
		</tr>
	<?php } ?>

	<?php if ($type == "skeleton-3") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/skeleton.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">13 <img src="images/inventory/middle-sword.gif"> (21)</td>
			<td class="defense">16</td>
			<td class="agility">7</td>
			<td class="move">6</td>
			<td class="level">17</td>
			<td class="id">71</td>
			<td class="gold">320</td>
		</tr>
	<?php } ?>

	<?php if ($type == "sniper") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">13/13</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">7 <img src="images/inventory/wooden-arrow.gif"> (15)</td>
			<td class="defense">5</td>
			<td class="agility">7</td>
			<td class="move">5</td>
			<td class="level">6</td>
			<td class="id">7</td>
			<td class="gold">80</td>
		</tr>
	<?php } ?>

	<?php if ($type == "steel-claw") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">25/25</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">43</td>
			<td class="defense">31</td>
			<td class="agility">31</td>
			<td class="move">5</td>
			<td class="level">40</td>
			<td class="id">47</td>
			<td class="gold">1220</td>
		</tr>
	<?php } ?>

	<?php if ($type == "torch-eye") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">25/25</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">42</td>
			<td class="defense">32</td>
			<td class="agility">27</td>
			<td class="move">6</td>
			<td class="level">40</td>
			<td class="id">48</td>
			<td class="gold">1350</td>
		</tr>
	<?php } ?>

	<?php if ($type == "worm") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">17/17</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">20</td>
			<td class="defense">16</td>
			<td class="agility">16</td>
			<td class="move">4</td>
			<td class="level">17</td>
			<td class="id">26</td>
			<td class="gold">400</td>
		</tr>
	<?php } ?>

	<?php if ($type == "wyvern") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">32/32</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">39</td>
			<td class="defense">30</td>
			<td class="agility">31</td>
			<td class="move">7</td>
			<td class="level">27</td>
			<td class="id">42</td>
			<td class="gold">1350</td>
		</tr>
	<?php } ?>

	<?php if ($type == "zombie") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/<?php echo $type; ?>.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">18</td>
			<td class="defense">13</td>
			<td class="agility">7</td>
			<td class="move">5</td>
			<td class="level">7</td>
			<td class="id">20</td>
			<td class="gold">100</td>
		</tr>
	<?php } ?>

	<?php if ($type == "zombie-2") { ?>
		<tr>
			<td><figure class="map-sprite"><img src="images/sprites/zombie.gif"></figure> x<?php echo $total; ?></td>
			<td class="hp">15/15</td>
			<td class="mp">-</td>
			<td class="spells">-</td>
			<td class="attack">18</td>
			<td class="defense">13</td>
			<td class="agility">7</td>
			<td class="move">5</td>
			<td class="level">10</td>
			<td class="id">63</td>
			<td class="gold">140</td>
		</tr>
	<?php } ?>

<?php } ?>

<article id="tools">

	<nav id="page-navigation">
		<ul class="sidebar-menu" id="tabs-menu">
			<li><div data-tab="#tab-battles"><figure class="map-sprite"><img src="images/sprites/goblin.gif"></figure><cite></cite></div></li>
		</ul>
	</nav>

	<div class="col2">

		<article class="tab" id="battles">

			<div class="table-container">
				<table class="battles fancy-table type-2">
					<?php thead($number=1); ?>
					<tbody>
						<?php enemy($type="goblin", $total=5); ?>
						<?php enemy($type="dark-dwarf", $total=2); ?>
						<?php enemy($type="rune-knight", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="155"); ?>
					<?php thead($number=2); ?>
					<tbody>
						<?php enemy($type="goblin", $total=6); ?>
						<?php enemy($type="dark-dwarf", $total=3); ?>
						<?php enemy($type="rune-knight", $total=2); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="237"); ?>
					<?php thead($number=3); ?>
					<tbody>
						<?php enemy($type="dark-dwarf", $total=5); ?>
						<?php enemy($type="giant-bat", $total=5); ?>
						<?php enemy($type="rune-knight", $total=5); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="650"); ?>
					<?php thead($number=4); ?>
					<tbody>
						<?php enemy($type="dark-dwarf", $total=4); ?>
						<?php enemy($type="giant-bat", $total=4); ?>
						<?php enemy($type="rune-knight", $total=4); ?>
						<?php enemy($type="sniper", $total=2); ?>
						<?php enemy($type="dark-mage-2", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="692"); ?>
					<?php thead($number=5); ?>
					<tbody>
						<?php enemy($type="dark-dwarf", $total=3); ?>
						<?php enemy($type="giant-bat", $total=4); ?>
						<?php enemy($type="sniper", $total=2); ?>
						<?php enemy($type="zombie", $total=4); ?>
						<?php enemy($type="dark-mage-2", $total=2); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="991"); ?>
					<?php thead($number=6); ?>
					<tbody>
						<?php enemy($type="giant-bat", $total=5); ?>
						<?php enemy($type="sniper", $total=2); ?>
						<?php enemy($type="zombie", $total=3); ?>
						<?php enemy($type="dark-mage-2", $total=4); ?>
						<?php enemy($type="skeleton-3", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="1,448"); ?>
					<?php thead($number=7); ?>
					<tbody>
						<?php enemy($type="giant-bat", $total=3); ?>
						<?php enemy($type="mannequin", $total=3); ?>
						<?php enemy($type="evil-puppet", $total=3); ?>
						<?php enemy($type="dire-clown", $total=2); ?>
						<?php enemy($type="marionette", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="1,315"); ?>
					<?php thead($number=8); ?>
					<tbody>
						<?php enemy($type="zombie", $total=6); ?>
						<?php enemy($type="skeleton", $total=3); ?>
						<?php enemy($type="ghoul", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="1,220"); ?>
					<?php thead($number=9); ?>
					<tbody>
						<?php enemy($type="dark-mage", $total=2); ?>
						<?php enemy($type="dark-priest", $total=4); ?>
						<?php enemy($type="skeleton", $total=5); ?>
						<?php enemy($type="dark-elf", $total=2); ?>
						<?php enemy($type="lizardman", $total=1); ?>
						<?php enemy($type="master-mage", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="2,860"); ?>
					<?php thead($number=10); ?>
					<tbody>
						<?php enemy($type="dark-priest", $total=2); ?>
						<?php enemy($type="skeleton", $total=5); ?>
						<?php enemy($type="dark-elf", $total=2); ?>
						<?php enemy($type="lizardman", $total=2); ?>
						<?php enemy($type="pegasus-knight", $total=4); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="2,290"); ?>
					<?php thead($number=11); ?>
					<tbody>
						<?php enemy($type="dark-priest", $total=2); ?>
						<?php enemy($type="dark-elf", $total=3); ?>
						<?php enemy($type="lizardman", $total=5); ?>
						<?php enemy($type="pegasus-knight", $total=3); ?>
						<?php enemy($type="silver-knight", $total=2); ?>
						<?php enemy($type="laser-eye", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="2,170"); ?>
					<?php thead($number=12); ?>
					<tbody>
						<?php enemy($type="dark-priest", $total=3); ?>
						<?php enemy($type="lizardman", $total=5); ?>
						<?php enemy($type="pegasus-knight", $total=4); ?>
						<?php enemy($type="silver-knight", $total=4); ?>
						<?php enemy($type="artillery-3", $total=1); ?>
						<?php enemy($type="elliot", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="2,775"); ?>
					<?php thead($number=13); ?>
					<tbody>
						<?php enemy($type="dark-priest", $total=3); ?>
						<?php enemy($type="pegasus-knight", $total=3); ?>
						<?php enemy($type="silver-knight", $total=6); ?>
						<?php enemy($type="artillery-3", $total=1); ?>
						<?php enemy($type="hellhound", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="1,745"); ?>
					<?php thead($number=14); ?>
					<tbody>
						<?php enemy($type="dark-priest", $total=1); ?>
						<?php enemy($type="silver-knight", $total=3); ?>
						<?php enemy($type="artillery-3", $total=3); ?>
						<?php enemy($type="seabat", $total=5); ?>
						<?php enemy($type="evil-puppet-2", $total=5); ?>
						<?php enemy($type="hellhound", $total=2); ?>
						<?php enemy($type="balbazak", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="3,520"); ?>
					<?php thead($number=15); ?>
					<tbody>
						<?php enemy($type="pegasus-knight", $total=3); ?>
						<?php enemy($type="seabat", $total=4); ?>
						<?php enemy($type="conch", $total=3); ?>
						<?php enemy($type="shellfish", $total=2); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="3,170"); ?>
					<?php thead($number=16); ?>
					<tbody>
						<?php enemy($type="skeleton-3", $total=5); ?>
						<?php enemy($type="seabat", $total=4); ?>
						<?php enemy($type="worm", $total=3); ?>
						<?php enemy($type="hellhound", $total=5); ?>
						<?php enemy($type="master-mage", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="6,050"); ?>
					<?php thead($number=17); ?>
					<tbody>
						<?php enemy($type="pegasus-knight", $total=2); ?>
						<?php enemy($type="seabat", $total=3); ?>
						<?php enemy($type="conch", $total=3); ?>
						<?php enemy($type="shellfish", $total=4); ?>
						<?php enemy($type="gargoyle", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="3,620"); ?>
					<?php thead($number=18); ?>
					<tbody>
						<?php enemy($type="artilery-2", $total=5); ?>
						<?php enemy($type="master-mage", $total=4); ?>
						<?php enemy($type="worm", $total=3); ?>
						<?php enemy($type="golem", $total=5); ?>
						<?php enemy($type="high-priest", $total=1); ?>
						<?php enemy($type="durahan", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="7,950"); ?>
					<?php thead($number=19); ?>
					<tbody>
						<?php enemy($type="gargoyle", $total=3); ?>
						<?php enemy($type="golem", $total=4); ?>
						<?php enemy($type="master-mage", $total=3); ?>
						<?php enemy($type="high-priest", $total=2); ?>
						<?php enemy($type="durahan", $total=2); ?>
						<?php enemy($type="kane", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="9,490"); ?>
					<?php thead($number=20); ?>
					<tbody>
						<?php enemy($type="gargoyle", $total=3); ?>
						<?php enemy($type="golem", $total=4); ?>
						<?php enemy($type="master-mage", $total=4); ?>
						<?php enemy($type="high-priest", $total=2); ?>
						<?php enemy($type="bowrider", $total=2); ?>
						<?php enemy($type="belial", $total=3); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="11,580"); ?>
					<?php thead($number=21); ?>
					<tbody>
						<?php enemy($type="gargoyle", $total=3); ?>
						<?php enemy($type="bowrider", $total=3); ?>
						<?php enemy($type="master-mage", $total=4); ?>
						<?php enemy($type="high-priest", $total=1); ?>
						<?php enemy($type="durahan-2", $total=2); ?>
						<?php enemy($type="belial", $total=3); ?>
						<?php enemy($type="mishaela", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="13,110"); ?>
					<?php thead($number=22); ?>
					<tbody>
						<?php enemy($type="durahan-2", $total=3); ?>
						<?php enemy($type="durahan-3", $total=1); ?>
						<?php enemy($type="belial", $total=2); ?>
						<?php enemy($type="jet", $total=2); ?>
						<?php enemy($type="torch-eye", $total=2); ?>
						<?php enemy($type="wyvern", $total=2); ?>
						<?php enemy($type="minotaur", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="13,920"); ?>
					<?php thead($number=23); ?>
					<tbody>
						<?php enemy($type="ice-worm", $total=5); ?>
						<?php enemy($type="jet", $total=3); ?>
						<?php enemy($type="torch-eye", $total=3); ?>
						<?php enemy($type="steel-claw", $total=4); ?>
						<?php enemy($type="wyvern", $total=2); ?>
						<?php enemy($type="demon-master-2", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="22,920"); ?>
					<?php thead($number=24); ?>
					<tbody>
						<?php enemy($type="ice-worm", $total=4); ?>
						<?php enemy($type="jet", $total=2); ?>
						<?php enemy($type="torch-eye", $total=4); ?>
						<?php enemy($type="demon-master-2", $total=2); ?>
						<?php enemy($type="demon-master-3", $total=1); ?>
						<?php enemy($type="minotaur", $total=2); ?>
						<?php enemy($type="chaos", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="22,930"); ?>
					<?php thead($number=25); ?>
					<tbody>
						<?php enemy($type="demon-master", $total=2); ?>
						<?php enemy($type="high-priest-2", $total=1); ?>
						<?php enemy($type="minotaur", $total=3); ?>
						<?php enemy($type="horseman", $total=3); ?>
						<?php enemy($type="hellhound", $total=4); ?>
						<?php enemy($type="armed-skeleton", $total=5); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="22,810"); ?>
					<?php thead($number=26); ?>
					<tbody>
						<?php enemy($type="high-priest-2", $total=1); ?>
						<?php enemy($type="horseman", $total=3); ?>
						<?php enemy($type="hellhound", $total=3); ?>
						<?php enemy($type="armed-skeleton", $total=2); ?>
						<?php enemy($type="armed-skeleton-2", $total=1); ?>
						<?php enemy($type="chimaera", $total=5); ?>
						<?php enemy($type="blue-dragon", $total=3); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="31,950"); ?>
					<?php thead($number=27); ?>
					<tbody>
						<?php enemy($type="torch-eye", $total=6); ?>
						<?php enemy($type="steel-claw", $total=6); ?>
						<?php enemy($type="ramladu", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="18,420"); ?>
					<?php thead($number=28); ?>
					<tbody>
						<?php enemy($type="chimaera", $total=6); ?>
						<?php enemy($type="blue-dragon", $total=3); ?>
						<?php enemy($type="jet", $total=3); ?>
						<?php enemy($type="horseman", $total=2); ?>
						<?php enemy($type="armed-skeleton", $total=3); ?>
						<?php enemy($type="colossus", $total=1); ?>
						<?php enemy($type="colossus-2", $total=1); ?>
						<?php enemy($type="colossus-3", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="37,550"); ?>
					<?php thead($number=29); ?>
					<tbody>
						<?php enemy($type="steel-claw", $total=5); ?>
						<?php enemy($type="torch-eye", $total=8); ?>
						<?php enemy($type="high-priest", $total=3); ?>
						<?php enemy($type="blue-dragon", $total=2); ?>
						<?php enemy($type="darksol", $total=1); ?>
					</tbody>
					<?php tfoot($notes="In progress", $gold="24,150"); ?>
					<?php thead($number=30); ?>
					<tbody>
						<?php enemy($type="armed-skeleton", $total=2); ?>
						<?php enemy($type="dark-dragon", $total=1); ?>
						<?php enemy($type="dark-dragon-2", $total=2); ?>
					</tbody>
					<?php tfoot($notes="30", $gold="N/A"); ?>
        </table>

      </article>

  </div>

</article>

<?php // require('sidebar.php'); ?>

<?php require('footer.php'); ?>
