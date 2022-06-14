function previsualizeImg(){
    var image = document.getElementById('image_donor');
    const imagen = image.files;
    if (imagen || imagen.length) {
        loadImage(imagen[0]);
    }
}
function loadImage(imagen){
    var preview = document.getElementById('previewDonor');
    var image = document.getElementById('image_donor');
    var error = document.getElementById('errorDonor');
    var img = new Image();
    // Lo convertimos a un objeto de tipo objectURL
    var source = URL.createObjectURL(imagen);
    img.src = source;
    img.onload = function () {
        var ancho = img.width;
        var alto = img.height
        if(ancho == 600 && alto == 600){
            preview.src = source;
            preview.classList.remove('hidden');
            preview.classList.add('block');
            error.innerHTML="";
        }else{
            image.value = "";
            error.innerHTML = "*** Las dimensiones de la imagen deben ser ancho: 600px, Alto: 600px";
        }
    }
    
}