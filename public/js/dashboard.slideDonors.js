const previsualizeImg = () => {
    const image = document.getElementById('image_donor');
    const imagen = image.files;
    if (imagen.length == 1) { 
        loadImage(imagen[0]);
    }
}
const loadImage = (imagen) => {
    const preview = document.getElementById('previewDonor');
    const image = document.getElementById('image_donor');
    const error = document.getElementById('errorDonor');
    const img = new Image();
    // Lo convertimos a un objeto de tipo objectURL
    const source = URL.createObjectURL(imagen);
    img.src = source;
    img.onload = () => {
        const ancho = img.width;
        const alto = img.height
        if(ancho == 600 && alto == 600){
            imagePreview(preview, source, error)
        }else{
            image.value = "";
            error.innerHTML = "*** Las dimensiones de la imagen deben ser ancho: 600px, Alto: 600px";
        }
    }  
}
const imagePreview = (preview, source , error) => {
    preview.src = source;
    preview.classList.remove('hidden');
    preview.classList.add('block');
    error.innerHTML="";
}