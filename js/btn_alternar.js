document.querySelector("#boton").addEventListener("click", alternarFormularios);
    let formulario1 = document.getElementById("formulario1");
    let formulario2 = document.getElementById("formulario2");
    let boton = document.getElementById("boton");
function alternarFormularios() {
    if (formulario1.style.display === "none") {
      formulario1.style.display = "block";
      formulario2.style.display = "none";
      boton.innerHTML = "Mostrar Formulario 2";
    } else {
      formulario1.style.display = "none";
      formulario2.style.display = "block";
      boton.innerHTML = "Mostrar Formulario 1";
    }
  }