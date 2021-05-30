const btnSend = document.querySelector('.btnSend');
btnSend.onmousemove = function(e){
    const x = e.pageX - btnSend.offsetLeft;
    const y = e.pageY- btnSend.offsetTop;

    btnSend.style.setProperty('--x', x + 'px');
    btnSend.style.setProperty('--y', y + 'px');
}