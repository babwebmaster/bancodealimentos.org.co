const previsualizeImg = () => {
    const image = document.getElementById('icon');
    const imagen = image.files;
    if (imagen.length == 1) { 
        loadImage(imagen[0]);
    }
}
const loadImage = (imagen) => {
    const preview = document.getElementById('preview');
    const image = document.getElementById('icon');
    const error = document.getElementById('error');
    const img = new Image();
    // Lo convertimos a un objeto de tipo objectURL
    const source = URL.createObjectURL(imagen);
    img.src = source;
    img.onload = () => {
        const ancho = img.width;
        const alto = img.height
        if(ancho == 300 && alto == 300){
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
