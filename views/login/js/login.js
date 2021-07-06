/*var senha = $('#senha');
var olho= $("#olho");

olho.mousedown(function() {
  senha.attr("type", "text");
});

olho.mouseup(function() {
  senha.attr("type", "password");
});

// para evitar o problema de arrastar a imagem e a senha continuar exposta
$( "#olho" ).mouseout(function() { 
  $("#senha").attr("type", "password");
});
*/

jQuery(document).ready(function($) {
  
    $('#show_password').hover(function(e) {
      e.preventDefault();
      if ( $('#senha').attr('type') == 'password' ) {
        $('#senha').attr('type', 'text');
        $('#show_password').attr('class', 'bi bi-eye-fill');
      } else {
          $('#senha').attr('type', 'password');
          $('#show_password').attr('class', 'bi bi-eye-slash-fill');
      }
    });
    
  });