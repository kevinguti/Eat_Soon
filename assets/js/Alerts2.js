swal({
    title: "Registra tu producto!",
    text: "No te olvides llenar todos lo campos!!!",
    icon: "info",
    closeOnClickOutside: false,
    timer: 5000,
    button: "Aceptar!",
  
  });
  
  function fntdescartar(id){
    buttons: ["Cancelar", "Aceptar"],
    swal({
      title: "Estas seguro?",
      text: "Se cancelara el registro del producto!",
      icon: "warning",
      buttons: ["Cancelar", "Aceptar"],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        document.getElementById('registroProducto').reset();
        document.getElementById("imagen").value = "";
        registroProducto.reset();

  
        swal("Se cancelo el registro con exito!!!", {
          icon: "success",
        });
      } else {
        swal("No se realizo nada!");
      }
    });
  



  }
 