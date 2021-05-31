const topbarButton = document.querySelector('.topbar-button');
topbarButton.onmousemove = function(e){
    const x = e.pageX - topbarButton.offsetLeft;
    const y = e.pageY- topbarButton.offsetTop;

    topbarButton.style.setProperty('--x', x + 'px');
    topbarButton.style.setProperty('--y', y + 'px');
}