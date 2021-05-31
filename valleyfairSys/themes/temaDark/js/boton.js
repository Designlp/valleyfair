const topbarButton = document.querySelector('.topbar-button');
// const buttonbeau = document.querySelector('.button-beau');
topbarButton.onmousemove = function(e){
    const x = e.pageX - topbarButton.offsetLeft;
    const y = e.pageY- topbarButton.offsetTop;

    topbarButton.style.setProperty('--x', x + 'px');
    topbarButton.style.setProperty('--y', y + 'px');
}

// buttonbeau.onmousemove = function(e){
//     const xx = e.pageX - buttonbeau.offsetLeft;
//     const yy = e.pageY- buttonbeau.offsetTop;

//     buttonbeau.style.setProperty('--xx', x + 'px');
//     buttonbeau.style.setProperty('--yy', y + 'px');
// }