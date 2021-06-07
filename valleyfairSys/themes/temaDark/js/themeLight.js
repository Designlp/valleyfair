let change= true;
function cambiarColor(){
    change=!change;
    if(change){
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#15202B');
        document.documentElement.style.setProperty('--backgroundVentana', '#192734');
        document.documentElement.style.setProperty('--colorWhiteM', '#D7D7D7');
        document.documentElement.style.setProperty('--colorIndicadores', '#999');
        document.documentElement.style.setProperty('--backgroundSearch', '#213343');
        document.documentElement.style.setProperty('--backgroundhover', '#fdfdfd');
        document.documentElement.style.setProperty('--backgroundAnimate', '#1B2937');
        document.documentElement.style.setProperty('--imagesComentSVG', "url('images/icons/commentD.svg')");
        document.documentElement.style.setProperty('--imagesInactiveLikeSVG', "url('images/icons/heart-inactive.svg')");
        document.documentElement.style.setProperty('--imagesSharedSVG', "url('images/icons/shareD.svg')");
        document.documentElement.style.setProperty('--backgroundletrasamigos', '#1B2937');
    }

    //B5B5B5

    else{
        //Mod
        modificarColor(change);
        document.documentElement.style.setProperty('--background', '#EDF2F7');
        document.documentElement.style.setProperty('--backgroundVentana', '#F7FAFC');
        document.documentElement.style.setProperty('--colorWhiteM', '#5C5C5C');//787878
        document.documentElement.style.setProperty('--colorIndicadores', '#B5B5B5');
        document.documentElement.style.setProperty('--backgroundSearch', '#ebebeb');
        document.documentElement.style.setProperty('--backgroundhover', '#3b3b3b');
        document.documentElement.style.setProperty('--backgroundAnimate', '#64c1ff');
        document.documentElement.style.setProperty('--imagesComentSVG', "url('images/icons/commentDark.svg')");
        document.documentElement.style.setProperty('--imagesInactiveLikeSVG', "url('images/icons/heart-inactiveDark.svg')");
        document.documentElement.style.setProperty('--imagesSharedSVG', "url('images/icons/shareDDark.svg')");
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

// function changeIconComment(change) {
//     if(change)
//     {
//         var elements = document.getElementsByClassName('commentD'); // light
//         for(var i = 0; i < elements.length; i++){
//             elements[i].style.backgroundImage = "url('images/icons/commentD.svg')";
//         }
//     }else{
//         var elements = document.getElementsByClassName('commentD'); // dark
//         for(var i = 0; i < elements.length; i++){
//             elements[i].style.backgroundImage = "url('images/icons/commentD.svg')";
//         }
//     }
// }