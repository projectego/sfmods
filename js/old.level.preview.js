
		<article class="tools-tab" id="tab-force-builder">
			
				<h2>Character Generator</h2>

				<div class="quiz">
					<div class="question">
						<header>
							<span>Does your character use a weapon?</span>
							<p>Weapons include swords, spears, staves, axes, etc.</p>
						</header>
						<label><input checked name="weapon-input" type="radio" value="1">Yes</label>
						<label><input name="weapon-input" type="radio" value="2">No</label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's attack power</span>
							<p>This will help us to determine if your character is primarily a fighter.</p>
						</header>
						<label><input name="attack-input" type="radio" value="5">Overpowered</label>
						<label><input name="attack-input" type="radio" value="4">Very high</label>
						<label><input name="attack-input" type="radio" value="3">High</label>
						<label><input checked name="attack-input" type="radio" value="2">Average</label>
						<label><input name="attack-input" type="radio" value="1">Low</label>
						<label><input name="attack-input" type="radio" value="0">Very low <span>o hello thar how r u doing</span></label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's magic abilities</span>
							<p>This will help determine how to balance your character's defense value</p>
						</header>
						<label><input name="mp-input" type="radio" value="5">Overpowered</label>
						<label><input name="mp-input" type="radio" value="4">Very high</label>
						<label><input name="mp-input" type="radio" value="3">High</label>
						<label><input name="mp-input" type="radio" value="2">Average</label>
						<label><input name="mp-input" type="radio" value="1">Low</label>
						<label><input checked name="mp-input" type="radio" value="0">None</label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's defense</span>
							<p>This will help determine how to balance your character's defense value</p>
						</header>
						<label><input name="defense-input" type="radio" value="4">Overpowered</label>
						<label><input name="defense-input" type="radio" value="3">Very high</label>
						<label><input name="defense-input" type="radio" value="2">High</label>
						<label><input checked name="defense-input" type="radio" value="1">Average</label>
						<label><input name="defense-input" type="radio" value="0">Low</label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's agility</span>
							<p>Agility helps to determine whether a character will get a 'turn' before or after other Force members. Higher agility equates to quicker turn priority.</p>
						</header>
						<label><input name="agility-input" type="radio" value="4">Overpowered</label>
						<label><input name="agility-input" type="radio" value="3">Very high</label>
						<label><input name="agility-input" type="radio" value="2">High</label>
						<label><input checked name="agility-input" type="radio" value="1">Average</label>
						<label><input name="agility-input" type="radio" value="0">Low</label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's movement properties</span>
							<p>This will help determine how to balance your character's Attack value</p>
						</header>
						<label><input name="move-input" type="radio" value="8">Overpowered</label>
						<label><input name="move-input" type="radio" value="7">High</label>
						<label><input checked name="move-input" type="radio" value="5">Average</label>
						<label><input name="move-input" type="radio" value="4">Low</label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's critical hit chances</span>
							<p>This determines how likely a critical hit will occur.</p>
						</header>
						<label><input name="critical-input" type="radio" value="8">Overpowered</label>
						<label><input name="critical-input" type="radio" value="6">Very high</label>
						<label><input name="critical-input" type="radio" value="4">High</label>
						<label><input checked name="critical-input" type="radio" value="3">Average</label>
						<label><input name="critical-input" type="radio" value="2">Underpowered</label>
					</div>
					<div class="question">
						<header>
							<span>Rate your character's <abbr title="Health Points">HP</abbr> properties</span>
							<p>This will help determine how to balance your character's Attack value</p>
						</header>
						<label><input name="hp-input" type="radio" value="5">Overpowered</label>
						<label><input name="hp-input" type="radio" value="4">Very high</label>
						<label><input name="hp-input" type="radio" value="3">High</label>
						<label><input checked name="hp-input" type="radio" value="2">Average</label>
						<label><input name="hp-input" type="radio" value="1">Low</label>
						<label><input name="hp-input" type="radio" value="0">Very low</label>
					</div>
					<div class="question">
						<header>
							<span>What level does your character join the Force?</span>
						</header>
						<label><input class="level-input" max="99" maxlength="2" min="1" oninput="this.value=this.value.slice(0,this.maxLength)" type="number" value="1"></label>
						<label><input name="promoted-input" type="checkbox" value="-10">Promoted</label>
					</div>
				</div>
				
				<input class="button character-generator-button" id="generate" type="button" value="Generate Character!">

				<fieldset class="tab-character-gen">
					<legend>Statistics</legend>
					<dl>
						<dt>Attack</dt> <dd><span class="attack-output">0</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-attack-growth">0</span></dd>
						<dt>Defense</dt> <dd><span class="defense-output">0</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-defense-growth">0</span></dd>
						<dt>Agility</dt> <dd><span class="agility-output">0</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-agility-growth">0</span></dd>
						<dt>Move</dt> <dd><span class="move-output">0</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-move-growth">0</span></dd>
						<dt>Critical Rate</dt> <dd><span class="critical-output">0%</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-critical-growth">0</span></dd>
						<dt>Health Points</dt> <dd><span class="hp-output">0/0</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-hp-growth">0</span></dd>
						<dt>Magic Points</dt> <dd><span class="mp-output">0/0</span> <img class="random-chart" src="images/content/chart-1.gif"><span class="random-mp-growth">0</span></dd>
					</dl>
				</fieldset>
			
			
			<!--
<input class="input-value" max="99" maxlength="2" min="1" oninput="this.value=this.value.slice(0,this.maxLength)" placeholder="1" type="number">
<input class="output-value" type="text" readonly>
-->

		</article>




$(function() {
	
	$("#generate").click(function() {

		var agility_input = parseInt($("input[name=agility-input]:checked").val());
		var attack_input = parseInt($("input[name=attack-input]:checked").val());
		var critical_input = parseInt($("input[name=critical-input]:checked").val());
		var defense_input = parseInt($("input[name=defense-input]:checked").val());
		var hp_input = parseInt($("input[name=hp-input]:checked").val());
		var level_input = parseInt($(".level-input").val());
		var move_input = parseInt($("input[name=move-input]:checked").val());
		var mp_input = parseInt($("input[name=mp-input]:checked").val());
		var promoted_input = parseInt($("input[name=promoted-input]:checked").val());
		var weapon_input = parseInt($("input[name=weapon-input]:checked").val());

	

		// MOVE #2 x2; #5 x12; #6 x4; #7 x11
		var calculate_move = move_input + Math.floor(Math.random() * (1 - 0 + 1)) + 0;

		// 3% is the lowest AND most frequent recurring value. Domingo = 4%; Hanzou = 5%; Musashi = 7%
		// Math.floor(Math.random() * (max - min + 1)) + min;
		var calculate_critical = critical_input + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
	


			// Let's set a base of...?
			var agility_value = 4 + agility_input;

			// Let's set a base of...?
			var attack_value = 4 + attack_input;
			
			// Let's set a base of...?
			var defense_value = 4 + defense_input;
			
			// Seems the maximum HP reward is 7?
			var hp_value = 8 + hp_input;
			
			// Not everybody is a spellcaster, so for those that aren't they should acquire any MP whatsoever
			var learn_magic_level = 5;
			var mp_value = 0;
			if (mp_input >= 2) {
				var mp_value = 6 + mp_input;
			} else if (mp_input == 1) {
				mp_value -= learn_magic_level;
			}
			
			var agility_list = new Array(level_input);
			var attack_list = new Array(level_input);
			var defense_list = new Array(level_input);
			var hp_list = new Array(level_input);
			var mp_list = new Array(level_input);

			for (var i=0; i < level_input; i++) {
				
				// For Level #1, don't add any additional stat bonuses
				if (i == 0) {

				} else {

					agility_list[i] = (Math.floor(Math.random() * (1 - 0 + 1)) + 0) + (Math.floor(Math.random() * (agility_input - 0 + 1)) + 0);
					agility_value += agility_list[i];
				
					attack_list[i] = (Math.floor(Math.random() * (1 - 0 + 1)) + 0) + (Math.floor(Math.random() * (attack_input - 0 + 1)) + 0);
					attack_value += attack_list[i];
				
					defense_list[i] = (Math.floor(Math.random() * (1 - 0 + 1)) + 0) + (Math.floor(Math.random() * (defense_input - 0 + 1)) + 0);
					defense_value += defense_list[i];
				
					hp_list[i] = (Math.floor(Math.random() * (1 - 0 + 1)) + 0) + (Math.floor(Math.random() * (hp_input - 0 + 1)) + 0);
					hp_value += hp_list[i];
				
					// If the user is a novice amateur user and is under level...
					if (mp_input >= 2) {
						mp_list[i] = (Math.floor(Math.random() * (1 - 0 + 1)) + 0) + (Math.floor(Math.random() * (mp_input - 0 + 1)) + 0);
						mp_value += mp_list[i];
					} else if (mp_input == 1 && level_input >= 5) {
						mp_list[i] = (Math.floor(Math.random() * (1 - 0 + 1)) + 0) + (Math.floor(Math.random() * (mp_input - 0 + 1)) + 0);
						mp_value += mp_list[i];
					}
					
				}
				
			}
		

		
		$(".agility-output").html(agility_value);

		
		$(".attack-output").html(attack_value);

		if (critical_input >= 4) {
			$(".critical-output").html(calculate_critical+"%");
		} else {
			$(".critical-output").html(critical_input+"%");
		}

		$(".defense-output").html(defense_value);

		$(".hp-output").html(hp_value+"/"+hp_value);

		if (!isNaN(level_input)) {
			$(".level-output").html(level_input);
		} else {
			$(".level-output").html("0");
		}

		if (move_input == 5) {
			$(".move-output").html(calculate_move);
		} else {
			$(".move-output").html(move_input);
		}

		// Let's magic sure that the magic value is not displayed in the minuses...
		mp_value = Math.max(0, mp_value);
		$(".mp-output").html(mp_value+"/"+mp_value);

	});

});
