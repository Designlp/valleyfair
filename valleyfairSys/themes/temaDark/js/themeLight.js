let change= true;
function cambiarColor(){
    change=!change;
    if(change){
        modificarColor(change);
        document.documentElement.style.setProperty('--main-day-color', '#317EEB');
    }
    else{
        //day
        modificarColor(change);
        document.documentElement.style.setProperty('--main-day-color', '#ff00ff');
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