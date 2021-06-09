let change;
//let changer = document.getElementById('changer');
window.onload=load();
function load(){
    //changer = document.getElementById('changer');
    if(!localStorage.getItem('change')){
        localStorage.setItem('change','false');
    }else{
        change = localStorage.getItem('change');
        if(change === 'true'){
            //changer.checked = true;
            //modificarColor('false');
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
            document.documentElement.style.setProperty('--backgroundletrasamigos', '#3b3b3b');
            document.documentElement.style.setProperty('--colorNotifications', '#ffffff');
            document.documentElement.style.setProperty('--color1Notifications', '#149FFE');
            document.documentElement.style.setProperty('--backgroundTopBar', '#EDF2F7');
        }
        else{
            //modificarColor('true');
            //changer.checked = false;
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
            document.documentElement.style.setProperty('--backgroundletrasamigos', '#f8f8f8');
            document.documentElement.style.setProperty('--colorNotifications', '#149FFE');
            document.documentElement.style.setProperty('--color1Notifications', '#15202B');
            document.documentElement.style.setProperty('--backgroundTopBar', '#149FFE');

        }
    }
}

function cambiarColor(){
    change = localStorage.getItem('change');
    if(change === 'true'){
        //modificarColor(change);
        //changer.checked = false;
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
        document.documentElement.style.setProperty('--backgroundletrasamigos', '#f8f8f8');
        document.documentElement.style.setProperty('--colorNotifications', '#149FFE');
        document.documentElement.style.setProperty('--color1Notifications', '#15202B');
        document.documentElement.style.setProperty('--backgroundTopBar', '#149FFE');
        localStorage.setItem('change','false');
    }

    //B5B5B5

    else{
        //Mod
        //changer.checked = true;
        //modificarColor(change);
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
        document.documentElement.style.setProperty('--backgroundletrasamigos', '#3b3b3b');
        document.documentElement.style.setProperty('--colorNotifications', '#ffffff');
        document.documentElement.style.setProperty('--color1Notifications', '#149FFE');
        document.documentElement.style.setProperty('--backgroundTopBar', '#EDF2F7');
        localStorage.setItem('change','true');
    }
}

// function modificarColor(change) {
//     if(change === 'true')
//     {
//         var elements = document.getElementsByClassName('topbar'); // get all elements
//         for(var i = 0; i < elements.length; i++){
//             elements[i].style.backgroundColor = "var(--background)";
//         }
//     }else{
//         var elements = document.getElementsByClassName('topbar'); // get all elements
//         for(var i = 0; i < elements.length; i++){
//             elements[i].style.backgroundColor = "var(--color)";
//         }
//     }
// }

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