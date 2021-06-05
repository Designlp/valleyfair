let change= true;
function cambiarColor(){
    change=!change;
    if(change){
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#121519');
        document.documentElement.style.setProperty('--backgroundVentana', '#1A1E23');
        document.documentElement.style.setProperty('--colorWhiteM', '#D7D7D7');
        document.documentElement.style.setProperty('--colorIndicadores', '#999');
        document.documentElement.style.setProperty('--backgroundSearch', '#1F252D');
        document.documentElement.style.setProperty('--backgroundhover', '#fdfdfd');
        document.documentElement.style.setProperty('--backgroundAnimate', '#1A1E23');
    }
    else{
        //Mod
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#EDF2F7');
        document.documentElement.style.setProperty('--backgroundVentana', '#F7FAFC');
        document.documentElement.style.setProperty('--colorWhiteM', '#5C5C5C');//787878
        document.documentElement.style.setProperty('--colorIndicadores', '#BDBDBD');
        document.documentElement.style.setProperty('--backgroundSearch', '#ebebeb');
        document.documentElement.style.setProperty('--backgroundhover', '#3b3b3b');
        document.documentElement.style.setProperty('--backgroundAnimate', '#64c1ff');
    }
}

function modificarColor(change) {
    if(change)
    {
        var elements = document.getElementsByClassName('topbar'); // get all elements
        for(var i = 0; i < elements.length; i++){
            elements[i].style.backgroundColor = "var(--background)";
        }
    }else{
        var elements = document.getElementsByClassName('topbar'); // get all elements
        for(var i = 0; i < elements.length; i++){
            elements[i].style.backgroundColor = "var(--color)";
        }
    }

}