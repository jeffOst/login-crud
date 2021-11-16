//Funcion que pregunta antes de eliminar un usuario
function funCargarURL(url){
    var respuesta = confirm("¿Esta seguro que desea eliminar este Usuario?");
    if (respuesta) {
        parent.location=url;
    }
  }