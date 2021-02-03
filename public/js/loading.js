$(document).ready(function(){
    $("#send").click(function(){
      $("#loading").removeAttr( 'style' );
      $("#getting").fadeIn(1000);
      $("#transmitting").fadeIn(3000);
      $("#done").fadeIn(5000);
      $("#time").fadeIn(10000);
    });
});