
document.addEventListener("DOMContentLoaded", function(event) {
    var sizeScreen = window.matchMedia("(min-width: 768px)");
    // sizeScreen.addListener(cambiarMenu)
    cambiarMenu(sizeScreen) // llama  a la funcion
    function cambiarMenu(sizeScreen) {
        if (sizeScreen.matches) { // if media "se cumple"
            window.onscroll = function (){
                // Obtenemos la posicion del scroll en pantall
                var scroll = document.documentElement.scrollTop || document.body.scrollTop;
                if(scroll > 0){
                    document.querySelector('.menu-home').classList.add('menu-sticky');
                }else{
                    document.querySelector('.menu-home').classList.remove('menu-sticky');
                }
            }       
                
        }   
    }
});



