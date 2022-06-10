function previsualizeImg(v){
    if(v=='mobile'){
        var image = document.getElementById('image_mobile');
    }else if('desktop'){
        var image = document.getElementById('image_desktop');
    }
    const imagen = image.files;
    if (imagen || imagen.length) {
        loadImage(imagen[0],v);
    }
}
function loadImage(imagen,v){
    if(v == 'mobile'){
        var preview = document.getElementById('previewMobile');
        var image = document.getElementById('image_mobile');
        var error = document.getElementById('errorMobile');
        var img = new Image();
        // Lo convertimos a un objeto de tipo objectURL
        var source = URL.createObjectURL(imagen);
        img.src = source;
        img.onload = function () {
            var ancho = img.width;
            var alto = img.height
            if(ancho == 778 && alto == 778){
                preview.src = source;
                preview.classList.remove('hidden');
                preview.classList.add('block');
                
                error.innerHTML="";
            }else{
                image.value = "";
                error.innerHTML = "*** Las dimensiones de la imagen deben ser ancho: 778px, Alto: 778px";
            }
        }
    }else if(v == 'desktop'){
        var preview = document.getElementById('previewDesktop');
        var image = document.getElementById('image_desktop');
        var error = document.getElementById('errorDesktop');
        var img = new Image();
        // Lo convertimos a un objeto de tipo objectURL
        var source = URL.createObjectURL(imagen);
        img.src = source;
        img.onload = function () {
            var ancho = img.width;
            var alto = img.height
            if(ancho == 1920 && alto == 700){
                preview.src = source;
                preview.classList.remove('hidden');
                preview.classList.add('block');
                error.innerHTML="";
            }else{
                image.value = "";
                error.innerHTML = "*** Las dimensiones de la imagen deben ser ancho: 1920px, Alto: 700px";
            }
        }
    }
    
}