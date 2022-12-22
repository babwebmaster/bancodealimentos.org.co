const counterAnimation = (elem,start = 0, end, duration) => {
    const target = document.querySelector(elem)
    let startTimestamp = null;
    const step = (timestamp) => {
        if(!startTimestamp) startTimestamp = timestamp
        const progress = Math.min((timestamp - startTimestamp) / duration, 1)
        target.innerText = Math.floor(progress * (end - start) + start)
        if(progress < 1){
            window.requestAnimationFrame(step)
        }
    }
    window.requestAnimationFrame(step)
}
document.addEventListener('DOMContentLoaded', () => {
    const elem = document.querySelector('[data-name="counter"]');
    if(isInViewport(elem)){
        counterLazyAnimation();
    }else{
        let count = 0;
        window.addEventListener('scroll', () => {
            if(isInViewport(elem) && count == 0){
                counterLazyAnimation();
                count++;
            }
        })
    }
 
});
function counterLazyAnimation (){
    const elements = document.querySelectorAll('[data-name="counter"]')
    for (let index = 0; index < elements.length; index++) {
        const eid = elements[index].getAttribute('id')
        const evalue = elements[index].getAttribute('data-value')
        counterAnimation(`#${eid}`, 0, evalue, 3000);
    }
}


function isInViewport(elem) {
    var distance = elem.getBoundingClientRect();
    return (
        distance.top < (window.innerHeight || document.documentElement.clientHeight) && distance.bottom > 0
    );
}