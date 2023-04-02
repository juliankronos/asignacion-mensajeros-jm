function ShowSelected()
{
    
var combo = document.getElementById("Sed");
var selected = combo.options[combo.selectedIndex].text;
document.getElementById("Sedd").innerHTML += selected+"<br>";

var combo1 = document.getElementById("Ciu");
var selected1 = combo1.options[combo1.selectedIndex].text;
document.getElementById("Ciuu").innerHTML += selected1+"<br>";

var combo2 = document.getElementById("Mens");
var selected2 = combo2.options[combo2.selectedIndex].text;
document.getElementById("Menss").innerHTML += selected2+"<br>";

var Guias = document.querySelector('#Gi');
document.getElementById("Guii").innerHTML += Guias.value+"<br>";

$('#Ingreso').submit(function (ev) {
    $.ajax({
      type: $('#Ingreso').attr('method'), 
      url: $('#Ingreso').attr('action'),
      data: $('#Ingreso').serialize(),
      
    });
    ev.preventDefault();
  });


}





