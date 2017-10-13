$(document).ready(function(){

	/***********************************
	PRESETS
	***********************************/

    $("#preset-balbaroy").click(function(){
        $(".balbaroy").prop("checked", true);
        $(".balbaroy").prop("selected", true);
		$('.mp-input').addClass('hidden');
		$('#mp-output').addClass('hidden');
    });

    $("#preset-bowie").click(function(){
        $(".bowie").prop("checked", true);
        $(".bowie").prop("selected", true);
		$('.mp-input').removeClass('hidden');
		$('#mp-output').removeClass('hidden');
    });

    $("#preset-gort").click(function(){
        $(".gort").prop("checked", true);
        $(".gort").prop("selected", true);
		$('.mp-input').addClass('hidden');
		$('#mp-output').addClass('hidden');
    });

    $("#preset-hans").click(function(){
        $(".hans").prop("checked", true);
        $(".hans").prop("selected", true);
		$('.mp-input').addClass('hidden');
		$('#mp-output').addClass('hidden');
    });

    $("#preset-khris").click(function(){
        $(".khris").prop("checked", true);
        $(".khris").prop("selected", true);
		$('.mp-input').removeClass('hidden');
		$('#mp-output').removeClass('hidden');
    });

    $("#preset-mae").click(function(){
        $(".mae").prop("checked", true);
        $(".mae").prop("selected", true);
		$('.mp-input').addClass('hidden');
		$('#mp-output').addClass('hidden');
    });

    $("#preset-max").click(function(){
        $(".max").prop("checked", true);
        $(".max").prop("selected", true);
		$('.mp-input').removeClass('hidden');
		$('#mp-output').removeClass('hidden');
    });

    $("#preset-tao").click(function(){
        $(".tao").prop("checked", true);
        $(".tao").prop("selected", true);
		$('.mp-input').removeClass('hidden');
		$('#mp-output').removeClass('hidden');
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
		   $('#mp-output').removeClass('hidden');
		} else {
		   $('.mp-input').addClass('hidden');
		   $('#mp-output').addClass('hidden');
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
		var random_spell = 0;
		var random_spell_options = 0;
		var spell_set = 0;
		var learn_offset = 0;

		function random_number(min,max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

		/*************************
		BASE AGILITY
		*************************/

		// Overpowered
		if (agility_input == 6) { agility_output = random_number(8,9); }
		// Very High
		if (agility_input == 5) { agility_output = 7; }
		// High
		if (agility_input == 4) { agility_output = 6; }
		// Average
		if (agility_input == 3) { agility_output = 5; }
		// Low
		if (agility_input == 2) { agility_output = 4; }
		// Very Low
		if (agility_input == 1) { agility_output = 4; }

		/*************************
		UNPROMOTED AGILITY
		*************************/

		// Overpowered
		if (u_agility_input == 6) { u_agility_output = random_number(20,21); }
		// Very High
		if (u_agility_input == 5) { u_agility_output = random_number(18,19); }
		// High
		if (u_agility_input == 4) { u_agility_output = random_number(16,17); }
		// Average
		if (u_agility_input == 3) { u_agility_output = 15; }
		// Low
		if (u_agility_input == 2) { u_agility_output = random_number(13,14); }
		// Very Low
		if (u_agility_input == 1) { u_agility_output = random_number(11,12); }

		/*************************
		PROMOTED AGILITY
		*************************/

		// Overpowered
		if (p_agility_input == 6) { p_agility_output = random_number(48,50); }
		// Very High
		if (p_agility_input == 5) { p_agility_output = random_number(45,47); }
		// High
		if (p_agility_input == 4) { p_agility_output = random_number(42,44); }
		// Average
		if (p_agility_input == 3) { p_agility_output = random_number(39,41); }
		// Low
		if (p_agility_input == 2) { p_agility_output = random_number(36,38); }
		// Very Low
		if (p_agility_input == 1) { p_agility_output = random_number(33,35); }

		/*************************
		BASE ATTACK
		*************************/

		// Overpowered
		if (attack_input == 6) {
			if (weapon_input == 0) {
				attack_output = random_number(15,16);
			} else {
				attack_output = random_number(11,12);
			}
		}
		// Very High
		if (attack_input == 5) {
			if (weapon_input == 0) {
				attack_output = 14;
			} else {
				attack_output = 10;
			}
		}
		// High
		if (attack_input == 4) {
			if (weapon_input == 0) {
				attack_output = 13;
			} else {
				attack_output = random_number(8,9);
			}
		}
		// Average
		if (attack_input == 3) {
			if (weapon_input == 0) {
				attack_output = 12;
			} else {
				attack_output = random_number(6,7);
			}
		}
		// Low
		if (attack_input == 2) {
			if (weapon_input == 0) {
				attack_output = 11;
			} else {
				attack_output = 5;
			}
		}
		// Very Low
		if (attack_input == 1) {
			if (weapon_input == 0) {
				attack_output = 11;
			} else {
				attack_output = 4;
			}
		}

		/*************************
		UNPROMOTED ATTACK
		*************************/

		// Overpowered
		if (u_attack_input == 6) {
			if (weapon_input == 0) {
				u_attack_output = random_number(36,37);
			} else {
				u_attack_output = random_number(21,22);
			}
		}
		// Very High
		if (u_attack_input == 5) {
			if (weapon_input == 0) {
				u_attack_output = random_number(35,36);
			} else {
				u_attack_output = random_number(18,20);
			}
		}
		// High
		if (u_attack_input == 4) {
			if (weapon_input == 0) {
				u_attack_output = random_number(32,33);
			} else {
				u_attack_output = random_number(15,17);
			}
		}
		// Average
		if (u_attack_input == 3) {
			if (weapon_input == 0) {
				u_attack_output = random_number(29,31);
			} else {
				u_attack_output = random_number(13,14);
			}
		}
		// Low
		if (u_attack_input == 2) {
			if (weapon_input == 0) {
				u_attack_output = random_number(27,28);
			} else {
				u_attack_output = random_number(10,12);
			}
		}
		// Very Low
		if (u_attack_input == 1) {
			if (weapon_input == 0) {
				u_attack_output = random_number(25,26);
			} else {
				u_attack_output = random_number(7,9);
			}
		}

		/*************************
		PROMOTED ATTACK
		*************************/

		// Overpowered
		if (p_attack_input == 6) {
			if (weapon_input == 0) {
				p_attack_output = random_number(47,48);
			} else {
				p_attack_output = random_number(27,29);
			}
		}
		// Very High
		if (p_attack_input == 5) {
			if (weapon_input == 0) {
				p_attack_output = random_number(45,46);
			} else {
				p_attack_output = random_number(24,26);
			}
		}
		// High
		if (p_attack_input == 4) {
			if (weapon_input == 0) {
				p_attack_output = random_number(43,44);
			} else {
				p_attack_output = random_number(20,23);
			}
		}
		// Average
		if (p_attack_input == 3) {
			if (weapon_input == 0) {
				p_attack_output = random_number(41,42);
			} else {
				p_attack_output = random_number(16,19);
			}
		}
		// Low
		if (p_attack_input == 2) {
			if (weapon_input == 0) {
				p_attack_output = random_number(39,40);
			} else {
				p_attack_output = random_number(13,15);
			}
		}
		// Very Low
		if (p_attack_input == 1) {
			if (weapon_input == 0) {
				p_attack_output = random_number(37,38);
			} else {
				p_attack_output = random_number(10,12);
			}
		}

		/*************************
		BASE CRITICAL
		*************************/

		// Overpowered
		if (critical_input == 6) { critical_output = random_number(4,6); }
		// Average
		if (critical_input == 3) { critical_output = 3; }
		// Underpowered
		if (critical_input == 0) { critical_output = random_number(1,2); }

		/*************************
		UNPROMOTED CRITICAL
		*************************/

		// Overpowered
		if (u_critical_input == 6) { u_critical_output = random_number(5,6); }
		// Very High
		if (u_critical_input == 5) { u_critical_output = 4; }
		// High
		if (u_critical_input == 4) { u_critical_output = 4; }
		// Average
		if (u_critical_input == 3) { u_critical_output = 3; }
		// Low
		if (u_critical_input == 2) { u_critical_output = 2; }
		// Very Low
		if (u_critical_input == 1) { u_critical_output = 2; }


		/*************************
		PROMOTED CRITICAL
		*************************/

		// Overpowered
		if (p_critical_input == 6) { p_critical_output = random_number(21,23); }
		// Very High
		if (p_critical_input == 5) { p_critical_output = random_number(13,20);
		}
		// High
		if (p_critical_input == 4) { p_critical_output = random_number(9,12); }
		// Average
		if (p_critical_input == 3) { p_critical_output = random_number(6,8); }
		// Low
		if (p_critical_input == 2) { p_critical_output = random_number(4,5); }
		// Very Low
		if (p_critical_input == 1) { p_critical_output = random_number(2,3); }

		/*************************
		BASE DEFENSE
		*************************/

		// Overpowered
		if (defense_input == 6) { defense_output = random_number(15,16); }
		// Very High
		if (defense_input == 5) { defense_output = random_number(13,14); }
		// High
		if (defense_input == 4) { defense_output = random_number(10,12); }
		// Average
		if (defense_input == 3) { defense_output = random_number(7,9); }
		// Low
		if (defense_input == 2) { defense_output = random_number(5,6); }
		// Very Low
		if (defense_input == 1) { defense_output = random_number(3,4); }

		/*************************
		UNPROMOTED DEFENSE
		*************************/

		// Overpowered
		if (u_defense_input == 6) { u_defense_output = random_number(23,24); }
		// Very High
		if (u_defense_input == 5) { u_defense_output = random_number(20,22); }
		// High
		if (u_defense_input == 4) { u_defense_output = random_number(17,19); }
		// Average
		if (u_defense_input == 3) { u_defense_output = random_number(14,16); }
		// Low
		if (u_defense_input == 2) { u_defense_output = random_number(12,13); }
		// Very Low
		if (u_defense_input == 1) { u_defense_output = random_number(10,11); }


		/*************************
		PROMOTED DEFENSE
		*************************/

		// Overpowered
		if (p_defense_input == 6) { p_defense_output = random_number(61,65); }
		// Very High
		if (p_defense_input == 5) { p_defense_output = random_number(54,60); }
		// High
		if (p_defense_input == 4) { p_defense_output = random_number(47,53); }
		// Average
		if (p_defense_input == 3) { p_defense_output = random_number(40,46); }
		// Low
		if (p_defense_input == 2) { p_defense_output = random_number(33,39); }
		// Very Low
		if (p_defense_input == 1) { p_defense_output = random_number(27,32); }


		/*************************
		BASE HEALTH POINTS
		*************************/

		// Overpowered
		if (hp_input == 6) { hp_output = random_number(16,17); }
		// Very High
		if (hp_input == 5) { hp_output = 15; }
		// High
		if (hp_input == 4) { hp_output = random_number(13,14); }
		// Average
		if (hp_input == 3) { hp_output = random_number(11,12); }
		// Low
		if (hp_input == 2) { hp_output = random_number(9,10); }
		// Very Low
		if (hp_input == 1) { hp_output = 8; }

		/*************************
		UNPROMOTED HEALTH POINTS
		*************************/

		// Overpowered
		if (u_hp_input == 6) { u_hp_output = random_number(30,33); }
		// Very High
		if (u_hp_input == 5) { u_hp_output = random_number(26,29); }
		// High
		if (u_hp_input == 4) { u_hp_output = random_number(22,25); }
		// Average
		if (u_hp_input == 3) { u_hp_output = random_number(18,21); }
		// Low
		if (u_hp_input == 2) { u_hp_output = random_number(14,17); }
		// Very Low
		if (u_hp_input == 1) { u_hp_output = random_number(10,13); }

		/*************************
		PROMOTED HEALTH POINTS
		*************************/

		// Overpowered
		if (p_hp_input == 6) { p_hp_output = random_number(59,62); }
		// Very High
		if (p_hp_input == 5) { p_hp_output = random_number(48,58); }
		// High
		if (p_hp_input == 4) { p_hp_output = random_number(44,47); }
		// Average
		if (p_hp_input == 3) { p_hp_output = random_number(41,43); }
		// Low
		if (p_hp_input == 2) { p_hp_output = random_number(38,40); }
		// Very Low
		if (p_hp_input == 1) { p_hp_output = random_number(35,37); }

		/*************************
		BASE LEVEL
		*************************/

		// Runefaust
		if (level_input == 13) {
			level_output = random_number(10,16);
		}
		// Prompt
		if (level_input == 12) {
			level_output = random_number(10,16);
		}
		// Dragonia
		if (level_input == 11) {
			level_output = random_number(9,10);
		}
		// Rudo
		if (level_input == 10) {
			level_output = random_number(8,9);
		}
		// Waral
		if (level_input == 9) {
			level_output = random_number(8,9);
		}
		// Uranbatol
		if (level_input == 8) {
			level_output = random_number(8,9);
		}
		// Pao
		if (level_input == 7) {
			level_output = random_number(8,10);
		}
		// Bustoke
		if (level_input == 6) {
			level_output = random_number(6,8);
		}
		// Shade Abbey
		if (level_input == 5) {
			level_output = random_number(8,9);
		}
		// Manarina
		if (level_input == 4) {
			level_output = random_number(3,4);
		}
		// Rindo
		if (level_input == 3) {
			level_output = random_number(2,4);
		}
		// Alterone
		if (level_input == 2) {
			level_output = random_number(2,3);
		}
		// Guardiana
		if (level_input == 1) {
			level_output = random_number(1,2);
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
			if (mp_input == 6) { mp_output = random_number(11,12); }
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
			if (u_mp_input == 6) { u_mp_output = random_number(37,42); }
			// Very High
			if (u_mp_input == 5) { u_mp_output = random_number(31,36); }
			// High
			if (u_mp_input == 4) { u_mp_output = random_number(26,30); }
			// Average
			if (u_mp_input == 3) { u_mp_output = random_number(21,25); }
			// Low
			if (u_mp_input == 2) { u_mp_output = random_number(16,20); }
			// Very Low
			if (u_mp_input == 1) { u_mp_output = random_number(10,15); }
			// Overpowered
			if (p_mp_input == 6) { p_mp_output = random_number(48,52); }
			// Very High
			if (p_mp_input == 5) { p_mp_output = random_number(43,47); }
			// High
			if (p_mp_input == 4) { p_mp_output = random_number(38,42); }
			// Average
			if (p_mp_input == 3) { p_mp_output = random_number(32,37); }
			// Low
			if (p_mp_input == 2) { p_mp_output = random_number(27,31); }
			// Very Low
			if (p_mp_input == 1) { p_mp_output = random_number(22,26); }

			// If magic user is a HEAL/VICR...
			if (magic_input == 3) {

				spell_set = random_number(1,4);

				if (spell_set == 1) {

					random_spell_options = new Array ("detox", "boost", "slow");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					random_spell_2_options = new Array ("quick", "shield");
					random_spell_2 = random_spell_2_options[Math.floor(Math.random() * random_spell_2_options.length)];
					spell_output = "<tr> <td><img src='images/inventory/heal.gif'></td> <td>Heal</td> <td>1</td> <td>" + random_number(11,12) + "</td> <td>" + random_number(17,18) + "</td> <td>-</td> </tr>";
					if (random_spell == ('detox'  || 'slow')) {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(4,5) + "</td> <td>" + random_number(23,24) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(4,5) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					if (random_spell_2 == 'quick') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(8,9) + "</td> <td>" + random_number(27,28) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(8,9) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					spell_output += "<tr> <td><img src='images/inventory/aura.gif'></td> <td>Aura</td> <td>1</td> <td>" + random_number(14,15) + "</td> <td>" + random_number(20,21) + "</td> <td>-</td> </tr>";
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/heal.gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_2 + ".gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/aura.gif"); });

				} else if (spell_set == 2) {

					random_spell_options = new Array ("boost", "quick", "shield");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					spell_output = "<tr> <td><img src='images/inventory/heal.gif'></td> <td>Heal</td> <td>1</td> <td>" + random_number(7,8) + "</td> <td>" + random_number(11,12) + "</td> <td>" + random_number(23,24) + "</td> </tr>";
					spell_output += "<tr> <td><img src='images/inventory/detox.gif'></td> <td>Detox</td> <td>" + random_number(4,5) + "</td> <td>" + random_number(20,21) + "</td> <td>-</td> <td>-</td> </tr>";
					spell_output += "<tr> <td><img src='images/inventory/aura.gif'></td> <td>Aura</td> <td>1</td> <td>" + random_number(14,15) + "</td> <td>-</td> <td>-</td> </tr>";
					if (random_spell == 'quick') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(17,18) + "</td> <td>" + random_number(26,27) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(17,18) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/heal.gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/detox.gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/aura.gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });

				} else if (spell_set == 3) {

					random_spell_options = new Array ("boost", "quick");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					random_spell_2_options = new Array ("detox", "shield");
					random_spell_2 = random_spell_2_options[Math.floor(Math.random() * random_spell_2_options.length)];
					random_spell_3_options = new Array ("desoul", "dispel", "muddle", "sleep", "slow");
					random_spell_3 = random_spell_3_options[Math.floor(Math.random() * random_spell_3_options.length)];
					spell_output = "<tr> <td><img src='images/inventory/aura.gif'></td> <td>Aura</td> <td>1</td> <td>" + random_number(11,12) + "</td> <td>" + random_number(18,19) + "</td> <td>" + random_number(22,23) + "</td> </tr>";
					if (random_spell == 'quick') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(4,5) + "</td> <td>" + random_number(25,26) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(4,5) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					if (random_spell_2 == 'detox') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(7,8) + "</td> <td>" + random_number(28,29) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(7,8) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					if (random_spell_3 == ('desoul' || 'slow')) {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_3 + ".gif'></td> <td>" + random_spell_3 + "</td> <td>" + random_number(14,15) + "</td> <td>" + random_number(31,32) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_3 + ".gif'></td> <td>" + random_spell_3 + "</td> <td>" + random_number(14,15) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/aura.gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_2 + ".gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_3 + ".gif"); });

				} else if (spell_set == 4) {

					random_spell_options = new Array ("detox", "quick");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					random_spell_2_options = new Array ("muddle", "sleep", "slow");
					random_spell_2 = random_spell_2_options[Math.floor(Math.random() * random_spell_2_options.length)];
					random_spell_3_options = new Array ("boost", "shield");
					random_spell_3 = random_spell_3_options[Math.floor(Math.random() * random_spell_3_options.length)];
					spell_output += "<tr> <td><img src='images/inventory/desoul.gif'></td> <td>Desoul</td> <td>1</td> <td>" + random_number(11,12) + "</td> <td>-</td> <td>-</td> </tr>";
					spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(4,5) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					if (random_spell_2 == 'slow') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(7,8) + "</td> <td>" + random_number(18,19) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(7,8) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					spell_output += "<tr> <td><img src='images/inventory/" + random_spell_3 + ".gif'></td> <td>" + random_spell_3 + "</td> <td>" + random_number(14,15) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/desoul.gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_2 + ".gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_3 + ".gif"); });

				}

			// If magic user is a MAGE/WZRD...
			} else if (magic_input == 4) {

				spell_set = random_number(1,3);

				if (spell_set == 1) {

					random_spell_options = new Array ("boost", "dispel", "muddle", "quick", "shield", "sleep", "slow");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					spell_output = "<tr> <td><img src='images/inventory/blaze.gif'></td> <td>Blaze</td> <td>1</td> <td>" + random_number(5,6) + "</td> <td>" + random_number(13,14) + "</td> <td>" + random_number(25,26) + "</td> </tr>";
					spell_output += "<tr> <td><img src='images/inventory/freeze.gif'></td> <td>Freeze</td> <td>3</td> <td>" + random_number(8,9) + "</td> <td>" + random_number(18,19) + "</td> <td></td> </tr>";
					spell_output += "<tr> <td><img src='images/inventory/desoul.gif'></td> <td>Desoul</td> <td>" + random_number(11,12) + "</td> <td>" + random_number(22,23) + "</td> <td>-</td> <td>-</td> </tr>";
					if (random_spell == ('quick' || 'slow')) {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(14,15) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(14,15) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/blaze.gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/freeze.gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/desoul.gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });

				} else if (spell_set == 2) {

					random_spell_options = new Array ("dispel", "muddle", "sleep");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					random_spell_2_options = new Array ("boost", "quick", "shield");
					random_spell_2 = random_spell_2_options[Math.floor(Math.random() * random_spell_2_options.length)];
					spell_output = "<tr> <td><img src='images/inventory/bolt.gif'></td> <td>Bolt</td> <td>1</td> <td>" + random_number(10,11) + "</td> <td>" + random_number(21,22) + "</td> <td>" + random_number(27,28) + "</td> </tr>";
					if (random_spell == 'slow') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(3,4) + "</td> <td>" + random_number(3,4) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>" + random_number(3,4) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					spell_output += "<tr> <td><img src='images/inventory/slow.gif'></td> <td>Slow</td> <td>" + random_number(6,7) + "</td> <td>" + random_number(14,15) + "</td> <td>-</td> <td></td> </tr>";
					if (random_spell_2 == 'quick') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(18,19) + "</td> <td>" + random_number(24,25) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(18,19) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/bolt.gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/slow.gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_2 + ".gif"); });

				} else if (spell_set == 3) {

					random_spell_options = new Array ("blaze", "freeze");
					random_spell = random_spell_options[Math.floor(Math.random() * random_spell_options.length)];
					random_spell_2_options = new Array ("dispel", "muddle", "sleep", "slow");
					random_spell_2 = random_spell_2_options[Math.floor(Math.random() * random_spell_2_options.length)];
					random_spell_3_options = new Array ("bolt", "desoul");
					random_spell_3 = random_spell_3_options[Math.floor(Math.random() * random_spell_3_options.length)];
					random_spell_4_options = new Array ("boost", "quick", "shield");
					random_spell_4 = random_spell_4_options[Math.floor(Math.random() * random_spell_4_options.length)];
					if (random_spell == 'blaze') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>1</td> <td>" + random_number(4,5) + "</td> <td>" + random_number(14,15) + "</td> <td>" + random_number(31,32) + "</td> </tr>";
					} else if (random_spell == 'freeze') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell + ".gif'></td> <td>" + random_spell + "</td> <td>1</td> <td>" + random_number(5,6) + "</td> <td>" + random_number(16,17) + "</td> <td>" + random_number(32,33) + "</td> </tr>";
					}
					if (random_spell_2 == 'slow') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(8,9) + "</td> <td>" + random_number(19,20) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_2 + ".gif'></td> <td>" + random_spell_2 + "</td> <td>" + random_number(8,9) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					if (random_spell_3 == 'bolt') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_3 + ".gif'></td> <td>" + random_spell_3 + "</td> <td>" + random_number(12,13) + "</td> <td>" + random_number(22,23) + "</td> <td>-</td> <td>-</td> </tr>";
					} else if (random_spell_3 == 'desoul') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_3 + ".gif'></td> <td>" + random_spell_3 + "</td> <td>" + random_number(12,13) + "</td> <td>" + random_number(22,23) + "</td> <td>-</td> <td>-</td> </tr>";
					}
					if (random_spell_4 == 'quick') {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_4 + ".gif'></td> <td>" + random_spell_4 + "</td> <td>" + random_number(25,26) + "</td> <td>" + random_number(28,29) + "</td> <td>-</td> <td>-</td> </tr>";
					} else {
						spell_output += "<tr> <td><img src='images/inventory/" + random_spell_4 + ".gif'></td> <td>" + random_spell_4 + "</td> <td>" + random_number(25,26) + "</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
					}
					$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell + ".gif"); });
					$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_2 + ".gif"); });
					$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_3 + ".gif"); });
					$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/" + random_spell_4 + ".gif"); });

				}

			}

		// If Bowie...
		} else if (magic_input == 2) {
			// Overpowered
			if (mp_input == 6) { mp_output = random_number(11,12); }
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
			if (u_mp_input == 6) { u_mp_output = random_number(15,16); }
			// Very High
			if (u_mp_input == 5) { u_mp_output = 14; }
			// High
			if (u_mp_input == 4) { u_mp_output = 13; }
			// Average
			if (u_mp_input == 3) { u_mp_output = 12; }
			// Low
			if (u_mp_input == 2) { u_mp_output = 11; }
			// Very Low
			if (u_mp_input == 1) { u_mp_output = 10; }
			// Overpowered
			if (p_mp_input == 6) { p_mp_output = random_number(19,20); }
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

			spell_output = "<tr> <td><img src='images/inventory/egress.gif'></td> <td>Egress</td> <td>1</td> <td>-</td> <td>-</td> <td>-</td> </tr>";
			spell_output += "<tr> <td><img src='images/inventory/bolt.gif'></td> <td>Bolt</td> <td>22</td> <td>31</td> <td>42</td> <td>51</td> </tr>";

			$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/egress.gif"); });
			$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/bolt.gif"); });

		// If Max...
		} else if (magic_input == 1) {
			// Overpowered
			if (mp_input == 6) { mp_output = random_number(11,12); }
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
			if (u_mp_input == 6) { u_mp_output = random_number(7,8); }
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
			if (p_mp_input == 6) { p_mp_output = random_number(5,6); }
			// Very High
			if (p_mp_input == 5) { p_mp_output = 4; }
			// High
			if (p_mp_input == 4) { p_mp_output = 3; }
			// Average
			if (p_mp_input == 3) { p_mp_output = 2; }
			// Low
			if (p_mp_input == 2) { p_mp_output = random_number(1,2); }
			// Very Low
			if (p_mp_input == 1) { p_mp_output = 1; }

			spell_output = "<tr> <td><img src='images/inventory/egress.gif'></td> <td>Egress</td> <td>1</td> <td>-</td> <td>-</td> <td>-</td> </tr>";

			$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/egress.gif"); });
			$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });

		// If NO magic...
		} else if (magic_input == 0 ) {

			mp_output = 0;
			u_mp_output = 0;
			p_mp_output = 0;

			spell_output = "";

			$('#force-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .right-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .bottom-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
			$('#force-spells .left-spell img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });

		}

		// Overpowered
		if (move_input == 6) { move_output = random_number(8,9); }
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
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/power-staff.gif'); });
			} else {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/wooden-staff.gif'); });
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
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/steel-arrow.gif'); });
			} else {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/wooden-arrow.gif'); });
			}
			$(".class-output").html('[ACHR]');
			$(".p-class-output").html('[SNIP]');
		}
		// Lance or spear
		if (weapon_input == 3) {
			if (level_input >= 7) {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/power-spear.gif'); });
			} else if (level_input >= 1) {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/bronze-lance.gif'); });
			} else {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/spear.gif'); });
			}
			$(".class-output").html('[KNT]');
			$(".p-class-output").html('[PLDN]');
		}
		// Axe
		if (weapon_input == 2) {
			if (level_input >= 10) {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/battle-axe.gif'); });
			} else if (level_input >= 6) {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/middle-axe.gif'); });
			} else {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/hand-axe.gif'); });
			}
			$(".class-output").html('[WARR]');
			$(".p-class-output").html('[GLDR]');
		}
		// Sword
		if (weapon_input == 1) {
			if (level_input >= 8) {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/long-sword.gif'); });
			} else if (level_input >= 6) {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/middle-sword.gif'); });
			} else {
				$('#force-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/short-sword.gif'); });
			}

			$(".class-output").html('[SDMN]');
			$(".p-class-output").html('[HERO]');
		}
		// Unarmed
		if (weapon_input == 0) {
			$('#force-items .top-item img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
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
			spell_output = "<table class='fancy-table spells'> <thead> <tr> <td colspan='2'>Spell</td> <td>L1</td> <td>L2</td> <td>L3</td> <td>L4</td> </tr> </thead> <tbody>" + spell_output + "</tbody> </table>"
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
