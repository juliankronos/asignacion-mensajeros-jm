function Guard1()
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
    $("#limpiar1").click();
    $("#form-comun > textarea").html("");
});

}