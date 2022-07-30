$(document).ready(function() {
  $("button.hide").on('click', function() {
    var nameValue = $(this).parent().parent().attr('value');
    console.log(nameValue);
    $.ajax({
      method: "POST",
      url: "producthide.php",
      data: { PRODUCT_NAME: nameValue }
    })
      .done(function( msg ) {
        alert( "Data Saved: " + msg );
      });
    });
  });
$(document).ready(function() {
  $("button.minus").on('click', function() {
    var nameValue = $(this).parent().parent().attr('value');
    $.ajax({
      method: "POST",
      url: "quantitychangeminus.php",
      data: { PRODUCT_NAME: nameValue }
    })
      .done(function( msg ) {
        alert( "Data Saved: " + msg );
      });
    });
  });
$(document).ready(function() {
  $("button.plus").on('click', function() {
    var nameValue = $(this).parent().parent().attr('value');
    $.ajax({
      method: "POST",
      url: "quantitychangeplus.php",
      data: { PRODUCT_NAME: nameValue }
    })
      .done(function( msg ) {
        alert( "Data Saved: " + msg );
      });
    });
  });

$(document).ready(function() {
  $("button.hide").on('click', function() {
    $(this).parent().parent().empty();
    });
  });