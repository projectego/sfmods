$(document).ready(function(){

	/***********************************
	PRESETS
	***********************************/

    $("#preset-bowie").click(function(){
        $(".bowie").prop("checked", true);
        $(".bowie").prop("selected", true);
		$('.mp-input').removeClass('hidden');
    });

    $("#preset-max").click(function(){
        $(".max").prop("checked", true);
        $(".max").prop("selected", true);
		$('.mp-input').removeClass('hidden');
    });



		/*
	$(".show-mp-input").click(function(){
		$('.mp-input').removeClass('hidden');
	});
	$(".hide-mp-input").click(function(){
		$('.mp-input').addClass('hidden');
	});
	*/
	
	/*
	$('input#magic:checkbox').change(function(){
		if($(this).is(":checked")) {
			$('.mp-input').removeClass("hidden");
		} else {
			$('.mp-input').addClass("hidden");
		}
	});
	*/

	$("#magic-input").change(function(){
		if($(this).val() >= "1") {
		   $('.mp-input').removeClass('hidden');
		} else {
		   $('.mp-input').addClass('hidden');
		}
	});


    $("#character-compare").click(function(){
		$('.max-stats').toggleClass('hidden');
    });

});

$(function() {
	
	$("#generate").click(function() {
		
		$(".show-after-generate").fadeIn();

		// Convert BASE stat values to variables
		var agility_input = parseInt($("#agility-input option:selected").val());
		var attack_input = parseInt($("#attack-input option:selected").val());
		var critical_input = parseInt($("#critical-input option:selected").val());
		var defense_input = parseInt($("#defense-input option:selected").val());
		var hp_input = parseInt($("#hp-input option:selected").val());
		var level_input = parseInt($('#level-input option:selected').val());
	//	var magic_input = parseInt($("input[id=magic-input]:checked").val());
		var magic_input = parseInt($("#magic-input option:selected").val());
		var move_input = parseInt($("#move-input option:selected").val());
		var mp_input = parseInt($("#mp-input option:selected").val());
		var promoted_input = parseInt($("input[name=promoted-input]:checked").val());
		var weapon_input = parseInt($("input[name=weapon-input]:checked").val());

		// Convert UNPROMOTED stat values to variables
		var u_agility_input = parseInt($("#u-agility-input option:selected").val());
		var u_attack_input = parseInt($("#u-attack-input option:selected").val());
		var u_critical_input = parseInt($("#u-critical-input option:selected").val());
		var u_defense_input = parseInt($("#u-defense-input option:selected").val());
		var u_hp_input = parseInt($("#u-hp-input option:selected").val());
		var u_mp_input = parseInt($("#u-mp-input option:selected").val());

		// Convert UNPROMOTED GROWTH CURVE values to variables
		var u_agility_growth_input = parseInt($("input[name=u-agility-growth-input]:checked").val());
		var u_attack_growth_input = parseInt($("input[name=u-attack-growth-input]:checked").val());
		var u_critical_growth_input = parseInt($("input[name=u-critical-growth-input]:checked").val());
		var u_defense_growth_input = parseInt($("input[name=u-defense-growth-input]:checked").val());
		var u_hp_growth_input = parseInt($("input[name=u-hp-growth-input]:checked").val());
		var u_mp_growth_input = parseInt($("input[name=u-mp-growth-input]:checked").val());

		// Convert PROMOTED stat values to variables
		var p_agility_input = parseInt($("#p-agility-input option:selected").val());
		var p_attack_input = parseInt($("#p-attack-input option:selected").val());
		var p_critical_input = parseInt($("#p-critical-input option:selected").val());
		var p_defense_input = parseInt($("#p-defense-input option:selected").val());
		var p_hp_input = parseInt($("#p-hp-input option:selected").val());
		var p_mp_input = parseInt($("#p-mp-input option:selected").val());
		
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
		
		// Prepare the PROMOTED OUTPUT valuables
		var p_agility_output = 0;
		var p_attack_output = 0;
		var p_class_output = 0;
		var p_critical_output = 0;
		var p_defense_output = 0;
		var p_hp_output = 0;
		var p_level_output = 0;
		var p_mp_output = 0;

		// Prepare the UNPROMOTED OUTPUT valuables
		var u_agility_output = 0;
		var u_attack_output = 0;
		var u_class_output = 0;
		var u_critical_output = 0;
		var u_defense_output = 0;
		var u_hp_output = 0;
		var u_level_output = 0;
		var u_mp_output = 0;
	
		// Prepare the PLACEHOLDER variables
		var placeholder_class = '[????]';
		var placeholder_mp = '0/0';
		var spell_output = "";

		// Prepare the spell learn levels
		var learn_spell_1_1 = 1;
		var learn_spell_1_2 = '-';
		var learn_spell_1_3 = '-';
		var learn_spell_1_4 = '-';
		var learn_spell_2_1 = '-';
		var learn_spell_2_2 = '-';
		var learn_spell_2_3 = '-';
		var learn_spell_2_4 = '-';
		var learn_spell_3_1 = '-';
		var learn_spell_3_2 = '-';
		var learn_spell_3_3 = '-';
		var learn_spell_3_4 = '-';
		var learn_spell_4_1 = '-';
		var learn_spell_4_2 = '-';
		var learn_spell_4_3 = '-';
		var learn_spell_4_4 = '-';
		var learn_offset = 0;

		/*************************
		BASE AGILITY
		*************************/

		// Overpowered
		if (agility_input == 6) { agility_output = (8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very High
		if (agility_input == 5) { agility_output = (7); }
		// High
		if (agility_input == 4) { agility_output = (6); }
		// Average
		if (agility_input == 3) { agility_output = (5); }
		// Low
		if (agility_input == 2) { agility_output = (4); }
		// Very Low
		if (agility_input == 1) { agility_output = (4); }

		/*************************
		UNPROMOTED AGILITY
		*************************/

		// Overpowered
		if (u_agility_input == 6) { u_agility_output = (20 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very High
		if (u_agility_input == 5) { u_agility_output = (18 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// High
		if (u_agility_input == 4) { u_agility_output = (16 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Average
		if (u_agility_input == 3) { u_agility_output = (15); }
		// Low
		if (u_agility_input == 2) { u_agility_output = (13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very Low
		if (u_agility_input == 1) { u_agility_output = (11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }

		/*************************
		PROMOTED AGILITY
		*************************/

		// Overpowered
		if (p_agility_input == 6) { p_agility_output = (48 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Very High
		if (p_agility_input == 5) { p_agility_output = (45 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// High
		if (p_agility_input == 4) { p_agility_output = (42 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Average
		if (p_agility_input == 3) { p_agility_output = (39 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Low
		if (p_agility_input == 2) { p_agility_output = (36 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Very Low
		if (p_agility_input == 1) { p_agility_output = (33 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }

		/*************************
		BASE ATTACK
		*************************/
		
		// Overpowered
		if (attack_input == 6) {
			if (weapon_input == 0) {
				attack_output = (15 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				attack_output = (11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			}
		}
		// Very High
		if (attack_input == 5) {
			if (weapon_input == 0) {
				attack_output = (14);
			} else {
				attack_output = (10);
			}
		}
		// High
		if (attack_input == 4) {
			if (weapon_input == 0) {
				attack_output = (13);
			} else {
				attack_output = (8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			}
		}
		// Average
		if (attack_input == 3) {
			if (weapon_input == 0) {
				attack_output = (12);
			} else {
				attack_output = (6 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			}
		}
		// Low
		if (attack_input == 2) {
			if (weapon_input == 0) {
				attack_output = (11);
			} else {
				attack_output = (5);
			}
		}
		// Very Low
		if (attack_input == 1) {
			if (weapon_input == 0) {
				attack_output = (11);
			} else {
				attack_output = (4);
			}
		}

		/*************************
		UNPROMOTED ATTACK
		*************************/
		
		// Overpowered
		if (u_attack_input == 6) {
			if (weapon_input == 0) {
				u_attack_output = (36 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				u_attack_output = (21 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			}
		}
		// Very High
		if (u_attack_input == 5) {
			if (weapon_input == 0) {
				u_attack_output = (34 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				u_attack_output = (18 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}
		// High
		if (u_attack_input == 4) {
			if (weapon_input == 0) {
				u_attack_output = (32 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				u_attack_output = (15 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}
		// Average
		if (u_attack_input == 3) {
			if (weapon_input == 0) {
				u_attack_output = (29 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			} else {
				u_attack_output = (13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			}
		}
		// Low
		if (u_attack_input == 2) {
			if (weapon_input == 0) {
				u_attack_output = (27 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				u_attack_output = (10 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}
		// Very Low
		if (u_attack_input == 1) {
			if (weapon_input == 0) {
				u_attack_output = (25 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				u_attack_output = (7 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}

		/*************************
		PROMOTED ATTACK
		*************************/
		
		// Overpowered
		if (p_attack_input == 6) {
			if (weapon_input == 0) {
				p_attack_output = (47 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				p_attack_output = (27 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}
		// Very High
		if (p_attack_input == 5) {
			if (weapon_input == 0) {
				p_attack_output = (45 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				p_attack_output = (24 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}
		// High
		if (p_attack_input == 4) {
			if (weapon_input == 0) {
				p_attack_output = (43 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				p_attack_output = (20 + Math.floor(Math.random() * (3 - 0 + 1)) + 0);
			}
		}
		// Average
		if (p_attack_input == 3) {
			if (weapon_input == 0) {
				p_attack_output = (41 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				p_attack_output = (16 + Math.floor(Math.random() * (3 - 0 + 1)) + 0);
			}
		}
		// Low
		if (p_attack_input == 2) {
			if (weapon_input == 0) {
				p_attack_output = (39 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				p_attack_output = (13 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}
		// Very Low
		if (p_attack_input == 1) {
			if (weapon_input == 0) {
				p_attack_output = (37 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
			} else {
				p_attack_output = (10 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
			}
		}

		/*************************
		BASE CRITICAL
		*************************/

		// Overpowered
		if (critical_input == 6) { critical_output = (4 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Average
		if (critical_input == 3) { critical_output = (3); }
		// Underpowered
		if (critical_input == 0) { critical_output = (1 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }

		/*************************
		UNPROMOTED CRITICAL
		*************************/
		
		// Overpowered
		if (u_critical_input == 6) { u_critical_output = (5 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very High
		if (u_critical_input == 5) { u_critical_output = (4); }
		// High
		if (u_critical_input == 4) { u_critical_output = (4); }
		// Average
		if (u_critical_input == 3) { u_critical_output = (3); }
		// Low
		if (u_critical_input == 2) { u_critical_output = (2); }
		// Very Low
		if (u_critical_input == 1) { u_critical_output = (2); }


		/*************************
		PROMOTED CRITICAL
		*************************/
		
		// Overpowered
		if (p_critical_input == 6) { p_critical_output = 21 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }
		// Very High
		if (p_critical_input == 5) { p_critical_output = 13 + Math.floor(Math.random() * (7 - 0 + 1)) + 0;
		}
		// High
		if (p_critical_input == 4) { p_critical_output = 9 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Average
		if (p_critical_input == 3) { p_critical_output = 6 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }
		// Low
		if (p_critical_input == 2) { p_critical_output = 4 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Very Low
		if (p_critical_input == 1) { p_critical_output = 2 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }

		/*************************
		BASE DEFENSE
		*************************/
		
		// Overpowered
		if (defense_input == 6) { defense_output = 15 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Very High
		if (defense_input == 5) { defense_output = 13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// High
		if (defense_input == 4) { defense_output = 10 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }
		// Average
		if (defense_input == 3) { defense_output = 7 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }
		// Low
		if (defense_input == 2) { defense_output = (5 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very Low
		if (defense_input == 1) { (defense_output = 3); }
	
		/*************************
		UNPROMOTED DEFENSE
		*************************/
	
		// Overpowered
		if (u_defense_input == 6) { u_defense_output = (23 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very High
		if (u_defense_input == 5) { u_defense_output = (20 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// High
		if (u_defense_input == 4) { u_defense_output = (17 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Average
		if (u_defense_input == 3) { u_defense_output = (14 + Math.floor(Math.random() * (2 - 0 + 1)) + 0); }
		// Low
		if (u_defense_input == 2) { u_defense_output = (12 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
		// Very Low
		if (u_defense_input == 1) { u_defense_output = (10 + Math.floor(Math.random() * (1 - 0 + 1)) + 0); }
	

		/*************************
		PROMOTED DEFENSE
		*************************/
	
		// Overpowered
		if (p_defense_input == 6) { p_defense_output = (61 + Math.floor(Math.random() * (4 - 0 + 1)) + 0); }
		// Very High
		if (p_defense_input == 5) { p_defense_output = (54 + Math.floor(Math.random() * (6 - 0 + 1)) + 0); }
		// High
		if (p_defense_input == 4) { p_defense_output = (47 + Math.floor(Math.random() * (6 - 0 + 1)) + 0); }
		// Average
		if (p_defense_input == 3) { p_defense_output = (40 + Math.floor(Math.random() * (6 - 0 + 1)) + 0); }
		// Low
		if (p_defense_input == 2) { p_defense_output = (33 + Math.floor(Math.random() * (6 - 0 + 1)) + 0); }
		// Very Low
		if (p_defense_input == 1) { p_defense_output = (27 + Math.floor(Math.random() * (5 - 0 + 1)) + 0); }


		/*************************
		BASE HEALTH POINTS
		*************************/

		// Overpowered
		if (hp_input == 6) { hp_output = 16 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Very High
		if (hp_input == 5) { hp_output = 15; }
		// High
		if (hp_input == 4) { hp_output = 13 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Average
		if (hp_input == 3) { hp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Low
		if (hp_input == 2) { hp_output = 9 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Very Low
		if (hp_input == 1) { hp_output = 8; }

		/*************************
		UNPROMOTED HEALTH POINTS
		*************************/
		
		// Overpowered
		if (u_hp_input == 6) { u_hp_output = 30 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Very High
		if (u_hp_input == 5) { u_hp_output = 26 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// High
		if (u_hp_input == 4) { u_hp_output = 22 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Average
		if (u_hp_input == 3) { u_hp_output = 18 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Low
		if (u_hp_input == 2) { u_hp_output = 14 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Very Low
		if (u_hp_input == 1) { u_hp_output = 10 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }

		/*************************
		PROMOTED HEALTH POINTS
		*************************/
		
		// Overpowered
		if (p_hp_input == 6) { p_hp_output = 59 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Very High
		if (p_hp_input == 5) { p_hp_output = 48 + Math.floor(Math.random() * (10 - 0 + 1)) + 0; }
		// High
		if (p_hp_input == 4) { p_hp_output = 44 + Math.floor(Math.random() * (3 - 0 + 1)) + 0; }
		// Average
		if (p_hp_input == 3) { p_hp_output = 41 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }
		// Low
		if (p_hp_input == 2) { p_hp_output = 38 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }
		// Very Low
		if (p_hp_input == 1) { p_hp_output = 35 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; }

		/*************************
		BASE LEVEL
		*************************/

		// Runefaust
		if (level_input == 13) {
			level_output = 10 + Math.floor(Math.random() * (6 - 0 + 1)) + 0;
		}
		// Prompt
		if (level_input == 12) {
			level_output = 10 + Math.floor(Math.random() * (5 - 0 + 1)) + 0;
		}
		// Dragonia
		if (level_input == 11) {
			level_output = 9 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Rudo
		if (level_input == 10) {
			level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Waral
		if (level_input == 9) {
			level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Uranbatol
		if (level_input == 8) {
			level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Pao
		if (level_input == 7) {
			level_output = 8 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Bustoke
		if (level_input == 6) {
			level_output = 6 + Math.floor(Math.random() * (2 - 0 + 1)) + 0; 
		}
		// Shade Abbey
		if (level_input == 5) {
			level_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Manarina
		if (level_input == 4) {
			level_output = 3 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Rindo
		if (level_input == 3) {
			level_output = 2 + Math.floor(Math.random() * (2 - 0 + 1)) + 0;
		}
		// Alterone
		if (level_input == 2) {
			level_output = 2 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Guardiana
		if (level_input == 1) {
			level_output = 1 + Math.floor(Math.random() * (1 - 0 + 1)) + 0;
		}
		// Immediately
		if (level_input == 0) {
			level_output = 1;
		}

		/*************************
		MAGIC TYPES
		*************************/

		// If magic user is a little more experienced...
		if (magic_input >= 3) {
			// Overpowered
			if (mp_input == 6) { mp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (mp_input == 5) { mp_output = 10; }
			// High
			if (mp_input == 4) { mp_output = 9; }
			// Average
			if (mp_input == 3) { mp_output = 8; }
			// Low
			if (mp_input == 2) { mp_output = 7; }
			// Very Low
			if (mp_input == 1) { mp_output = 6; }
			// Overpowered
			if (u_mp_input == 6) { u_mp_output = 37 + Math.floor(Math.random() * (5 - 0 + 1)) + 0; }
			// Very High
			if (u_mp_input == 5) { u_mp_output = 31 + Math.floor(Math.random() * (5 - 0 + 1)) + 0; }
			// High
			if (u_mp_input == 4) { u_mp_output = 26 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// Average
			if (u_mp_input == 3) { u_mp_output = 21 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// Low
			if (u_mp_input == 2) { u_mp_output = 16 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// Very Low
			if (u_mp_input == 1) { u_mp_output = 10 + Math.floor(Math.random() * (5 - 0 + 1)) + 0; }
			// Overpowered
			if (p_mp_input == 6) { p_mp_output = 48 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// Very High
			if (p_mp_input == 5) { p_mp_output = 43 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// High
			if (p_mp_input == 4) { p_mp_output = 38 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// Average
			if (p_mp_input == 3) { p_mp_output = 32 + Math.floor(Math.random() * (5 - 0 + 1)) + 0; }
			// Low
			if (p_mp_input == 2) { p_mp_output = 27 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }
			// Very Low
			if (p_mp_input == 1) { p_mp_output = 22 + Math.floor(Math.random() * (4 - 0 + 1)) + 0; }

			// If magic user is a HEAL/VICR...
			if (magic_input == 3) {	
			
				var spell_1_options = new Array ("heal");
				var spell_1 = spell_1_options[Math.floor(Math.random() * spell_1_options.length)];
				var spell_2_options = new Array ("egress", "bum", "song1.ogg", "song2.ogg");
				var spell_2 = spell_2_options[Math.floor(Math.random() * spell_2_options.length)];

				spell_output = "<tr> <td>1</td> <td>" + spell_1 + "</td> </tr>";
				spell_output += "<tr> <td>oh noyes</td> <td>" + spell_1 + "</td> </tr>";

			// If magic user is a MAGE/WZRD...
			} else if (magic_input == 4) { 

				var spell_1_options = new Array ("blaze", "freeze");
				var spell_1 = spell_1_options[Math.floor(Math.random() * spell_1_options.length)];
				var spell_2_options = new Array ("dispel", "muddle", "sleep", "slow");
				var spell_2 = spell_2_options[Math.floor(Math.random() * spell_2_options.length)];
				var spell_3_options = new Array ("bolt", "desoul");
				var spell_3 = spell_3_options[Math.floor(Math.random() * spell_3_options.length)];
				var spell_4_options = new Array ("boost", "quick", "shield");
				var spell_4 = spell_4_options[Math.floor(Math.random() * spell_4_options.length)];

				if (spell_1 == "blaze") {
					learn_spell_1_2 = (4 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
					learn_spell_1_3 = (12 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
					learn_spell_1_4 = (19 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
				} else if (spell_1 == "freeze") {
					learn_spell_1_2 = (6 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
					learn_spell_1_3 = (15 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
					learn_spell_1_4 = (22 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
				}

				learn_spell_2_1 = learn_spell_1_2 + (3 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
				if (spell_2 == "slow") {
					learn_spell_2_2 = learn_spell_1_3 + (2 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
				}

				if (spell_3 == "bolt") {
					learn_spell_3_1 = learn_spell_1_2 + (12 + Math.floor(Math.random() * (1 - 0 + 1)) + 0);
					learn_spell_3_2 = (5 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
					learn_spell_3_3 = (4 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
					learn_spell_3_4 = (7 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
				} else if (spell_3 == "desoul") {
					learn_spell_3_1 = (25 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
					learn_spell_3_2 = (8 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
				}

				learn_spell_4_1 = (8 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
				if (spell_4 == "quick") {
					learn_spell_4_2 = (5 + Math.floor(Math.random() * (2 - 0 + 1)) + 0);
				}

				spell_output = "<tr> <td><img src='images/inventory/" + spell_1 + ".gif'> " + spell_1 + "</td> <td>" + learn_spell_1_1 + "</td> <td>" + learn_spell_1_2 + "</td> <td>" + learn_spell_1_3 + "</td> <td>" + learn_spell_1_4 + "</td> </tr>";
				spell_output += "<tr> <td><img src='images/inventory/" + spell_2 + ".gif'> " + spell_2 + "</td> <td>" + learn_spell_2_1 + "</td> <td>" + learn_spell_2_2 + "</td> <td>" + learn_spell_2_3 + "</td> <td>" + learn_spell_2_4 + "</td> </tr>";
				spell_output += "<tr> <td><img src='images/inventory/" + spell_3 + ".gif'> " + spell_3 + "</td> <td>" + learn_spell_3_1 + "</td> <td>" + learn_spell_3_2 + "</td> <td>" + learn_spell_3_3 + "</td> <td>" + learn_spell_3_4 + "</td> </tr>";
				spell_output += "<tr> <td><img src='images/inventory/" + spell_4 + ".gif'> " + spell_4 + "</td> <td>" + learn_spell_4_1 + "</td> <td>" + learn_spell_4_2 + "</td> <td>" + learn_spell_4_3 + "</td> <td>" + learn_spell_4_4 + "</td> </tr>";

			}

			$('.top-spell img').after(function() { return $(this).attr("src", "images/inventory/" + spell_1 + ".gif"); });
			$('.left-spell img').after(function() { return $(this).attr("src", "images/inventory/" + spell_2 + ".gif"); });
			$('.right-spell img').after(function() { return $(this).attr("src", "images/inventory/" + spell_3 + ".gif"); });
			$('.bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + spell_4 + ".gif"); });

		// If Bowie...
		} else if (magic_input == 2) {
			// Overpowered
			if (mp_input == 6) { mp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (mp_input == 5) { mp_output = 10; }
			// High
			if (mp_input == 4) { mp_output = 9; }
			// Average
			if (mp_input == 3) { mp_output = 8; }
			// Low
			if (mp_input == 2) { mp_output = 7; }
			// Very Low
			if (mp_input == 1) { mp_output = 6; }
			// Overpowered
			if (u_mp_input == 6) { u_mp_output = 15 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (u_mp_input == 5) { u_mp_output = 14; }
			// High
			if (u_mp_input == 4) { u_mp_output = 13; }
			// Average
			if (u_mp_input == 3) { u_mp_output = 12; }
			// Low
			if (u_mp_input == 2) { u_mp_output = 11; }
			// Very Low
			if (u_mp_input == 1) { u_mp_output = 10 + Math.floor(Math.random() * (5 - 0 + 1)) + 0; }
			// Overpowered
			if (p_mp_input == 6) { p_mp_output = 19 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (p_mp_input == 5) { p_mp_output = 18; }
			// High
			if (p_mp_input == 4) { p_mp_output = 17; }
			// Average
			if (p_mp_input == 3) { p_mp_output = 16; }
			// Low
			if (p_mp_input == 2) { p_mp_output = 15; }
			// Very Low
			if (p_mp_input == 1) { p_mp_output = 14; }
				
			spell_output = "<tr> <td><img src='images/inventory/egress.gif'> Egress</td> <td>1</td> <td>N/A</td> <td>N/A</td> <td>N/A</td> </tr>";
			spell_output += "<tr> <td><img src='images/inventory/bolt.gif'> Bolt</td> <td>22</td> <td>31</td> <td>42</td> <td>51</td> </tr>";

			$('.top-spell img').after(function() { return $(this).attr("src", "images/inventory/egress.gif"); });
			$('.right-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.left-spell img').after(function() { return $(this).attr("src", "images/inventory/bolt.gif"); });
	
		// If Max...
		} else if (magic_input == 1) {
			// Overpowered
			if (mp_input == 6) { mp_output = 11 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (mp_input == 5) { mp_output = 10; }
			// High
			if (mp_input == 4) { mp_output = 9; }
			// Average
			if (mp_input == 3) { mp_output = 8; }
			// Low
			if (mp_input == 2) { mp_output = 7; }
			// Very Low
			if (mp_input == 1) { mp_output = 6; }
			// Overpowered
			if (u_mp_input == 6) { u_mp_output = 7 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (u_mp_input == 5) { u_mp_output = 6; }
			// High
			if (u_mp_input == 4) { u_mp_output = 5; }
			// Average
			if (u_mp_input == 3) { u_mp_output = 4; }
			// Low
			if (u_mp_input == 2) { u_mp_output = 3; }
			// Very Low
			if (u_mp_input == 1) { u_mp_output = 2; }
			// Overpowered
			if (p_mp_input == 6) { p_mp_output = 5 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very High
			if (p_mp_input == 5) { p_mp_output = 4; }
			// High
			if (p_mp_input == 4) { p_mp_output = 3; }
			// Average
			if (p_mp_input == 3) { p_mp_output = 2; }
			// Low
			if (p_mp_input == 2) { p_mp_output = 1 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
			// Very Low
			if (p_mp_input == 1) { p_mp_output = 1; }
			
			spell_output = "<tr> <td><img src='images/inventory/egress.gif'> Egress</td> <td>1</td> <td>N/A</td> <td>N/A</td> <td>N/A</td> </tr>";

			$('.top-spell img').after(function() { return $(this).attr("src", "images/inventory/egress.gif"); });
			$('.right-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.left-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			
		// If NO magic...
		} else if (magic_input == 0 ) {

			mp_output = 0;
			u_mp_output = 0;
			p_mp_output = 0;

			spell_output = "";
			
			$('.top-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.right-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('.left-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });

		}

		// Overpowered
		if (move_input == 6) { move_output = 8 + Math.floor(Math.random() * (1 - 0 + 1)) + 0; }
		// Very High
		if (move_input == 5) { move_output = 7; }
		// High
		if (move_input == 4) { move_output = 6; }
		// Average
		if (move_input == 3) { move_output = 5; }
		// Low
		if (move_input == 2) { move_output = 4; }
		// Very Low
		if (move_input == 1) { move_output = 4; }


		
		


		// Staff
		if (weapon_input == 5) {
			if (level_input >= 4) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/power-staff.gif'); });
			} else {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/wooden-staff.gif'); });
			}
			if (magic_input == 4) {
				$(".class-output").html('[MAGE]');
				$(".p-class-output").html('[WIZD]');
			} else if (magic_input == 3) {
				$(".class-output").html('[HEAL]');
				$(".p-class-output").html('[VICR]');
			}
		}
		// Bow and arrow
		if (weapon_input == 4) {
			if (level_input >= 6) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/steel-arrow.gif'); });
			} else {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/wooden-arrow.gif'); });
			}
			$(".class-output").html('[ACHR]');
			$(".p-class-output").html('[SNIP]');
		}
		// Lance or spear
		if (weapon_input == 3) {
			if (level_input >= 7) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/power-spear.gif'); });
			} else if (level_input >= 1) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/bronze-lance.gif'); });
			} else {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/spear.gif'); });
			}
			$(".class-output").html('[KNT]');
			$(".p-class-output").html('[PLDN]');
		}
		// Axe
		if (weapon_input == 2) {
			if (level_input >= 10) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/battle-axe.gif'); });
			} else if (level_input >= 6) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/middle-axe.gif'); });
			} else {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/hand-axe.gif'); });
			}
			$(".class-output").html('[WARR]');
			$(".p-class-output").html('[GLDR]');
		}
		// Sword
		if (weapon_input == 1) {
			if (level_input >= 8) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/long-sword.gif'); });
			} else if (level_input >= 6) {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/middle-sword.gif'); });
			} else {
				$('.top-item img').after(function() { return $(this).attr('src', 'images/inventory/short-sword.gif'); });
			}

			$(".class-output").html('[SDMN]');
			$(".p-class-output").html('[HERO]');
		}
		// Unarmed
		if (weapon_input == 0) {
			$('.top-item img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
		}


		// Prepare the SUMS
		var u_agility_sum = agility_output + u_agility_output;
		var u_attack_sum = attack_output + u_attack_output;
		var u_critical_sum = critical_output + u_critical_output;
		var u_defense_sum = defense_output + u_defense_output;
		var u_hp_sum = hp_output + u_hp_output;
		var u_mp_sum = mp_output + u_mp_output;
		
		var p_agility_sum = agility_output + p_agility_output;
		var p_attack_sum = attack_output + p_attack_output;
		var p_critical_sum = critical_output + p_critical_output;
		var p_defense_sum = defense_output + p_defense_output;
		var p_hp_sum = hp_output + p_hp_output;
		var p_mp_sum = mp_output + p_mp_output;
		
		
		$(".agility-output").html(agility_output);
		$(".u-agility-output").html(u_agility_output);
		$(".p-agility-output").html(p_agility_output);
		$(".u-agility-sum").html(u_agility_sum);
		$(".p-agility-sum").html(p_agility_sum);
		
		$(".attack-output").html(attack_output);
		$(".u-attack-output").html(u_attack_output);
		$(".p-attack-output").html(p_attack_output);
		$(".u-attack-sum").html(u_attack_sum);
		$(".p-attack-sum").html(p_attack_sum);

		$(".critical-output").html(critical_output+"%");
		$(".u-critical-output").html(u_critical_output+"%");
		$(".p-critical-output").html(p_critical_output+"%");
		$(".u-critical-sum").html(u_critical_sum+"%");
		$(".p-critical-sum").html(p_critical_sum+"%");

		$(".defense-output").html(defense_output);
		$(".u-defense-output").html(u_defense_output);
		$(".p-defense-output").html(p_defense_output);
		$(".u-defense-sum").html(u_defense_sum);
		$(".p-defense-sum").html(p_defense_sum);

		$(".hp-output").html(hp_output + "/" + hp_output);
		$(".u-hp-output").html(u_hp_output);
		$(".p-hp-output").html(p_hp_output);
		$(".u-hp-sum").html(u_hp_sum + "/" + u_hp_sum);
		$(".p-hp-sum").html(p_hp_sum + "/" + p_hp_sum);

		$(".level-output").html(level_output);

		$(".move-output").html(move_output);

		if (spell_output != "") {
			spell_output = "<table class='fancy-table type-2'> <thead> <tr> <td>Spell</td> <td>L1</td> <td>L2</td> <td>L3</td> <td>L4</td> </tr> </thead> <tbody>" + spell_output + "</tbody> </table>"
		}
		$(".spell-output").html(spell_output);

		$(".mp-output").html(mp_output + "/" + mp_output);
		$(".u-mp-output").html(u_mp_output);
		$(".p-mp-output").html(p_mp_output);
		$(".u-mp-sum").html(u_mp_sum + "/" + u_mp_sum);
		$(".p-mp-sum").html(p_mp_sum + "/" + p_mp_sum);

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
