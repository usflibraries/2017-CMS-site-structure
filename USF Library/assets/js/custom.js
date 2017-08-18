$(document).ready(function(){
 $('.parallax').parallax();
  $(".button-collapse").sideNav();
    });
 $(document).ready(function() {
    $('select').material_select();
  });
$('#dbOption').on('change',function(){
    if( $(this).val()==="1"){
    $("#otherOptions").show()
    }
    else{
    $("#otherOptions").hide()
    }
  if( $(this).val()==="2"){
    $("#otherChoices").show()
    }
    else{
    $("#otherChoices").hide()
    }
  if( $(this).val()==="3"){
    $("#option3").show()
    }
    else{
    $("#option3").hide()
    }
});
$(document).ready(function(){
    $('.white-links-activator').click(function(){
      $('.white-links').toggle();
      $(this).toggleClass('open');
    });
});
$(document).ready(function(){
    $('.advanced-search-activator').click(function(){
      $('.advanced-search').toggle();
      $(this).toggleClass('open');
    });
});
$('.dropdown-buttona').dropdown({
      inDuration: 125,
      outDuration: 125,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );