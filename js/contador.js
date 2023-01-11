var Contar = document.getElementById("Ingreso");
var pElement = document.getElementById("areaContador");
var contador = 0;

Contar.addEventListener("submit", Contador);

function Contador(event) {
  event.preventDefault();
  contador++;
  pElement.textContent = contador;

  alert("esta seguro de la asignacion");
}

