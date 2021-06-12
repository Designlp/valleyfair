<center>
<?php
//Configuracion de los colores de los cuadros de texto, en caso de errores, cambios o informaciones
function error($message) {
	return '<div style="color: red">'.$message.'</div>';
}
function enabled($message) {
	return '<div style="color: green">'.$message.'</div>';
}
function info($message) {
	return '<div style="color: blue">'.$message.'</div>';
}

//Control de la version de PHP
if(version_compare(PHP_VERSION, '5.3.0') >= 0) {
    echo enabled('PHP Version: '.PHP_VERSION.' (OK)');
} else {
	echo error('PHP Version: '.PHP_VERSION.', (NOT OK) - You must update to at least: PHP 5.3');
}

//Control de MySQL

if(function_exists('mysqli_connect')) {
	echo enabled('MySQLi: Enabled (OK)');
} else {
	echo error('MySQLi: Disabled (NOT OK)');
}

//Control de cURL( proyecto de software consistente en una biblioteca y un intérprete de comandos orientado a la transferencia de archivos.)
if(function_exists('curl_version')) {
	echo enabled('cURL: Enabled (OK)');
} else {
	echo error('cURL: Disabled (NOT OK)');
}

//Control de GD Library

if(extension_loaded('gd') && function_exists('gd_info')) {
    echo enabled('GD Library: Enabled (OK)');
} else {
	echo error('GD Library: Not Enabled (NOT OK)');
}

//Control de OpenSSL

if(extension_loaded('openssl')) {
	echo enabled('OpenSSL: Enabled (OK)');
} else {
	echo error('OpenSSL: Disabled (NOT OK)');
}

//Control de Correo Electronico

if(function_exists('mail')) {
    echo enabled('Mail: Enabled (OK)');
} else {
    echo error('Mail: Not Enabled (NOT OK)');
}

echo info('post_max_size: '.ini_get('post_max_size'));
echo info('upload_max_filesize: '.ini_get('upload_max_filesize'));
echo info('max_execution_time: '.ini_get('max_execution_time'));
?>
</center>