let change= true;
function cambiarColor(){
    change=!change;
    if(change){
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#121519');
        document.documentElement.style.setProperty('--backgroundVentana', '#1A1E23');
    }
    else{
        //day
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#EDF2F7');
        document.documentElement.style.setProperty('--backgroundVentana', '#F7FAFC');
    }
}

function modificarColor(change) {
    if(change)
    {
        var elements = document.getElementsByClassName('prueba'); // get all elements
        for(var i = 0; i < elements.length; i++){
            elements[i].style.backgroundColor = "var(--main-day-color)";
        }
    }else{
        var elements = document.getElementsByClassName('prueba'); // get all elements
        for(var i = 0; i < elements.length; i++){
            elements[i].style.backgroundColor = "var(--main-nigth-color)";
        }
    }
}