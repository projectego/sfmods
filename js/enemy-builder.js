$(document).ready(function(){

	/***********************************
	PRESETS
	***********************************/

  $("#preset-max").click(function(){
      $(".max").prop("checked", true);
      $(".max").prop("selected", true);
	$('.mp-input').removeClass('hidden');
	$('#mp-output').removeClass('hidden');
  });

	$("#e-magic-input").change(function(){
		if($(this).val() >= "1") {
		   $('.e-mp-input').removeClass('hidden');
		   $('#e-mp-output').removeClass('hidden');
		} else {
		   $('.e-mp-input').addClass('hidden');
		   $('#e-mp-output').addClass('hidden');
		}
	});

  $("#enemy-compare").click(function(){
    $('.darksol-stats').toggleClass('hidden');
  });

});

$(function() {

	$("#generate-enemy").click(function() {

		$(".show-after-generate-enemy").fadeIn();

		// Convert BASE stat values to variables
		var e_agility_input = parseInt($("#e-agility-input option:selected").val());
		var e_attack_input = parseInt($("#e-attack-input option:selected").val());
		var e_defense_input = parseInt($("#e-defense-input option:selected").val());
		var e_hp_input = parseInt($("#e-hp-input option:selected").val());
		var e_level_input = parseInt($('#e-level-input option:selected').val());
		var e_magic_input = parseInt($("#e-magic-input option:selected").val());
		var e_move_input = parseInt($("#e-move-input option:selected").val());
		var e_mp_input = parseInt($("#e-mp-input option:selected").val());
		var e_reward_input = parseInt($("#e-reward-input option:selected").val());
		var e_role_input = parseInt($("input[name=e-role-input]:checked").val());
		var e_weapon_input = parseInt($("input[name=e-weapon-input]:checked").val());

		// Prepare the OUTPUT valuables
		var e_agility_output = 0;
		var e_attack_output = 0;
		var e_defense_output = 0;
		var e_hp_output = 0;
		var e_level_output = 0;
		var e_magic_output = 0;
		var e_move_output = 0;
		var e_mp_output = 0;
		var e_reward_output = 5;
		var e_role_output = 5;
		var e_weapon_output = 5;

		// Prepare the PLACEHOLDER variables
		var e_spell_output = "";

		function random_number(min,max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

		/*************************
		BASE AGILITY
		*************************/

		// Overpowered
		if (e_agility_input == 6) { e_agility_output = 1; }
		// Very High
		if (e_agility_input == 5) { e_agility_output = 7; }
		// High
		if (e_agility_input == 4) { e_agility_output = 6; }
		// Average
		if (e_agility_input == 3) { e_agility_output = 5; }
		// Low
		if (e_agility_input == 2) { e_agility_output = 4; }
		// Very Low
		if (e_agility_input == 1) { e_agility_output = 4; }

		/*************************
		BASE ATTACK
		*************************/

		// Overpowered
		if (e_attack_input == 6) { e_attack_output = 2; }
		// Very High
		if (e_attack_input == 5) { e_attack_output = 7; }
		// High
		if (e_attack_input == 4) { e_attack_output = 6; }
		// Average
		if (e_attack_input == 3) { e_attack_output = 5; }
		// Low
		if (e_attack_input == 2) { e_attack_output = 4; }
		// Very Low
		if (e_attack_input == 1) { e_attack_output = 4; }


		/*************************
		BASE DEFENSE
		*************************/

		// Overpowered
		if (e_defense_input == 6) { e_defense_output = 3; }
		// Very High
		if (e_defense_input == 5) { e_defense_output = 4; }
		// High
		if (e_defense_input == 4) { e_defense_output = 5; }
		// Average
		if (e_defense_input == 3) { e_defense_output = 6; }
		// Low
		if (e_defense_input == 2) { e_defense_output = 7; }
		// Very Low
		if (e_defense_input == 1) { e_defense_output = 9; }

		/*************************
		BASE HEALTH POINTS
		*************************/

		// Overpowered
		if (e_hp_input == 6) { e_hp_output = 3; }
		// Very High
		if (e_hp_input == 5) { e_hp_output = 15; }
		// High
		if (e_hp_input == 4) { e_hp_output = 3; }
		// Average
		if (e_hp_input == 3) { e_hp_output = 3; }
		// Low
		if (e_hp_input == 2) { e_hp_output = 3; }
		// Very Low
		if (e_hp_input == 1) { e_hp_output = 8; }

		/*************************
		BASE LEVEL
		*************************/

		// Battle #1: Ancients' Gate!
		if (e_level_input == 0) {
      // if a Boss...
      if (e_role_input == 1) {
			    e_agility_output = random_number(5,6);
			    e_attack_output = random_number(5,5);
			    e_defense_output = random_number(6,6);
			    e_hp_output = random_number(12,12);
			    e_level_output = random_number(5,5); // Rune Knight mini-boss EL = 5
			    e_mp_output = random_number(20,20);
      // else if a regular enemy...
      } else {
          //
			    e_agility_output = random_number(5,6);
			    e_attack_output = random_number(5,5);
			    e_defense_output = random_number(6,6);
			    e_hp_output = random_number(12,12);
			    e_level_output = random_number(3,4);
			    e_mp_output = random_number(9,12);
      }
		}

		// Battle #2: Return to Guardiana!
		if (e_level_input == 1) {
      // if a Boss...
      if (e_role_input == 1) {
          // Rune Knight mini-boss(es) EL = 5
			    e_level_output = random_number(5,5);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(3,5);
      }
		}

		// Battle #3: To Alterone!
		if (e_level_input == 2) {
      // if a Boss...
      if (e_role_input == 1) {
          // Rune Knight mini-boss(es) EL = 5
			     e_level_output = random_number(5,5);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(4,5);
      }
		}

		// Battle #4: Alterone battle!
		if (e_level_input == 3) {
      // if a Boss...
      if (e_role_input == 1) {
          // Archer mini-boss(es) EL = 6
			     e_level_output = random_number(6,6);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(4,6);
      }
		}

		// Battle #5: To Manarina!
		if (e_level_input == 4) {
      // if a Boss...
      if (e_role_input == 1) {
          // Zombie mini-boss EL =
			     e_level_output = random_number(7,7);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(4,7);
      }
		}

		// Battle #6: Cavern of Darkness
		if (e_level_input == 5) {
      // if a Boss...
      if (e_role_input == 1) {
          // Skeleton mini-boss EL = 17?!
			     e_level_output = random_number(17,17);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(5,9);
      }
		}

		// Battle #7: Rindo Circus Tent!
		if (e_level_input == 6) {
      // if a Boss...
      if (e_role_input == 1) {
          // Marionette has an Effective Level of 12
			     e_level_output = random_number(12,12);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(5,8);
      }
		}

		// Battle #8: Shade Abbey!
		if (e_level_input == 7) {
      // if a Boss...
      if (e_role_input == 1) {
          // Ghoul has an Effective Level of 12
			     e_level_output = random_number(15);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(7,9);
      }
		}

		// Battle #9: Bustoke Quarry
		if (e_level_input == 8) {
      // if a Boss...
      if (e_role_input == 1) {
          // Lizardman mini-boss EL = 11
			     e_level_output = random_number(11,11);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(9,11);
      }
		}

		// Battle #10: Bustoke Forest
		if (e_level_input == 9) {
      // if a Boss...
      if (e_role_input == 1) {
          // Lizardman mini-boss EL = 11
			     e_level_output = random_number(11, 11);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(9,14);
      }
		}

		// Battle #11: Bustoke Bridge
		if (e_level_input == 10) {
      // if a Boss...
      if (e_role_input == 1) {
          // Laser Eye EL = 22!
			     e_level_output = random_number(22,22);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(9,14);
      }
		}

		// Battle #12: Pao Prairie
		if (e_level_input == 11) {
      // if a Boss...
      if (e_role_input == 1) {
          // Elliot EL = 20
			     e_level_output = random_number(20,20);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(9,16);
      }
		}

		// Battle #13: Uranbatol Fortress
		if (e_level_input == 12) {
      // if a Boss...
      if (e_role_input == 1) {
          // Hellhound mini boss EL = 16; Artillery mini-boss EL = 14
			     e_level_output = random_number(16,16);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(9,16);
      }
		}

		// Battle #14: Uranbatol Harbour
		if (e_level_input == 13) {
      // if a Boss...
      if (e_role_input == 1) {
          // Balbazak EL = 25
			     e_level_output = random_number(25,25);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(9,17);
      }
		}

		// Battle #15: Sea Battle!
		if (e_level_input == 14) {
      // if a Boss...
      if (e_role_input == 1) {
          // Last boss (Balbazak) was EL 25 so...
			     e_level_output = random_number(25,25);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(14,17);
      }
		}

		// Battle #16: Ring Reef!
		if (e_level_input == 15) {
      // if a Boss...
      if (e_role_input == 1) {
          // Last boss (Balbazak) was EL 25 so...
			     e_level_output = random_number(25,25);
      // else if a regular enemy...
      } else {
        // All default enemies are EL 17?
			  e_level_output = random_number(17,17);
      }
		}

		// Battle #17: Sea Battle Again!
		if (e_level_input == 16) {
      // if a Boss...
      if (e_role_input == 1) {
          // Last boss (Balbazak) was EL 25 so...
			     e_level_output = random_number(25,25);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(15,18);
      }
		}

		// Battle #18: To Dragonia!
		if (e_level_input == 17) {
	      // if a Boss...
        if (e_role_input == 1) {
            // Last boss (Balbazak) was EL 25 so...
  			     e_level_output = random_number(25,25);
        // else if a regular enemy...
        } else {
          //
  			  e_level_output = random_number(18,21);
        }
		}

		// Battle #19: Dragonia/Kain battle!
		if (e_level_input == 18) {
      // if a Boss...
      if (e_role_input == 1) {
          // Kain/Cane EL = 25
			     e_level_output = random_number(25,25);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(18,21);
      }
		}

		// Battle #20: To the Demon Castle!
		if (e_level_input == 19) {
      // if a Boss...
      if (e_role_input == 1) {
          //
			     e_level_output = random_number(25,25);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(17,23);
      }
		}

		// Battle #21: Demon Castle/Mishaela battle!
		if (e_level_input == 20) {
      // if a Boss...
      if (e_role_input == 1) {
          // Mishaela EL = 30!
			     e_level_output = random_number(30,30);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(17,23);
      }
		}

		// Battle #22: To the Tower of the Ancients!
		if (e_level_input == 21) {
      // if a Boss...
      if (e_role_input == 1) {
          // Minotaur EL = 32; sort of a mini-boss?
			     e_level_output = random_number(32,32);
      // else if a regular enemy...
      } else {
        // Torch Eye EL = 40; Minotaur EL = 32; Belial EL = 23
			  e_level_output = random_number(23,40);
      }
		}

		// Battle #23: Tower of the Ancients!
		if (e_level_input == 22) {
      // if a Boss...
      if (e_role_input == 1) {
          // Special Demon Master EL = 31
			     e_level_output = random_number(31,31);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(25,40);
      }
		}

		// Battle #24: Metapha/Chaos battle!
		if (e_level_input == 23) {
      // if a Boss...
      if (e_role_input == 1) {
          // Chaos EL = 40
			     e_level_output = random_number(40,40);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(25,40);
      }
		}

		// Battle #25: To Runefaust
		if (e_level_input == 24) {
      // if a Boss...
      if (e_role_input == 1) {
          //
			     e_level_output = random_number(40,40);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(22,40);
      }
		}

		// Battle #26: Runefaust Castle
		if (e_level_input == 25) {
      // if a Boss...
      if (e_role_input == 1) {
          // Ramladu EL = 60!
			     e_level_output = random_number(50,50);
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(22,50);
      }
		}

		// Battle #27: Ramladu/Runefaust Castle Part 2 battle!
		if (e_level_input == 26) {
      // if a Boss...
      if (e_role_input == 1) {
          // Ramladu EL = 60
			     e_level_output = random_number(60,60);
      // else if a regular enemy...
      } else {
        // Torch Eye and Steel Claw both EL = 40
			  e_level_output = random_number(40,40);
      }
		}

		// Battle #28: Colossus/Castle of the Ancients battle!
		if (e_level_input == 27) {
      // if a Boss...
      if (e_role_input == 1) {
          // Collossus heads EL = 99
			     e_level_output = 99;
      // else if a regular enemy...
      } else {
        //
			  e_level_output = random_number(30,50);
      }
		}

		// Battle #29: Darksol battle!
		if (e_level_input == 28) {
      // if a Boss...
      if (e_role_input == 1) {
          // Darksol EL = 99
			     e_level_output = 99;
      // else if a regular enemy...
      } else {
        // The High Priest has an EL of 19 - perhaps mistake by Sega?
			  e_level_output = random_number(40,50);
      }
		}

		// Battle #30: Dark Dragon battle!
		if (e_level_input == 29) {
      // if a Boss...
      if (e_role_input == 1) {
          // Dark Dragon EL = 99
			     e_level_output = 99;
      // else if a regular enemy...
      } else {
        // Only enemy Armed Skeleton EL = 40
			  e_level_output = random_number(40,40);
      }
		}

		/*************************
		BASE MAGIC
		*************************/

  	// If enemy magic user is a HEAL/VICR...
  	if (e_magic_input == 1) {

  		e_spell_options = new Array ("heal", "aura");
  		e_spell = e_spell_options[Math.floor(Math.random() * e_spell_options.length)];
  		$('#enemy-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/" + e_spell + ".gif"); });

  	// If enemy magic user is a MAGE/WIZD...
    } else if (e_magic_input == 2) {

  		e_spell_options = new Array ("blaze", "bolt", "freeze");
  		e_spell = e_spell_options[Math.floor(Math.random() * e_spell_options.length)];
  		$('#enemy-spells .top-spell img').after(function() { return $(this).attr("src", "images/inventory/" + e_spell + ".gif"); });

    }

		/*************************
		BASE MOVE
		*************************/

		// Overpowered
		if (e_move_input == 6) { e_move_output = 4; }
		// Very High
		if (e_move_input == 5) { e_move_output = 7; }
		// High
		if (e_move_input == 4) { e_move_output = 6; }
		// Average
		if (e_move_input == 3) { e_move_output = 5; }
		// Low
		if (e_move_input == 2) { e_move_output = 4; }
		// Very Low
		if (e_move_input == 1) { e_move_output = 4; }


		/*************************
		BASE GOLD
		*************************/

		// Overpowered
		if (e_reward_input == 6) { e_reward_output = 4; }
		// Very High
		if (e_reward_input == 5) { e_reward_output = 7; }
		// High
		if (e_reward_input == 4) { e_reward_output = 6; }
		// Average
		if (e_reward_input == 3) { e_reward_output = 5; }
		// Low
		if (e_reward_input == 2) { e_reward_output = 4; }
		// Very Low
		if (e_reward_input == 1) { e_reward_output = 4; }


		// Staff
		if (e_weapon_input == 5) {
			if (e_level_input >= 4) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/power-staff.gif'); });
			} else {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/wooden-staff.gif'); });
			}
		}
		// Bow and arrow
		if (e_weapon_input == 4) {
			if (e_level_input >= 6) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/steel-arrow.gif'); });
			} else {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/wooden-arrow.gif'); });
			}
		}
		// Lance or spear
		if (e_weapon_input == 3) {
			if (e_level_input >= 7) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/power-spear.gif'); });
			} else if (e_level_input >= 1) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/bronze-lance.gif'); });
			} else {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/spear.gif'); });
			}
		}
		// Axe
		if (e_weapon_input == 2) {
			if (e_level_input >= 10) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/battle-axe.gif'); });
			} else if (e_level_input >= 6) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/middle-axe.gif'); });
			} else {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/hand-axe.gif'); });
			}
		}
		// Sword
		if (e_weapon_input == 1) {
			if (e_level_input >= 8) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/long-sword.gif'); });
			} else if (e_level_input >= 6) {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/middle-sword.gif'); });
			} else {
				$('#enemy-items .top-item img').after(function() { return $(this).attr('src', 'images/inventory/short-sword.gif'); });
			}
		}
		// Unarmed
		if (e_weapon_input == 0) {
			$('#enemy-items .top-item img').after(function() { return $(this).attr("src", "images/inventory/blank.gif"); });
		}


		$(".e-agility-output").html(e_agility_output);
		$(".e-attack-output").html(e_attack_output);
		$(".e-defense-output").html(e_defense_output);
		$(".e-hp-output").html(e_hp_output + "/" + e_hp_output);
		$(".e-level-output").html(e_level_output);
		$(".e-move-output").html(e_move_output);
		$(".e-mp-output").html(e_mp_output + "/" + e_mp_output);
		$(".e-reward-output").html(e_reward_output);

	});

});
