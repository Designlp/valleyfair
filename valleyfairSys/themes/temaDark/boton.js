const loginButton = document.querySelector('.login-button');
loginButton.onmousemove = function(e){
    const x = e.pageX - loginButton.offsetLeft;
    const y = e.pageY- loginButton.offsetTop;

    loginButton.style.setProperty('--x', x + 'px');
    loginButton.style.setProperty('--y', y + 'px');
}