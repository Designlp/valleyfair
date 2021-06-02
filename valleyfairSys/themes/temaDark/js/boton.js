const topbarButton = document.querySelector('.topbar-button');

topbarButton.onmousemove = function(e){
    const x = e.pageX - topbarButton.offsetLeft;
    const y = e.pageY- topbarButton.offsetTop;

    topbarButton.style.setProperty('--x', x + 'px');
    topbarButton.style.setProperty('--y', y + 'px');
}

const botonJS = document.querySelector('.botonJS');

botonJS.onmousemove = function(e){
    const xxx = e.pageX - botonJS.offsetLeft;
    const yyy = e.pageY- botonJS.offsetTop;

    botonJS.style.setProperty('--xxx', xxx + 'px');
    botonJS.style.setProperty('--yyy', yyy + 'px');
}