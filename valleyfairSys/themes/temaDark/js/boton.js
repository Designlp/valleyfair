const topbarButton = document.querySelector('.topbar-button');

topbarButton.onmousemove = function(e){
    const x = e.pageX - topbarButton.offsetLeft;
    const y = e.pageY- topbarButton.offsetTop;

    topbarButton.style.setProperty('--x', x + 'px');
    topbarButton.style.setProperty('--y', y + 'px');
}


// const botonJS = document.querySelector('.botonJS');
// botonJS.onmousemove = function(e){
//     const x = e.pageX - botonJS.offsetLeft;
//     const y = e.pageY- botonJS.offsetTop;

//     botonJS.style.setProperty('--x', x + 'px');
//     botonJS.style.setProperty('--y', y + 'px');
// }


// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyDGTlX9dbqTYKal2T9SOlD5URV9J-sr98w",
    authDomain: "valleyfairbol.firebaseapp.com",
    projectId: "valleyfairbol",
    storageBucket: "valleyfairbol.appspot.com",
    messagingSenderId: "655740987460",
    appId: "1:655740987460:web:b80a912c50dd7a52b9b411"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


const db = firebase.database();
coleccionProductos = db.ref().child('productos');
bodyProductos = $('#bodyProductos').val();
//console.log(bodyProductos);  
$('form').submit(function (e) {
	e.preventDefault();
	let id = $('#id').val();
	let codigo = $('#codigo').val();
	let descripcion = $('#descripcion').val();
	let cantidad = $('#cantidad').val();
	let idFirebase = id;
	if (idFirebase == '') {
		idFirebase = coleccionProductos.push().key;
	};
	data = { codigo: codigo, descripcion: descripcion, cantidad: cantidad };
	actualizacionData = {};
	actualizacionData[`/${idFirebase}`] = data;
	coleccionProductos.update(actualizacionData);
	id = '';
	$('form').trigger('reset');
	$('#modalAltaEdicion').modal('hide');
});

//CHILD_ADDED
coleccionProductos.on('child_added', data => {
	let tr = document.createElement('tr')
	tr.id = data.key
	tr.innerHTML = mostrarProductos(data.val())
	document.getElementById('bodyProductos').appendChild(tr)
});