const confimacionDelete = (id) => {
  Swal.fire({
    title: "¿Estás seguro?",
    text: "Esta acción no se puede deshacer.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminarlo!",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.replace(`/functions/delete.php?id=${id}`);
    }
  });
};

const errorMesaje = (text) => {
  Toastify({
    duration: 1500,
    text: text,
    gravity: "top",
    position: "center",
    style: {
      background: "rgb(146, 13, 13)",
      color: "white",
    },
  }).showToast();
};

const successMesaje = (text) => {
  Toastify({
    duration: 2000,
    text: text,
    gravity: "top",
    position: "center",
    style: {
      background: "rgb(32, 158, 27)",
      color: "black",
    },
  }).showToast();
};

const errorEdit = () => {
  window.location.replace("/page/getAllContactos.php");
  errorMesaje("Error al Editar")
};

const successEdit = () => {
  window.location.replace("/page/getAllContactos.php");
  successMesaje('Editado Con Exito')
};

const errorCreate = () => {
  window.location.replace("/page/Add.php");
  errorMesaje("Error al Crear")
};

const successCreate = () => {
  window.location.replace("/page/Add.php");
  successMesaje("Creado con Exito")
};

const errorDelete = () => {
  window.location.replace("/page/getAllContactos.php");
  errorMesaje("Error al eliminar")
};

const successDelete = () => {
  window.location.replace("/page/getAllContactos.php");
  successMesaje("Eliminado con Exito");
};
