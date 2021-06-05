let change= true;
function cambiarColor(){
    change=!change;
    if(change){
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#121519');
        document.documentElement.style.setProperty('--backgroundVentana', '#1A1E23');
        document.documentElement.style.setProperty('--colorWhiteM', '#D7D7D7');
        document.documentElement.style.setProperty('--backgroundSearch', '#1F252D');
    }
    else{
        //day
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#EDF2F7');
        document.documentElement.style.setProperty('--backgroundVentana', '#F7FAFC');
        document.documentElement.style.setProperty('--colorWhiteM', '#787878');
        document.documentElement.style.setProperty('--backgroundSearch', '#ebebeb');
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