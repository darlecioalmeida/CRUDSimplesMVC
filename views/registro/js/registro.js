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
  
   //aplica o modo estrito
   'use strict';

   window.addEventListener('load', function() {
     // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
     var forms = document.getElementsByClassName('needs-validation');
     // Faz um loop neles e evita o envio
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);


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
