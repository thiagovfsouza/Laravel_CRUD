function showAlert(type, message){
    Swal.fire({
        title: '',
        text: message,
        icon: type,
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true
    });
}
