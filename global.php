<?php

// <
$head_extra_css = '';
$head_extra_js = '';
$head_title_separator = '|';
$site_title = 'SFMods';
$site_url = 'http://sfmods.com/';

// SOCIAL
$patreon_url = 'https://www.patreon.com/sfmods';
$twitter_url = 'https://twitter.com/yeahSP';

$page = basename($_SERVER['PHP_SELF']);
switch ($page)
{
    case 'enemies.php':
        $head_title = "<title>Enemy Packs $head_title_separator $site_title</title>";
    break;

    case 'force.php':
        $head_title = "<title>Force Member Packs $head_title_separator $site_title</title>";
    break;

    case 'index.php':
        $head_title = "<title>Shining Force Mods $head_title_separator $site_title</title>";
    break;

    case 'items.php':
        $head_title = "<title>Items $head_title_separator $site_title</title>";
    break;

    case 'misc.php':
        $head_title = "<title>Misc. $head_title_separator $site_title</title>";
    break;

    case 'npcs.php':
        $head_title = "<title>NPCs $head_title_separator $site_title</title>";
    break;

    case 'script.php':
        $head_title = "<title>Shining Force Script $head_title_separator $site_title</title>";
    break;

    case 'spells.php':
        $head_title = "<title>Spells $head_title_separator $site_title</title>";
    break;

    case 'tools.php':
        $head_title = "<title>Tools $head_title_separator $site_title</title>";
        $head_extra_js = "<script src='js/force-member-builder.js'></script>";
        $head_extra_js += "<script src='js/enemy-builder.js'></script>";
    break;

    case 'weapons.php':
        $head_title = "<title>Weapons $head_title_separator $site_title</title>";
    break;

    case 'world.php':
        $head_title = "<title>World $head_title_separator $site_title</title>";
    break;
}

$map_sprite_palette_2 = '<div class="notice"><big>&#9888;</big> <p>These map sprites make use of an additional colour not available in the original \'enemy\' map sprite palette. We recommend replacing the \'black\' colour in slot #16 with colour #ffdbb6. This change is safe to use and will not conflict with the default map sprites.</p> <p>Here\'s how your extended palette should look after the update:</p> <img class="map-sprite-palette" src="images/map-sprite-palette-2.gif"></div>';
$palette_warning = '<div class="notice"><big>&#9888;</big> These sprites exceed the recommended <b>12</b> colour slots and may cause issues.</div>';

function battle_background_sprites($folder) { ?>
	<figure class="battle-background">
		<div class="half hide left">
			<img class="lazy" data-src="sprites/battle-backgrounds/<?php echo $folder; ?>/0_1.bmp">
			<div class="shadow"></div>
		</div>
		<div class="half left show">
			<img class="lazy" data-src="sprites/battle-backgrounds/<?php echo $folder; ?>/0_0.bmp">
			<div class="shadow"></div>
		</div>
		<div class="half right show">
			<img class="lazy" data-src="sprites/battle-backgrounds/<?php echo $folder; ?>/0_1.bmp">
			<div class="shadow"></div>
		</div>
		<div class="half hide right">
			<img class="lazy" data-src="sprites/battle-backgrounds/<?php echo $folder; ?>/0_0.bmp">
			<div class="shadow"></div>
		</div>
    <div class="clear"></div>
    <p>[Mouse over for seamless tile test]
	</figure>
<?php }

function battle_sprites($folder, $stance, $title, $type, $number, $set, $offset) { ?>
  <fieldset>
    <legend><?php echo $stance; ?><?php if ($title != '') { ?>: <?php echo $title; ?><?php } ?></legend>
    <div class="fieldset-padding">
      <figure class="battle-sprites <?php echo strtolower($type); ?> sprites">
        <?php $x = 0; ?>
          <?php while ($x <= $number - 1) { ?>
            <img class="lazy" data-src="sprites/<?php echo $folder; ?>/<?php echo $set; ?>_<?php echo $x + $offset; ?>.bmp">
          <?php $x++; ?>
        <?php } ?>
      </figure>
    </div>
  </fieldset>
<?php }

function map_sprites($folder, $palette, $title, $set) { ?>
  <fieldset>
    <legend>Map<?php if ($title != '') { ?>: <?php echo $title; ?><?php } ?></legend>
    <div class="fieldset-padding">
      <div class="map-sprites sprites">
        <figure><img class="lazy" data-src="sprites/<?php echo $folder; ?>/m<?php echo $set; ?>_0.bmp"></figure>
        <figure><img class="lazy" data-src="sprites/<?php echo $folder; ?>/m<?php echo $set; ?>_1.bmp"></figure>
        <figure><img class="lazy" data-src="sprites/<?php echo $folder; ?>/m<?php echo $set; ?>_2.bmp"></figure>
      </div>
    </div>
  </fieldset>
<?php }

function portrait_sprites($folder, $blink, $speech, $title, $set, $comparison) { ?>
  <fieldset>
    <legend>Portrait<?php if ($title != '') { ?>: <?php echo $title; ?><?php } ?></legend>
    <div class="fieldset-padding">
      <figure class="portrait">
        <div class="results">
          <?php if ($comparison == true) { ?>
              <div class="comparison">
                <section class="before">
                  <figure>
                    <img class="lazy" data-src="images/portraits/<?php echo $folder; ?>.gif">
                  </figure>
                  <span class="details">Original</span>
                </section>
                <section class="after">
                  <figure>
                    <img class="lazy" data-src="sprites/<?php echo $folder; ?>/p<?php echo $set; ?>_0.bmp">
                  </figure>
                  <span class="details">Updated</span>
                </section>
              </div>
          <?php } else { ?>
            <?php if ($blink == true) { ?>
              <div class="blink state">
                <img class="lazy" data-src="sprites/<?php echo $folder; ?>/p<?php echo $set; ?>_1.gif">
                <img class="lazy" data-src="sprites/<?php echo $folder; ?>/p<?php echo $set; ?>_0.bmp">
              </div>
            <?php } ?>
            <?php if ($speech == true) { ?>
              <div class="speech state">
                <img class="lazy speech" data-src="sprites/<?php echo $folder; ?>/p<?php echo $set; ?>_2.gif">
                <img class="lazy" data-src="sprites/<?php echo $folder; ?>/p<?php echo $set; ?>_0.bmp">
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <img class="lazy original" data-src="sprites/<?php echo $folder; ?>/p<?php echo $set; ?>_0.bmp">
      </figure>
    </fieldset>
<?php }
