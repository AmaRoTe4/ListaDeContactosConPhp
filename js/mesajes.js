
const errorEdit = () => {
    Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: 'Datos Invalidos',
        showConfirmButton: false,
        timer: 1200,
    });
}

const successEdit = () => {
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Editado Con Exito',
        showConfirmButton: false,
        timer: 1200,
    })
}


const errorCreate = () => {
    Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: 'Datos Invalidos',
        showConfirmButton: false,
        timer: 1200,
    });
}

const successCreate = () => {
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Creado Con Exito',
        showConfirmButton: false,
        timer: 1200,
    })
}


const errorDelete = () => {
    Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: 'Error al Eliminar',
        showConfirmButton: false,
        timer: 1200,
    });
}

const successDelete = () => {
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Eliminado Con Exito',
        showConfirmButton: false,
        timer: 1200,
    })
}
