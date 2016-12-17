jQuery(document).ready(function() {

  // Initial boxes

  jQuery(".reason1").show();
  jQuery(".reason2").hide();
  jQuery(".reason3").hide();

  // Toggle the items of WHY WP EMPOWER?
  jQuery(".active-heading1").click(function() {
    jQuery(".reason1").toggle();
    if (jQuery(".reason1").is(':visible')) {
      jQuery(".reason2").hide();
      jQuery(".reason3").hide();
    }
    else {
      jQuery(".reason2").show();
      jQuery(".reason3").hide();
    }
  });

  jQuery(".active-heading2").click(function() {
    jQuery(".reason2").toggle();
    if (jQuery(".reason2").is(':visible')) {
      jQuery(".reason1").hide();
      jQuery(".reason3").hide();
    }
    else {
      jQuery(".reason3").show();
      jQuery(".reason1").hide();
    }
  });

  jQuery(".active-heading3").click(function() {
    jQuery(".reason3").toggle();
    if (jQuery(".reason3").is(':visible')) {
      jQuery(".reason1").hide();
      jQuery(".reason2").hide();
    }
    else {
      jQuery(".reason2").show();
      jQuery(".reason1").hide();
    }
  });


  // Toggle the banner
  jQuery('.banner-box1').show();
  jQuery('.banner-box2').hide();
  jQuery('#left-arrow').click(function() {
      // alert('abc');
    if (jQuery('.banner-box2').is(':visible')) {
      jQuery('.banner-box2').hide();
      jQuery('.banner-box1').slideDown('slow');
      // jQuery('.banner').css('background-color', '#008888');     
      jQuery('.banner').css('background', 'linear-gradient(#FFF, #008888)');

    } else
    {
      jQuery('.banner-box2').slideDown('slow');
      jQuery('.banner-box1').hide();
      // jQuery('.banner').css('background-color', '#80ff80');      
      jQuery('.banner').css('background', 'linear-gradient(#FFF, #000080)');

    }   
  });

  jQuery('#right-arrow').click(function() {
      // alert('abc');
    if (jQuery('.banner-box2').is(':visible')) {
      // alert('abc');
      jQuery('.banner-box1').slideDown('slow');
      jQuery('.banner-box2').hide();
      jQuery('.banner').css('background', 'linear-gradient(#FFF, #008888)');
    } else
    {
      jQuery('.banner-box2').slideDown('slow');
      jQuery('.banner-box1').hide();
      jQuery('.banner').css('background', 'linear-gradient(#FFF, #000080)');


    }   
  });

});
