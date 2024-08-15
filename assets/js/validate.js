function validateFormFeedback() {
    // Ambil semua elemen input di dalam form
    const inputs = document.forms["feedbackForm"].getElementsByTagName("input");
    const textarea = document.forms["feedbackForm"].getElementsByTagName("textarea");
    
    // Looping melalui setiap input
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value === "") {
            alert("Field " + inputs[i].name + " tidak boleh kosong");
            inputs[i].focus(); // Fokus pada input yang kosong
            return false; // Menghentikan pengiriman form
        }
        if(inputs[i].name=="telp"){
            const status = validasiNoHandphone(inputs[i].value);
            if(status===false){
                alert("Format No Handphone anda salah");
                return false; 
            }
        }
    }
    for (let i = 0; i < textarea.length; i++) {
        if (textarea[i].value === "") {
            alert("Field " + textarea[i].name + " tidak boleh kosong");
            textarea[i].focus(); // Fokus pada input yang kosong
            return false; // Menghentikan pengiriman form
        }
    }
    return true; // Mengizinkan form dikirim jika semua input terisi
}

function errorAlert (title,message){
    Swal.fire({
        icon: "error",
        title: title,
        text: message,
      });
}

function validasiNoHandphone(noHandphone) {
    // Regex untuk memeriksa format nomor handphone
    // Dimulai dengan 08, diikuti oleh 8-11 digit
    const regex = /^08\d{8,11}$/;

    // Uji nomor handphone dengan regex
    return regex.test(noHandphone);
}

function validasiNoHandphone(noHandphone) {
    // Regex untuk memeriksa format nomor handphone
    // Dimulai dengan 08, diikuti oleh 8-11 digit
    const regex = /^08\d{8,11}$/;

    // Uji nomor handphone dengan regex
    return regex.test(noHandphone);
}

