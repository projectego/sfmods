// Smooooooth scroll
$(document).ready(function() {
    var offset = -68;
    var scrollTime = 500;
    $('a[href^="#"]').click(function() {
        $("html, body").animate({
            scrollTop: $( $(this).attr("href") ).offset().top + offset
        }, scrollTime);
        return false;
    });
});



// https://andylangton.co.uk/blog/development/jquery-showhide-multiple-elements-independently
$(document).ready(function() {
  var showText='Show';
  var hideText='Hide';
  var is_visible = false;
  $('.toggle-details').prev('fieldset').find('legend').append(' <span class="button toggle-button toggle-show">'+showText+'</span>');
  $('.toggle-show').click(function() {
    $(this).parents("legend").parents("fieldset").next(".toggle-details").fadeToggle();
    is_visible = !is_visible;
    $(this).html( (!is_visible) ? showText : hideText);
    return false;
  });
});

// https://andylangton.co.uk/blog/development/jquery-showhide-multiple-elements-independently
$(document).ready(function() {
  var showText='Show';
  var hideText='Hide';
  var is_visible = false;
  $('.toggle').prev().append(' <span class="button toggle-button">'+showText+'</span>');
  $('.toggle').hide();
  $('span.toggle-button').click(function() {
  is_visible = !is_visible;
  $(this).html( (!is_visible) ? showText : hideText);
  $(this).parent().next('.toggle').fadeToggle();
  return false;
  });
});



$(document).ready(function(){
    var split = window.location.pathname.split('/');
    var mnurl = split[split.length-1];
    $('#tiles a[href="' + mnurl + '"]').addClass("current").children('span').addClass("curant");
});




// tabs
//$(document).ready(function(){$(".tab").hide();$(".tiles-menu li:first").addClass("active").show();$(".tab:first").show();$(".tiles-menu li").click(function(){$(".tiles-menu li").removeClass("active");$(this).addClass("active");$(".tab").hide();var activeTab=$(this).find("div").attr("data-tab");$(activeTab).fadeToggle();return false})});

$(document).ready(function(){$(".tab").hide();$("#tabs-menu li:first").addClass("active").show();$(".tab:first").show();$("#tabs-menu li").click(function(){$("#tabs-menu li").removeClass("active");$(this).addClass("active");$(".tab").hide();var activeTab=$(this).find("div").attr("data-tab");$(activeTab).fadeToggle();return false})});


$(document).ready(function(){
    $('.sprites').after(function() {
    return $(this).clone().addClass('animation');
    });
});


// https://stackoverflow.com/questions/38872308/how-to-use-jquery-addclass-on-parent-ul-by-counting-li/38872496
$(document).ready(function() {
	$(".sprites").addClass(function() {
		return 'sprites-' + $(this).find("img").length;
	});
});

$(document).ready(function() {
	$(".portrait-details").addClass(function() {
		return 'cols-' + $(this).find("dl").length;
	});
});



/*
$(document).ready(function(){
$('.portrait-details').find(function() {
    //kind user's code here//
    $(this).find('dfn:nth-of-type(1)').text('text hello');
});
});
*/

$(document).ready(function(){
//  $('.portrait-details:nth-of-type(1) h2').text('Animation #1 (Blinking)');
//  $('.portrait-details:nth-of-type(2) h2').text('Animation #2 (Speech)');
  $('<h2>Animation #1 (Blinking)</h2>').prependTo('.toggle .portrait-details:nth-of-type(1)');
  $('<h2>Animation #2 (Speech)</h2>').prependTo('.toggle .portrait-details:nth-of-type(2)');
  $('<dfn>Tile: 0</dfn>').prependTo('.portrait-details dl:nth-of-type(1)');
  $('<dfn>Tile: 1</dfn>').prependTo('.portrait-details dl:nth-of-type(2)');
  $('<dfn>Tile: 2</dfn>').prependTo('.portrait-details dl:nth-of-type(3)');
  $('<dfn>Tile: 3</dfn>').prependTo('.portrait-details dl:nth-of-type(4)');
  $('<dfn>Tile: 4</dfn>').prependTo('.portrait-details dl:nth-of-type(5)');
  $('<dfn>Tile: 5</dfn>').prependTo('.portrait-details dl:nth-of-type(6)');
  $('<dfn>Tile: 6</dfn>').prependTo('.portrait-details dl:nth-of-type(7)');
  $('<dfn>Tile: 7</dfn>').prependTo('.portrait-details dl:nth-of-type(8)');

  $('<dt>Source X</dt>').insertBefore('.portrait-details dl dd:nth-of-type(1)');
  $('<dt>Source Y</dt>').insertBefore('.portrait-details dl dd:nth-of-type(2)');
  $('<dt>Dest X</dt>').insertBefore('.portrait-details dl dd:nth-of-type(3)');
  $('<dt>Dest Y</dt>').insertBefore('.portrait-details dl dd:nth-of-type(4)');
  /*
  $('.portrait-details dl:nth-of-type(1) dfn').text('Tile: 0');
  $('.portrait-details dl:nth-of-type(2) dfn').text('Tile: 1');
  $('.portrait-details dl:nth-of-type(3) dfn').text('Tile: 2');
  $('.portrait-details dl:nth-of-type(4) dfn').text('Tile: 3');
  $('.portrait-details dl:nth-of-type(5) dfn').text('Tile: 4');
  $('.portrait-details dl:nth-of-type(6) dfn').text('Tile: 5');
  $('.portrait-details dl:nth-of-type(7) dfn').text('Tile: 6');
  $('.portrait-details dl:nth-of-type(8) dfn').text('Tile: 7');
  */
});





//$('.frames.portrait > legend').find('legend').html('lol'));

$(document).ready(function(){
    $('.frames').after(function() {
		//$("legend").text("Animation");
        // return $(this).clone().toggleClass('animation'); // perfect
		//$(".animation legend").html("Animation");
		$(".animation legend").html("Animation");
    });
});


$(document).ready(function(){$('<div class="clear"></div>').appendTo(".portrait-details")});


$(document).ready(function(){$("<div class='clear'></div>").insertBefore("article h2")});
/*
$(document).ready(function(){$("<div class='clear'></div>").appendTo("article section")});
*/
$(document).ready(function(){$("<div class='clear'></div>").insertAfter(".notice")});
$(document).ready(function(){$("<div class='divider'></div>").insertBefore(".presets label:nth-child(9n)")});
//$(document).ready(function(){$("<div class='clear'></div><div class='divider'></div>").insertAfter(".animation")});
//$(document).ready(function(){$("<div class='clear'></div>").insertAfter(".animation")});

//$(document).ready(function(){$("<a download='<?php echo $id; ?>.zip' href='sprites/<?php echo $id; ?>/<?php echo $id; ?>.zip'>Download</a>").appendTo(".sub-tab")});
