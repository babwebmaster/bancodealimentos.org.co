const previsualizeImg = (mediaScreen) => {
    let image;
    if(mediaScreen == 'desktop'){
        image = document.getElementById('image_desktop') 
    }else if (mediaScreen == 'mobile'){
        image = document.getElementById('image_mobile')
    }
    const imagen = image.files;
    if (imagen.length == 1) { 
        loadImage(imagen[0], mediaScreen);
    }
}

const loadImage = (imagen, mediaScreen) => {
    if(mediaScreen == 'mobile'){
        const preview = document.getElementById('previewMobile');
        const image = document.getElementById('image_mobile');
        const error = document.getElementById('errorMobile');
        const img = new Image();
        // Lo convertimos a un objeto de tipo objectURL
        const source = URL.createObjectURL(imagen);
        img.src = source;
        img.onload =  () => {
            const ancho = img.width;
            const alto = img.height
            if(ancho == 778 && alto == 778 ){
                imagePreview(preview, source, error)
            }else{
                image.value = "";
                error.innerHTML = "*** Las dimensiones de la imagen deben ser ancho: 778px, Alto: 778px";
            }
        }
    }else if(mediaScreen == 'desktop'){
        const preview = document.getElementById('previewDesktop');
        const image = document.getElementById('image_desktop');
        const error = document.getElementById('errorDesktop');
        const img = new Image();
        // Lo convertimos a un objeto de tipo objectURL
        const source = URL.createObjectURL(imagen);
        img.src = source;
        img.onload = function () {
            const ancho = img.width;
            const alto = img.height
            if(ancho == 1920 && alto == 700){
                imagePreview(preview, source, error)
            }else{
                image.value = "";
                error.innerHTML = "*** Las dimensiones de la imagen deben ser ancho: 1920px, Alto: 700px";
            }
        }
    }
}
const imagePreview = (preview, source , error) => {
    preview.src = source;
    preview.classList.remove('hidden');
    preview.classList.add('block');
    error.innerHTML="";
}