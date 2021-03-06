// Your web app's Firebase configuration
let loading;
if(!localStorage.getItem('loading')){
	localStorage.setItem('loading','false');
	console.log(localStorage.getItem('loading'));
}
loading = localStorage.getItem('loading');
if(loading === 'false'){
	localStorage.setItem('loading','true');
	console.log(localStorage.getItem('loading'));
	location.reload(); 
}
console.log(localStorage.getItem('loading'));
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

$('form').submit(function (e) {
	localStorage.setItem('loading','false');
	console.log(localStorage.getItem('loading'));
	e.preventDefault();
	let id = $('#id').val();
	let codigo = $('#codigo').val();
	let descripcion = $('#descripcion').val();
	let cantidad = $('#cantidad').val();
	let puntuacion=$('input[name="rating"]:checked').val();
	let idFirebase = id;
	if (idFirebase == '') {
		idFirebase = coleccionProductos.push().key;
	};
	data = { codigo: codigo, descripcion: descripcion, cantidad: cantidad, puntuacion:puntuacion };
	actualizacionData = {};
	actualizacionData[`/${idFirebase}`] = data;
	coleccionProductos.update(actualizacionData);
	id = '';
	$('form').trigger('reset');
	window.location.assign("https://valleyfair.ml/valleyfairSys/index.php?a=feed"); 
});

//Programación de los botones
$('#btnNuevo').click(function () {
	$('#id').val('');
	$('#codigo').val('');
	$('#descripcion').val('');
	$('#cantidad').val('');
	$('input[name="rating"]:checked').val();
	$('form').trigger('reset');
	$('#modalAltaEdicion').modal('show');
	console.log($('#codigo').val(''));
});

