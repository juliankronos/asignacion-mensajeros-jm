function Guard2()
{
    
$('#ingmen').submit(function (ev) {
    $.ajax({
      type: $('#ingmen').attr('method'), 
      url: $('#ingmen').attr('action'),
      data: $('#ingmen').serialize(),
      
    });
    ev.preventDefault();
  });

  alert("Guardado con exito");

$(document).ready(function() {
    $("#limpiar2").click();
    $("#form-comun > textarea").html("");
});

}