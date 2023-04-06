function Guard()
{
    
$('#ingusu').submit(function (ev) {
    $.ajax({
      type: $('#ingusu').attr('method'), 
      url: $('#ingusu').attr('action'),
      data: $('#ingusu').serialize(),
      
    });
    ev.preventDefault();
  });

  alert("Guardado con exito");

$(document).ready(function() {
    $("#limpiar").click();
    $("#form-comun > textarea").html("");
});

}