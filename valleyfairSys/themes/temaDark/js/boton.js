const topbarButton = document.querySelector('.topbar-button');
const buttonbeau = document.querySelector('.button-beau');
topbarButton.onmousemove = function(e){
    const x = e.pageX - topbarButton.offsetLeft;
    const y = e.pageY- topbarButton.offsetTop;

    topbarButton.style.setProperty('--x', x + 'px');
    topbarButton.style.setProperty('--y', y + 'px');
}

buttonbeau.onmousemove = function(e){
    const x = e.pageX - buttonbeau.offsetLeft;
    const y = e.pageY- buttonbeau.offsetTop;

    buttonbeau.style.setProperty('--x', x + 'px');
    buttonbeau.style.setProperty('--y', y + 'px');
}