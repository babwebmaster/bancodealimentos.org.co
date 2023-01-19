document.addEventListener("DOMContentLoaded",() => {   
    const sizeScreen = window.matchMedia("(min-width: 768px)")
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop  ;
    (scrollTop > 40)?addClassMenu():removeClassMenu();
    cambiarMenu(sizeScreen) 
})
const cambiarMenu = (sizeScreen) => {
    sizeScreen.matches ? fnScroll :  '';
}
const fnScroll = window.onscroll = () => {        
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    (scrollTop > 40)?addClassMenu():removeClassMenu();
}
const removeClassMenu = ()=>{
    const nav = document.querySelector('nav.menu-home')
    const hasNavClass = nav.classList.contains("menu-sticky")
    return hasNavClass ? nav.classList.remove("menu-sticky") : '';
}
const addClassMenu = ()=>{
    const nav = document.querySelector('nav.menu-home')
    const hasNavClass = nav.classList.contains("menu-sticky")
    return hasNavClass ? '' : nav.classList.add("menu-sticky");
}
