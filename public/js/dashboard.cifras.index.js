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
    const elements = document.querySelectorAll('[data-name="counter"]')
    for (let index = 0; index < elements.length; index++) {
        const eid = elements[index].getAttribute('id')
        const evalue = elements[index].getAttribute('data-value')
        counterAnimation(`#${eid}`, 0, evalue, 3000);
    }

});