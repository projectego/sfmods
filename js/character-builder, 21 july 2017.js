$(document).ready(function(){
	
	$(".show-mp-input").click(function(){
		$('.mp-input').removeClass('hidden');
	});
	$(".hide-mp-input").click(function(){
		$('.mp-input').addClass('hidden');
	});
	
});

$(function() {
	
	$("#generate").click(function() {

		// Convert BASE stat values to variables
		var agility_input = parseInt($("input[name=agility-input]:checked").val());
		var attack_input = parseInt($("input[name=attack-input]:checked").val());
		var critical_input = parseInt($("input[name=critical-input]:checked").val());
		var defense_input = parseInt($("input[name=defense-input]:checked").val());
		var hp_input = parseInt($("input[name=hp-input]:checked").val());
		var level_input = parseInt($('#level-input option:selected').val());
		var magic_input = parseInt($("input[name=magic-input]:checked").val());
		var move_input = parseInt($("input[name=move-input]:checked").val());
		var mp_input = parseInt($("input[name=mp-input]:checked").val());
		var promoted_input = parseInt($("input[name=promoted-input]:checked").val());
		var weapon_input = parseInt($("input[name=weapon-input]:checked").val());

		// Convert UNPROMOTED stat values to variables
		var u_agility_input = parseInt($("input[name=u-agility-input]:checked").val());
		var u_attack_input = parseInt($("input[name=u-attack-input]:checked").val());
		var u_critical_input = parseInt($("input[name=u-critical-input]:checked").val());
		var u_defense_input = parseInt($("input[name=u-defense-input]:checked").val());
		var u_hp_input = parseInt($("input[name=u-hp-input]:checked").val());
		var u_mp_input = parseInt($("input[name=u-mp-input]:checked").val());

		// Convert UNPROMOTED GROWTH CURVE values to variables
		var u_agility_growth_input = parseInt($("input[name=u-agility-growth-input]:checked").val());
		var u_attack_growth_input = parseInt($("input[name=u-attack-growth-input]:checked").val());
		var u_critical_growth_input = parseInt($("input[name=u-critical-growth-input]:checked").val());
		var u_defense_growth_input = parseInt($("input[name=u-defense-growth-input]:checked").val());
		var u_hp_growth_input = parseInt($("input[name=u-hp-growth-input]:checked").val());
		var u_mp_growth_input = parseInt($("input[name=u-mp-growth-input]:checked").val());

		// Convert PROMOTED stat values to variables
		var p_agility_input = parseInt($("input[name=p-agility-input]:checked").val());
		var p_attack_input = parseInt($("input[name=p-attack-input]:checked").val());
		var p_critical_input = parseInt($("input[name=p-critical-input]:checked").val());
		var p_defense_input = parseInt($("input[name=p-defense-input]:checked").val());
		var p_hp_input = parseInt($("input[name=p-hp-input]:checked").val());
		var p_mp_input = parseInt($("input[name=p-mp-input]:checked").val());
		
		// Convert PROMOTED GROWTH CURVE stat values to variables
		var p_agility_growth_input = parseInt($("input[name=p-agility-growth-input]:checked").val());
		var p_attack_growth_input = parseInt($("input[name=p-attack-growth-input]:checked").val());
		var p_critical_growth_input = parseInt($("input[name=p-critical-growth-input]:checked").val());
		var p_defense_growth_input = parseInt($("input[name=p-defense-growth-input]:checked").val());
		var p_hp_growth_input = parseInt($("input[name=p-hp-growth-input]:checked").val());
		var p_mp_growth_input = parseInt($("input[name=p-mp-growth-input]:checked").val());

		
		// Prepare the OUTPUT valuables
		var agility_output = 0;
		var attack_output = 0;
		var class_output = 0;
		var critical_output = 0;
		var defense_output = 0;
		var hp_output = 0;
		var level_output = 0;
		var magic_output = 0;
		var move_output = 0;
		var mp_output = 0;
		
		var p_agility_output = 0;
		var p_attack_output = 0;
		var p_class_output = 0;
		var p_critical_output = 0;
		var p_defense_output = 0;
		var p_hp_output = 0;
		var p_level_output = 0;
		var p_magic_output = 0;
		var p_move_output = 0;
		var p_mp_output = 0;

		var u_agility_output = 0;
		var u_attack_output = 0;
		var u_class_output = 0;
		var u_critical_output = 0;
		var u_defense_output = 0;
		var u_hp_output = 0;
		var u_level_output = 0;
		var u_magic_output = 0;
		var u_move_output = 0;
		var u_mp_output = 0;
	
		// Prepare the PLACEHOLDER variables
		var placeholder_class = '[???]';
		var placeholder_mp = '0/0';

		// Let's set a base of...?

		// Overpowered
		if (agility_input == 6) {
			agility_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_agility_output = 20 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_agility_output = 48 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Very High
		if (agility_input == 5) {
			agility_output = 7;
			u_agility_output = 18 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_agility_output = 45 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// High
		if (agility_input == 4) {
			agility_output = 6;
			u_agility_output = 16 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_agility_output = 42 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Average
		if (agility_input == 3) {
			agility_output = 5;
			u_agility_output = 15;
			p_agility_output = 39 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Low
		if (agility_input == 2) {
			agility_output = 4;
			u_agility_output = 13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_agility_output = 36 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Very Low
		if (agility_input == 1) {
			agility_output = 4;
			u_agility_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_agility_output = 33 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}

		
		// Overpowered
		if (attack_input == 6) {
			attack_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_attack_output = 21 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_attack_output = 27 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Very High
		if (attack_input == 5) {
			attack_output = 10;
			u_attack_output = 18 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_attack_output = 24 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// High
		if (attack_input == 4) {
			attack_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_attack_output = 15 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_attack_output = 20 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
		}
		// Average
		if (attack_input == 3) {
			attack_output = 6 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_attack_output = 13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_attack_output = 16 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
		}
		// Low
		if (attack_input == 2) {
			attack_output = 5;
			u_attack_output = 10 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_attack_output = 13 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Very Low
		if (attack_input == 1) {
			attack_output = 4;
			u_attack_output = 7 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_attack_output = 10 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}


		// Overpowered
		if (critical_input == 6) {
			critical_output = 4 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_critical_output = 5 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_critical_output = 21 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Very High
		if (critical_input == 5) {
			critical_output = 3;
			u_critical_output = 4;
			p_critical_output = 13 + Math.floor(Math.random() * (7 - 0 + 1)) + 0;
		}
		// High
		if (critical_input == 4) {
			critical_output = 3;
			u_critical_output = 4;
			p_critical_output = 9 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
		}
		// Average
		if (critical_input == 3) {
			critical_output = 3;
			u_critical_output = 3;
			p_critical_output = 6 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Low
		if (critical_input == 2) {
			critical_output = 3;
			u_critical_output = 2;
			p_critical_output = 4 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Very Low
		if (critical_input == 1) {
			critical_output = 3;
			u_critical_output = 2;
			p_critical_output = 2 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}

		
		// Overpowered
		if (defense_input == 6) {
			defense_output = 15 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_defense_output = 23 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_defense_output = 61 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
		}
		// Very High
		if (defense_input == 5) {
			defense_output = 13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_defense_output = 20 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_defense_output = 54 + Math.floor(Math.random() * (6 - 0 + 1)) + 0;
		}
		// High
		if (defense_input == 4) {
			defense_output = 10 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			u_defense_output = 17 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_defense_output = 47 + Math.floor(Math.random() * (6 - 0 + 1)) + 0;
		}
		// Average
		if (defense_input == 3) {
			defense_output = 7 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			u_defense_output = 14 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
			p_defense_output = 40 + Math.floor(Math.random() * (6 - 0 + 1)) + 0;
		}
		// Low
		if (defense_input == 2) {
			defense_output = 5 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_defense_output = 12 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_defense_output = 33 + Math.floor(Math.random() * (6 - 0 + 1)) + 0;
		}
		// Very Low
		if (defense_input == 1) {
			defense_output = 3;
			u_defense_output = 10 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_defense_output = 27 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
		}

		
		// Overpowered
		if (hp_input == 6) {
			hp_output = 16 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_hp_output = 30 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
			p_hp_output = 59 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
		}
		// Very High
		if (hp_input == 5) {
			hp_output = 15;
			u_hp_output = 26 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
			p_hp_output = 48 + Math.floor(Math.random() * (10 - 0 + 1)) + 0;
		}
		// High
		if (hp_input == 4) {
			hp_output = 13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_hp_output = 22 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
			p_hp_output = 44 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
		}
		// Average
		if (hp_input == 3) {
			hp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_hp_output = 18 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
			p_hp_output = 41 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Low
		if (hp_input == 2) {
			hp_output = 9 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_hp_output = 14 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
			p_hp_output = 38 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Very Low
		if (hp_input == 1) {
			hp_output = 8;
			u_hp_output = 10 + Math.floor(Math.random() * (3 - 0 + 1)) + 0;
			p_hp_output = 35 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}


		if (level_input == 13) { level_output = 10 + Math.floor(Math.random() * (6 - 0 + 1)) + 0; } // Runefaust
		if (level_input == 12) { level_output = 10 + Math.floor(Math.random() * (5 - 0 + 1)) + 0; } // Prompt
		if (level_input == 11) { level_output = 9 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Dragonia
		if (level_input == 10) { level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Rudo
		if (level_input == 9) { level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Waral
		if (level_input == 8) { level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Uranbatol
		if (level_input == 7) { level_output = 8 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; } // Pao
		if (level_input == 6) { level_output = 6 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; } // Bustoke
		if (level_input == 5) { level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Shade Abbey
		if (level_input == 4) { level_output = 3 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Manarina
		if (level_input == 3) { level_output = 2 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; } // Rindo
		if (level_input == 2) { level_output = 2 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Alterone
		if (level_input == 1) { level_output = 1 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; } // Guardiana
		if (level_input == 0) { level_output = 1 } // Immediately


		// If magic user is a little more experienced...
		if (magic_input >= 2) {
			// Overpowered
			if (mp_input == 6) {
				mp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
				u_mp_output = 37 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
				p_mp_output = 48 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// Very High
			if (mp_input == 5) {
				mp_output = 10;
				u_mp_output = 31 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
				p_mp_output = 43 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// High
			if (mp_input == 4) {
				mp_output = 9;
				u_mp_output = 26 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
				p_mp_output = 38 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// Average
			if (mp_input == 3) {
				mp_output = 8;
				u_mp_output = 21 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
				p_mp_output = 32 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
			}
			// Low
			if (mp_input == 2) {
				mp_output = 7;
				u_mp_output = 16 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
				p_mp_output = 27 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// Very Low
			if (mp_input == 1) {
				mp_output = 6;
				u_mp_output = 10 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
				p_mp_output = 22 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
		// If Max or Bowie....
		} else if (magic_input == 1) {
			// Overpowered
			if (mp_input == 6) {
				mp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
				u_mp_output = 37 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
				p_mp_output = 48 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// Very High
			if (mp_input == 5) {
				mp_output = 10;
				u_mp_output = 31 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
				p_mp_output = 43 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// High
			if (mp_input == 4) {
				mp_output = 9;
				u_mp_output = 26 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
				p_mp_output = 38 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// Average
			if (mp_input == 3) {
				mp_output = 8;
				u_mp_output = 21 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
				p_mp_output = 32 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
			}
			// Low
			if (mp_input == 2) {
				mp_output = 7;
				u_mp_output = 16 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
				p_mp_output = 27 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
			// Very Low
			if (mp_input == 1) {
				mp_output = 6;
				u_mp_output = 10 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
				p_mp_output = 22 + Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			}
		// If NO magic...
		} else if (magic_input == 0 ) {
			mp_output = 0;
		}


		// Overpowered
		if (move_input == 6) {
			move_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Very High
		if (move_input == 5) {
			move_output = 7;
		}
		// High
		if (move_input == 4) {
			move_output = 6;
		}
		// Average
		if (move_input == 3) {
			move_output = 5;
		}
		// Low
		if (move_input == 2) {
			move_output = 4;
		}
		// Very Low
		if (move_input == 1) {
			move_output = 4;
		}


		
		


		// Staff
		if (weapon_input == 5) {
			attack_output += 0;
			if (magic_input == 4) {
				$(".class-output").html('[MAGE]');
				$('.top-item img').after(function() {return $(this).attr('src', 'images/items/wooden-staff.gif');});
			} else if (magic_input == 3) {
				$(".class-output").html('[HEAL]');
				$('.top-item img').after(function() {return $(this).attr('src', 'images/items/wooden-staff.gif');});
			} else if (magic_input == 2) {
				$(".class-output").html(placeholder_class);
			}
		}
		// Bow and arrow
		if (weapon_input == 4) {
			attack_output += 0;
			$('.top-item img').after(function() {return $(this).attr('src', 'images/items/wooden-arrow.gif');});
			$(".class-output").html('[ACHR]');
		}
		// Lance or spear
		if (weapon_input == 3) {
			attack_output += 0;
			$('.top-item img').after(function() {return $(this).attr('src', 'images/items/bronze-lance.gif');});
			$(".class-output").html('[KNT]');
		}
		// Axe
		if (weapon_input == 2) {
			attack_output += 0;
			$('.top-item img').after(function() {return $(this).attr('src', 'images/items/hand-axe.gif');});
			$(".class-output").html('[WARR]');
		}
		// Sword
		if (weapon_input == 1) {
			attack_output += 0;
			$('.top-item img').after(function() {return $(this).attr('src', 'images/items/long-sword.gif');});
			$(".class-output").html('[SDMN]');
		}
		// Unarmed
		if (weapon_input == 0) {
			attack_output += 5 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			u_attack_output += 17 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			p_attack_output += 26 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			$('.top-item img').after(function() {return $(this).attr('src', 'images/items/medical-herb.gif');});
			$(".class-output").html('[???]');
			if (magic_input >= 1) {
				$(".class-output").html('[MGCR]');
			}
		}


		// Let's set a base of...?
		//var p_agility_output = 4 + agility_input;
		//var p_attack_output = 4 + attack_input;
		//var p_critical_output = 999 + critical_input;
		//var p_defense_output = 4 + defense_input;
		//var p_hp_output = 8 + hp_input;
		//var p_move_output = 8 + hp_input;
		//var p_mp_output = 999 + hp_input;

		// Let's set a base of...?
		//var u_agility_output = 4 + agility_input;
		//var u_attack_output = 4 + attack_input;
		//var u_critical_output = 999 + critical_input;
		//var u_defense_output = 4 + defense_input;
		//var u_hp_output = 8 + hp_input;
		//var u_move_output = 8 + hp_input;
		//var u_mp_output = 999 + hp_input;
		
		// Not everybody is a spellcaster, so for those that aren't they should acquire any MP whatsoever
		// var learn_magic_level = 5;

		
		$(".agility-output").html(agility_output);
		$(".p-agility-output").html(p_agility_output);
		$(".u-agility-output").html(u_agility_output);

		
		$(".attack-output").html(attack_output);
		$(".p-attack-output").html(p_attack_output);
		$(".u-attack-output").html(u_attack_output);

		$(".critical-output").html(critical_output+"%");
		$(".p-critical-output").html(p_critical_output+"%");
		$(".u-critical-output").html(u_critical_output+"%");

		$(".defense-output").html(defense_output);
		$(".p-defense-output").html(p_defense_output);
		$(".u-defense-output").html(u_defense_output);

		$(".hp-output").html(hp_output+"/"+hp_output);
		$(".p-hp-output").html(p_hp_output+"/"+p_hp_output);
		$(".u-hp-output").html(u_hp_output+"/"+u_hp_output);

		$(".level-output").html(level_output);

		$(".move-output").html(move_output);
		$(".p-move-output").html(p_move_output);
		$(".u-move-output").html(u_move_output);

		$(".mp-output").html(mp_output+"/"+mp_output);
		$(".p-mp-output").html(p_mp_output+"/"+p_mp_output);
		$(".u-mp-output").html(u_mp_output+"/"+u_mp_output);

		$(".u-agility-growth-output").after(function() {return $(this).attr("src", "images/chart-" + u_agility_growth_input + ".gif");});
		$(".u-attack-growth-output").after(function() {return $(this).attr("src", "images/chart-" + u_attack_growth_input + ".gif");});
		$(".u-critical-growth-output").after(function() {return $(this).attr("src", "images/chart-" + u_critical_growth_input + ".gif");});
		$(".u-defense-growth-output").after(function() {return $(this).attr("src", "images/chart-" + u_defense_growth_input + ".gif");});
		$(".u-hp-growth-output").after(function() {return $(this).attr("src", "images/chart-" + u_hp_growth_input + ".gif");});
		$(".u-mp-growth-output").after(function() {return $(this).attr("src", "images/chart-" + u_mp_growth_input + ".gif");});


		$(".p-agility-growth-output").after(function() {return $(this).attr("src", "images/chart-" + p_agility_growth_input + ".gif");});
		$(".p-attack-growth-output").after(function() {return $(this).attr("src", "images/chart-" + p_attack_growth_input + ".gif");});
		$(".p-critical-growth-output").after(function() {return $(this).attr("src", "images/chart-" + p_critical_growth_input + ".gif");});
		$(".p-defense-growth-output").after(function() {return $(this).attr("src", "images/chart-" + p_defense_growth_input + ".gif");});
		$(".p-hp-growth-output").after(function() {return $(this).attr("src", "images/chart-" + p_hp_growth_input + ".gif");});
		$(".p-mp-growth-output").after(function() {return $(this).attr("src", "images/chart-" + p_mp_growth_input + ".gif");});


	});

});
