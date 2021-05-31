<?php
// Language Name
$name = 'Español';

// Language Author
$author = 'phpSocial';

// Language URL
$url = 'http://phpsocial.com';

$LNG['lang_direction'] = 'ltr';

$LNG['user_success'] = 'Usuario creado exitosamente';
$LNG['user_exists'] = 'Este usuario ya existe';
$LNG['email_exists'] = 'Este email ya esta en uso';
$LNG['all_fields'] = 'Todos los campos son requeridos';
$LNG['user_alnum'] = 'El usuario debe estar formado sólo por letras y números';
$LNG['user_too_short'] = 'El usuario debe tener entre 3 y 32 caracteres';
$LNG['user_limit'] = 'Demasiadas cuentas credas desde esta dirección IP';
$LNG['invalid_email'] = 'Email invalido';
$LNG['invalid_user_pw'] = 'Usuario y/o contraseña incorrectos';
$LNG['invalid_captcha'] = 'Captcha invalido';
$LNG['activate_email'] = 'Un link de activación fue enviado a tu email';
$LNG['account_activated'] = 'Su cuenta ha sido activada';
$LNG['log_out'] = 'Cerrar la sesión';
$LNG['hello'] = 'Hola';
$LNG['register'] = 'Registrar';
$LNG['login'] = 'Iniciar sesión';
$LNG['connect'] = 'Conectar';
$LNG['password'] = 'Contraseña';
$LNG['username'] = 'Usuario';
$LNG['email'] = 'Correo electrónico';
$LNG['captcha'] = 'Captcha';
$LNG['username_or_email'] = 'Usuario o correo electrónico';
$LNG['welcome_title'] = 'Bienvenido';
$LNG['welcome_desc'] = 'a nuestra pagina web';
$LNG['welcome_about'] = 'comparte tus proyectos, visita a otros que te parezcan interesantes y reacciona a ellos';
$LNG['forgot_password'] = 'Olvidaste tu contraseña?';
$LNG['remember_me'] = 'Recordarme';
$LNG['all_rights_reserved'] = 'Todos los derechos reservados';

$LNG['welcome_one'] = 'Conectar';
$LNG['welcome_two'] = 'Compartir';
$LNG['welcome_three'] = 'Descubrir';
$LNG['welcome_one_desc'] = 'Comparte y encuentra proyectos con los demas';
$LNG['welcome_two_desc'] = 'Reacciona a los proyectos que mas te gusten';
$LNG['welcome_three_desc'] = 'Comparte momentos memorables cootros usuarios';
$LNG['latest_users'] = 'Ultimos usuarios';

// NOTIFICATION BOXES
$LNG['settings_saved'] = 'Configuración guardada';
$LNG['nothing_saved'] = 'Sin cambios guardados';
$LNG['password_changed'] = 'Nueva contraseña guardada';
$LNG['nothing_changed'] = 'Sin cambios';
$LNG['incorrect_date'] = 'La fecha indicada no es valida, porfavor seleccione otra.';
$LNG['password_not_changed'] = 'La contraseña no cambio.';
$LNG['image_saved'] = 'Imagen guardada';
$LNG['error'] = 'Error';
$LNG['no_file'] = 'No seleccionaste ningún archivo para subir, o el archivo seleccionado esta vacio.';
$LNG['file_exceeded'] = 'El tamaño del archivo seleccionado no debe exceder <strong>%s</strong> MB.';
$LNG['file_format'] = 'El formato de archivo seleccionado no es compatible. Sube <strong>%s</strong> formato de archivo';
$LNG['image_removed'] = 'Imagen removida';
$LNG['bio_description'] = 'La descripción de la biografía debe ser de %s caracteres o menos.';
$LNG['valid_email'] = 'Porfavor introduce un correo electronico válido.';
$LNG['valid_url'] = 'Por favor introduce un URL válido.';
$LNG['valid_country'] = 'Por favor selecciona un país valido.';
$LNG['password_too_short'] = 'La contraseña debe contener al menos 6 caracteres.';
$LNG['password_not_match'] = 'La contraseña no coincide.';
$LNG['wrong_current_password'] = 'La contraseña que introduciste es incorrecta.';
$LNG['username_not_found'] = 'No pudimos encontrar al usuario buscado.';
$LNG['userkey_not_found'] = 'El usuario o la llave de restablecimiento son incorrectos, asegúrese de que ha introducido los datos correctos.';
$LNG['password_reseted'] = 'Cambiaste de contraseña correctamente';
$LNG['email_sent'] = 'Correo enviado';
$LNG['email_reset'] = 'Se ha enviado un correo electrónico con instrucciones para restablecer la contraseña. Por favor, permítanos hasta 24 horas para entregar el mensaje, también compruebe su bandeja de Spam si no lo encuentra en su bandeja de entrada.';
$LNG['user_has_been_deleted'] = 'El usuario <strong>%s</strong> ha sido borrado.';
$LNG['theme_changed'] = 'Tema cambiado';
$LNG['notif_saved'] = 'Notificaciones cambiadas';
$LNG['notif_success_saved'] = 'Las notificaciones han sido actualizadas correctamente.';

// MAIL CONTENT
$LNG['welcome_mail'] = 'Bienvenido a %s';
$LNG['user_created'] = 'Gracias por unirte <strong>%s</strong>.<br /><br />Tu usuario: <strong>%s</strong><br />]Tu contraseña: <strong>%s</strong><br /><br />Puedes inciar sesión en: <a href="%s" target="_blank">%s</a>';
$LNG['recover_mail'] = 'Contraseña recuperada';
$LNG['recover_content'] = 'Se ha solicitado la recuperación de la contraseña, si no ha realizado esta acción por favor ignore este correo. <br /><br />Tu contraseña: <strong>%s</strong><br />Tu clave de restablecimiento: <strong>%s</strong><br /><br />Puede restablecer su contraseña accediendo al siguiente enlace: <a href="%s" target="_blank">%s</a>';
$LNG['email_hello'] = 'Hola <strong>%s</strong>,<br /><br />';
$LNG['email_unsub'] = '<br /><br /><span style="color: #aaa;">Este mensaje fue enviado automáticamente, si no desea recibir este tipo de correos electrónicos de <strong>%s</strong> en un futuro, porfavor <a href="%s">Dessuscribase</a>.</span>';
$LNG['email_copy'] = '<br /><br /><span style="color: #aaa;">Copyright &copy; '.date('Y').' <a href="%s">%s</a>. Todos los derechos reservados.';
$LNG['ttl_comment_email'] = '%s comento en tu correo';
$LNG['comment_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> comento en tu <strong><a href="%s">mensaje.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_like_email'] = '%s le gustó tu mensaje';
$LNG['like_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> le gusto tu <strong><a href="%s">mensaje.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_like_c_email'] = '%s le gustó tu comentario';
$LNG['like_c_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> le gustó tu <strong><a href="%s">comentario.</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_new_friend_email'] = '%s ha enviado una solicitud de amistad';
$LNG['new_friend_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> quiere que seamos amigos en %s.'.$LNG['email_unsub'];
$LNG['ttl_friendship_confirmed_email'] = '%s acepto tu solicitud de amistad';
$LNG['friendship_confirmed_email'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> ha aceptado tu amistad en %s.'.$LNG['email_unsub'];
$LNG['ttl_page_invite'] = '%s te ha invitado a que sigas su página';
$LNG['page_invite'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> te ha invitado a que sigas la pagina <strong><a href="%s">%s</a></strong>'.$LNG['email_unsub'];
$LNG['ttl_group_invite'] = '%s te ha invitado a unirte a un grupo';
$LNG['group_invite'] = $LNG['email_hello'].'<strong><a href="%s">%s</a></strong> te ha invitado a unirte al grupo <strong><a href="%s">%s</a>.</strong>'.$LNG['email_unsub'];
$LNG['ttl_suspended_account_mail'] = 'Tu cuenta ha sido suspendida';
$LNG['suspended_account_mail'] = $LNG['email_hello'].'Tu cuenta ha sido suspendida. Si piensas que se trata de un error contactanos'.$LNG['email_copy'];
$LNG['ttl_confirm_email'] = 'Activa tu cuenta';
$LNG['confirm_email'] = $LNG['email_hello'].'Gracias por unirte <strong>%s</strong>. Finaliza tu registro <a href="%s" target="_blank">haciendo click aqui</a>.'.$LNG['email_copy'];

// PHP MODULES
$LNG['openssl_error'] = 'Debes habilitar la extension <strong>OpenSSL</strong> en este servidor';
$LNG['curl_error'] = 'Se recomienda que la extension <strong>cURL</strong> este habilitada en este server';

// ADMIN PANEL
$LNG['general_link'] = 'General';
$LNG['security_link'] = 'Seguridad';
$LNG['manage_users'] = 'Gestionar usuarios';
$LNG['registration'] = 'Registros';
$LNG['limits'] = 'Limites';
$LNG['emails'] = 'Correos';

$LNG['theme_install'] = 'Para instalar un nuevo tema, subelo en la carpeta <strong>temas</strong>';
$LNG['plugin_install'] = 'Para instalar un nuevo puglin, subelo en la carpeta <strong>plugins</strong>';
$LNG['language_install'] = 'Para instalar un nuevo lenguaje, subelo en la carpeta <strong>lenguajes</strong> folder';
$LNG['author_title'] = 'Visita la pagina del autor';
$LNG['version'] = 'Version';
$LNG['active'] = 'Activar';
$LNG['activate'] = 'Activado';
$LNG['deactivate'] = 'Desactivado';
$LNG['by'] = 'Por';
$LNG['settings'] = 'Configuraciones';

// FEED
$LNG['welcome_feed_ttl'] = 'Bienvenido a tu Nuevo Inicio';
$LNG['welcome_feed'] = 'Todas las publicaciones de tus amigos aparecerán en esta página, empieza por hacer nuevos amigos.';
$LNG['leave_comment'] = 'Deja un comentario...';
$LNG['post'] = 'Publica';
$LNG['view_more_messages'] = 'Cargar mas';
$LNG['view_more_comments'] = 'Ver mas comentarios';
$LNG['delete_q_comment'] = 'Estas seguro de borrar este comentario?';
$LNG['delete_q_message'] = 'Estas seguro de borrar este mensaje?';
$LNG['delete_q_chat'] = 'Estas seguro de borrar este chat?';
$LNG['report_this_comment'] = 'Reportar este comentario';
$LNG['view_more'] = 'Ver mas';
$LNG['food'] = 'Yo comi: <strong>%s</strong>';
$LNG['visited'] = 'Yo visite:  <strong>%s</strong>';
$LNG['played'] = 'Yo jugue: <strong>%s</strong>';
$LNG['watched'] = 'Yo vi: <strong>%s</strong>';
$LNG['listened'] = 'Yo escuche: <strong>%s</strong>';
$LNG['shared_title'] = 'compartir <a href="%s" rel="loadpage"><strong>%s</strong></a>\'s <a href="%s" rel="loadpage"><strong>mensaje</strong></a>.';
$LNG['group_title'] = 'publicar en el grupo <a href="%s" rel="loadpage"><strong>%s</strong></a>.';
$LNG['form_title'] = 'Actualiza tu estado';
$LNG['comment_wrong'] = 'Algo ha ido mal, por favor actualice la página e inténtelo de nuevo.';
$LNG['comment_too_long'] = 'Lo sentimos, el máximo de caracteres permitido por comentario es <strong>%s</strong>.';
$LNG['comment_error'] = 'Lo sentimos, no pudimos publicar el comentario, actualice la página y vuelva a intentarlo.';
$LNG['message_private'] = 'Lo sentimos, este mensaje es privado, solo el autor del mensaje puede verlo.';
$LNG['message_private_ttl'] = 'Mensaje privado';
$LNG['message_semi_private'] = 'Lo sentimos, este mensaje es privado, solo los amigos y el autor de este mensaje pueden verlo.';
$LNG['message_semi_private_ttl'] = 'Mensaje privado';
$LNG['login_to_lcs'] = 'Inicie sesión para dar me gusta, comentar o compartir';
$LNG['message'] = 'Mensaje';
$LNG['comment'] = 'Comentario';
$LNG['share'] = 'Compartir';
$LNG['camera'] = 'Camara';
$LNG['capture'] = 'Captura';
$LNG['send'] = 'Enviar';
$LNG['shared_success'] = 'La publicación se ha compartido correctamente en tu <a href="%s" rel="loadpage"><strong>cronología</strong></a>.';
$LNG['no_shared'] = 'Lo siento, pero este mensaje no se puede compartir.';
$LNG['share_desc'] = '¿Estás seguro de que deseas compartir este mensaje en tu línea de tiempo?';
$LNG['cancel'] = 'Cancelar';
$LNG['close'] = 'Cerrar';
$LNG['download'] = 'Descargar';

// REPORT
$LNG['1_not_exists'] = 'El mensaje informado no existe.';
$LNG['0_not_exists'] = 'El comentario informado no existe.';
$LNG['1_already_reported'] = 'Este mensaje ya ha sido reportado y será revisado en el menor tiempo posible, gracias.';
$LNG['0_already_reported'] = 'Este comentario ya ha sido reportado y será revisado en el menor tiempo posible, gracias.';
$LNG['1_is_safe'] = 'Este mensaje está marcado como <strong>seguro</strong> por un administrador, gracias por sus comentarios.';
$LNG['0_is_safe'] = 'Este comentario está marcado como <strong> seguro </strong> por un administrador. Gracias por tus comentarios.';
$LNG['1_report_added'] = 'El mensaje ha sido informado, gracias por sus comentarios.';
$LNG['0_report_added'] = 'El comentario ha sido informado, gracias por sus comentarios.';
$LNG['1_report_error'] = 'Lo sentimos, pero se produjo un error al informar de este mensaje. Actualice la página y vuelva a intentarlo.';
$LNG['0_report_error'] = 'Lo sentimos, pero se produjo un error al informar sobre este comentario. Actualice la página y vuelva a intentarlo.';
$LNG['1_is_deleted'] = 'El mensaje ha sido eliminado, gracias por sus comentarios.';
$LNG['0_is_deleted'] = 'El comentario ha sido eliminado, gracias por sus comentarios.';
$LNG['rep_comment'] = 'Comentario';

// SIDEBAR
$LNG['groups'] = 'Grupos';
$LNG['events'] = 'Eventos';
$LNG['archive'] = 'Archivos';
$LNG['recent'] = 'Reciente';
$LNG['all_events'] = 'Todos los eventos';
$LNG['sidebar_map'] = 'Lugares';
$LNG['sidebar_food'] = 'Comidas';
$LNG['sidebar_visited'] = 'Visitas';
$LNG['sidebar_game'] = 'Juegos';
$LNG['sidebar_picture'] = 'Fotos';
$LNG['sidebar_video'] = 'Videos';
$LNG['sidebar_music'] = 'Musica';
$LNG['sidebar_shared'] = 'Compartir';
$LNG['sidebar_pages'] = 'Páginas';
$LNG['sidebar_groups'] = 'Grupos';
$LNG['sidebar_pokes'] = 'Pokes';
$LNG['all_time'] = 'Todo el tiempo';
$LNG['friends'] = 'Amigos';
$LNG['mutual' ] = 'Mutuo';
$LNG['welcome'] = 'Bienvenido';
$LNG['filter_age'] = 'Edad';
$LNG['all_ages'] = 'Todas las edades';
$LNG['filter_gender'] = 'Género';
$LNG['sidebar_male'] = 'Masculino';
$LNG['sidebar_female'] = 'Femenino';
$LNG['all_genders'] = 'Todos los géneros';
$LNG['online_friends'] = 'Amigos en línea';
$LNG['sidebar_likes'] = 'Gustos';
$LNG['sidebar_comments'] = 'Comentarios';
$LNG['sidebar_friendships'] = 'Amistades';
$LNG['sidebar_chats'] = 'Chats';
$LNG['sidebar_birthdays'] = 'Cumpleaños';
$LNG['sidebar_suggestions'] = 'Sugerencias de amigos';
$LNG['sidebar_trending'] = 'Tendencia de los temas';
$LNG['sidebar_friends_activity'] = 'Actividad de amigos';
$LNG['friends_birthdays'] = 'Cumpleaños';
$LNG['sidebar_people'] = 'People';
$LNG['sidebar_tag'] = 'Personas';

// MESSAGES / CHAT
$LNG['lonely_here'] = 'Está solo aquí, ¿qué tal hacer algunos amigos?';
$LNG['chat_too_long'] = 'Lo sentimos, pero el número máximo de caracteres permitido por mensaje de chat es <strong>%s</strong>.';
$LNG['blocked_by'] = 'El mensaje no se pudo enviar. <strong>%s</strong> te bloqueó.';
$LNG['blocked_user'] = 'El mensaje no se pudo enviar. Tu\' has bloqueado <strong>%s</strong>.';
$LNG['chat_self'] = 'Lo sentimos, pero no podemos enviarte mensajes de chat a ti mismo.';
$LNG['chat_no_user'] = 'Debes seleccionar un usuario con el que chatear.';
$LNG['view_more_conversations'] = 'Ver más conversaciones';
$LNG['block'] = 'Cuadra';
$LNG['unblock'] = 'Desatascar';
$LNG['poke'] = 'Poke';
$LNG['poked'] = 'Poked';
$LNG['conversation'] = 'Conversacion';
$LNG['start_conversation'] = 'Puede iniciar una conversación eligiendo a una persona de su lista de amigos.';
$LNG['send_message'] = 'Enviar mensaje';

// MESSAGE FORM
$LNG['label_food'] = 'Agrega un lugar donde comiste';
$LNG['label_game'] = 'Agregar un juego jugado';
$LNG['label_visited'] = 'Agregar una ubicación visitada';
$LNG['label_map'] = 'Agregar un lugar';
$LNG['label_video'] = 'Comparte una película o un enlace de YouTube o Vimeo';
$LNG['label_music'] = 'Comparte una canción o un enlace de SoundCloud';
$LNG['label_image'] = 'Subir imagenes';
$LNG['message_form'] = '¿Qué tienes en mente?';
$LNG['file_too_big'] = 'El tamaño de archivo seleccionado (%s) es demasiado grande, el tamaño de archivo máximo permitido es <strong>%s</strong>.';
$LNG['format_not_exist'] = 'El formato de archivo seleccionado (%s) no es válido, suba solo el formato de imagen <strong>%s</strong>.';
$LNG['privacy_no_exist'] = 'La privacidad seleccionada no existe, actualice la página y vuelva a intentarlo.';
$LNG['event_not_exist'] = 'El evento seleccionado no existe, actualice la página y vuelva a intentarlo.';
$LNG['change_privacy'] = '¿Quién debería ver el mensaje?';

$LNG['message_too_long'] = 'Lo sentimos, pero el número máximo de caracteres permitido por mensaje es <strong>%s</strong>.';
$LNG['files_selected'] = 'imagen(es) seleccionada(s)';
$LNG['too_many_images'] = 'El número máximo de imágenes que se permite subir por mensaje es <strong>%s</strong>, intentaste subir imágenes <strong>%s</strong>.';

// USER PANEL
$LNG['user_menu_general'] = 'General';
$LNG['user_menu_security'] = 'Contraseña';
$LNG['user_menu_avatar'] = 'Imágenes de perfil';
$LNG['user_menu_notifications'] = 'Notificaciones';
$LNG['user_menu_privacy'] = 'Intimidad';
$LNG['user_menu_delete'] = $LNG['user_ttl_delete'] = 'Borrar cuenta';
$LNG['user_menu_blocked'] = $LNG['user_ttl_blocked'] = 'Usuarios bloqueados';
$LNG['other'] = 'Otro';

$LNG['user_ttl_general'] = 'Configuración general';
$LNG['user_ttl_security'] = 'Configuración de contraseña';
$LNG['user_ttl_avatar'] = 'Configuración de imágenes de perfil';
$LNG['user_ttl_notifications'] = 'Configuracion de notificaciones';
$LNG['user_ttl_privacy'] = 'La configuración de privacidad';

$LNG['blocked_desc'] = 'Las personas bloqueadas ya no pueden ver las cosas que publicas en tu línea de tiempo, mensajes o agregarte como amigo.';
$LNG['delete_acc_desc'] = 'Su cuenta se eliminará permanentemente junto con todo el contenido relacionado.';

$LNG['ttl_first_name'] = $LNG['first_name'] = 'Primer nombre';
$LNG['sub_first_name'] = 'Ponga su primer nombre';

$LNG['ttl_last_name'] = $LNG['last_name'] = 'Apellido';
$LNG['sub_last_name'] = 'Ingrese su apellido';

$LNG['ttl_email'] = 'Email';
$LNG['sub_email'] = 'Email no se mostrará';

$LNG['address'] = 'Dirección';
$LNG['sub_address'] = 'La dirección en la que vive';

$LNG['ttl_location'] = 'Ciudad';
$LNG['sub_location'] = 'La ciudad en la que vives';

$LNG['ttl_website'] = 'Sitio web';
$LNG['sub_website'] = 'Tu sitio web, blog o página personal';

$LNG['ttl_gender'] = 'Género';
$LNG['sub_gender'] = 'Selecciona tu género';

$LNG['interests'] = 'Intereses';
$LNG['sub_interested_in'] = 'Personas que te interesan';

$LNG['ttl_country'] = 'País';
$LNG['sub_country'] = 'El pais en el que vives';

$LNG['ttl_work'] = 'Lugar de trabajo';
$LNG['sub_work'] = 'Ingrese el nombre de la empresa donde está trabajando';

$LNG['ttl_school'] = 'Escuela';
$LNG['sub_school'] = 'Ingrese el nombre de la escuela a la que asistió';

$LNG['ttl_profile'] = 'Perfil';
$LNG['sub_profile'] = 'Visibilidad del perfil';

$LNG['ttl_messages'] = 'Mensaje';
$LNG['sub_messages'] = 'La forma predeterminada de publicar mensajes';

$LNG['ttl_offline'] = 'Estado del chat';
$LNG['sub_offline'] = 'El estado de visibilidad del chat';

$LNG['ttl_facebook'] = 'Facebook';
$LNG['sub_facebook'] = 'Su ID de perfil de Facebook.';

$LNG['ttl_twitter'] = 'Twitter';
$LNG['sub_twitter'] = 'Su ID de perfil de Twitter.';

$LNG['ttl_google'] = 'Google+';
$LNG['sub_google'] = 'Su ID de perfil de google +.';

$LNG['ttl_bio'] = 'Bio';
$LNG['sub_bio'] = 'Acerca de ti (160 caracteres o menos)';

$LNG['ttl_birthdate'] = 'Fecha de nacimiento';
$LNG['sub_birthdate'] = 'Seleccione la fecha en que nació';

$LNG['ttl_upload_avatar'] = 'Sube la imagen de perfil seleccionada';
$LNG['ttl_delete_avatar'] = 'Elimina tu imagen de perfil actual';

$LNG['privacy'] = 'Privacidad';
$LNG['public'] = 'Pública';
$LNG['private'] = 'Privado';
$LNG['report'] = 'Reportar';
$LNG['delete_message'] = 'Borrar mensaje';
$LNG['remove_user'] = 'Eliminar usuario';

$LNG['opt_offline_off'] = 'En línea (cuando esté disponible)';
$LNG['opt_offline_on'] = 'Siempre sin Conexión';

$LNG['no_gender'] = 'Sin género';
$LNG['male'] = 'Masculino';
$LNG['female'] = 'Femenino';
$LNG['men'] = 'Hombres';
$LNG['women'] = 'Mujeres';

$LNG['contact_information'] = 'Información del contacto';
$LNG['basic_information'] = 'Información básica';
$LNG['other_accounts'] = 'Otras cuentas';
$LNG['work_and_education'] = 'Trabajo y Educación';

$LNG['ttl_upload'] = 'Subir';
$LNG['ttl_new_password'] = 'Nueva contraseña';
$LNG['sub_new_password'] = 'Ingrese una nueva contraseña (al menos 6 caracteres)';
$LNG['ttl_repeat_password'] = 'Repite la contraseña';
$LNG['sub_repeat_password'] = 'Repite tu nueva contraseña';
$LNG['ttl_current_password'] = 'Contraseña actual';
$LNG['sub_current_password'] = 'Introduce tu contraseña actual';
$LNG['save_changes'] = 'Guardar cambios';
$LNG['profile_images_desc'] = 'Haz clic en la foto de perfil o en la portada para cambiarlas.';
$LNG['confirm'] = 'Confirmar';
$LNG['approve'] = 'Aprobar';
$LNG['requests'] = 'Solicitudes';
$LNG['blocked'] = 'Bloqueados';
$LNG['remove'] = 'Eliminar';
$LNG['decline'] = 'Rechazar';
$LNG['confirmed'] = 'Confirmado';
$LNG['declined'] = 'Rechazado';
$LNG['make_admin'] = 'Hacer administrador';
$LNG['remove_admin'] = 'Quitar administrador';
$LNG['default'] = 'Por defecto';
$LNG['make_default'] = 'Hacer por defecto';

$LNG['ttl_notificationl'] = 'Notificaciones de Me gusta';
$LNG['sub_notificationl'] = 'Mostrar alertas y notificaciones para <strong>Me gusta</strong>';

$LNG['ttl_notificationc'] = 'Comentarios Notificaciones';
$LNG['sub_notificationc'] = 'Mostrar alertas y notificaciones para <strong>Comentarios</strong>';

$LNG['ttl_notifications'] = 'Notificaciones de Mensajes';
$LNG['sub_notifications'] = 'Mostrar alertas y notificaciones para <strong>Mensajes Compartidos</strong>';

$LNG['ttl_notificationd'] = 'Notificaciones de Chat';
$LNG['sub_notificationd'] = 'Mostrar alertas y notificaciones para <strong>Chats</strong>';

$LNG['ttl_notificationf'] = 'Notificaciones de Amigos';
$LNG['sub_notificationf'] = 'Mostrar alertas y notificaciones para <strong>Amistades Confirmadas</strong>';

$LNG['ttl_notificationx'] = 'Notificaciones de Páginas';
$LNG['sub_notificationx'] = 'Mostrar alertas y notificaciones para invitaciones de <strong>Me gusta una Página</strong>';

$LNG['ttl_notificationg'] = 'Notificaciones de Grupos';
$LNG['sub_notificationg'] = 'Mostrar alertas y notificaciones para <strong>Invitaciones de Grupos</strong>';

$LNG['ttl_notificationp'] = 'Notificación de Pokes';
$LNG['sub_notificationp'] = 'Muestra alertas y notificaciones para <strong>Pokes</strong>';

$LNG['ttl_sound_nn'] = 'Sonido de notificaciones';
$LNG['sub_sound_nn'] = 'Reproducir un sonido cuando se recibe una nueva notificación';

$LNG['ttl_sound_nc'] = 'Sonido de chat';
$LNG['sub_sound_nc'] = 'Reproducir un sonido cuando se recibe un nuevo mensaje de chat';

$LNG['ttl_email_comment'] = 'Correos electrónicos sobre comentarios';
$LNG['sub_email_comment'] = 'Reciba correos electrónicos cuando alguien comente sus mensajes';

$LNG['ttl_email_like'] = 'Correos electrónicos sobre Me gusta';
$LNG['sub_email_like'] = 'Reciba correos electrónicos cuando a alguien le gusten sus mensajes';

$LNG['ttl_email_new_friend'] = 'Correos electrónicos sobre amistades';
$LNG['sub_email_new_friend'] = 'Reciba correos electrónicos cuando alguien envíe o confirme una solicitud de amistad';

$LNG['ttl_email_page'] = 'Invitación a la página por correo electrónico';
$LNG['sub_email_page'] = 'Reciba correos electrónicos cuando alguien lo invite a darle Me gusta a una página';

$LNG['ttl_email_group'] = 'Invitación de grupo por correo electrónico';
$LNG['sub_email_group'] = 'Reciba correos electrónicos cuando alguien le envíe una invitación a un grupo';

$LNG['user_ttl_sidebar'] = 'Ajustes';

// ADMIN PANEL
$LNG['admin_login'] = 'Inicio de sesión de administrador';
$LNG['admin_user_name'] = 'Nombre de usuario';
$LNG['desc_admin_user'] = 'Escriba su nombre de usuario de administrador';
$LNG['admin_pass'] = 'Contraseña';
$LNG['desc_admin_pass'] = 'Escriba su contraseña de administrador';
$LNG['admin_ttl_sidebar'] = 'Menú';
$LNG['admin_menu_logout'] = 'Cerrar sesión';
$LNG['admin_ttl_dashboard']			= $LNG['admin_menu_dashboard']		= 'Dashboard';
$LNG['admin_ttl_site_settings'] 	= $LNG['admin_menu_site_settings'] 	= 'Configuración del sitio';
$LNG['admin_ttl_themes'] 			= $LNG['admin_menu_themes'] 		= 'Temas';
$LNG['admin_ttl_plugins'] 			= $LNG['admin_menu_plugins'] 		= 'Complementos';
$LNG['admin_ttl_languages']			= $LNG['admin_menu_languages'] 		= 'Idiomas';
$LNG['admin_ttl_stats'] 			= $LNG['admin_menu_stats'] 			= 'Estadísticas';
$LNG['admin_ttl_security'] 			= $LNG['admin_menu_security'] 		= 'Contraseña';
$LNG['admin_ttl_users'] 			= $LNG['admin_menu_users'] 			= 'Administrar usuarios';
$LNG['admin_ttl_manage_pages']		= $LNG['admin_menu_manage_pages']	= 'Administrar páginas';
$LNG['admin_ttl_manage_groups']		= $LNG['admin_menu_manage_groups'] 	= 'Administrar grupos';
$LNG['admin_ttl_manage_reports']	= $LNG['admin_menu_manage_reports'] = 'Gestionar informes';
$LNG['admin_ttl_manage_ads']		= $LNG['admin_menu_manage_ads'] 	= 'Administrar anuncios';
$LNG['admin_ttl_info_pages']		= $LNG['admin_menu_info_pages'] 	= 'Páginas de información';

$LNG['list_users'] = 'Todos los usuarios';
$LNG['list_moderators'] = 'Moderadores';
$LNG['list_verified'] = 'Verificado';
$LNG['list_suspended'] = 'Suspendido';

$LNG['title'] = 'Título';
$LNG['admin_sub_title'] = 'The site\'s title';

$LNG['logo'] = 'Logo';
$LNG['admin_sub_logo'] = 'The site\'s logo (PNG format)';

$LNG['admin_ttl_captcha'] = 'Captcha';
$LNG['admin_sub_captcha'] = 'Habilitar captcha al registrarse';

$LNG['admin_ttl_timestamp'] = 'Marca de tiempo';
$LNG['admin_sub_timestamp'] = 'The Messages, Comments and Chat timestamp type';

$LNG['admin_ttl_timezone'] = 'Zona horaria';
$LNG['admin_sub_timezone'] = 'Zona horaria compatible con PHP';

$LNG['admin_sub_pages'] = 'Habilitar la funcionalidad de páginas';
$LNG['admin_sub_groups'] = 'Habilite la funcionalidad de Grupos';

$LNG['admin_ttl_msg_perpage'] = 'Mensajes';
$LNG['admin_sub_msg_perpage'] = 'El número de mensajes por página.';

$LNG['admin_ttl_com_perpage'] = 'Comentarios';
$LNG['admin_sub_com_perpage'] = 'El número de comentarios por mensaje.';

$LNG['admin_ttl_chat_perpage'] = 'Chat';
$LNG['admin_sub_chat_perpage'] = 'El número de conversaciones de chat por página.';

$LNG['admin_ttl_smiles'] = 'Emoticones';
$LNG['admin_sub_smiles'] = 'Permitir y transformar códigos cortos en Mensajes, Comentarios y Chat en emoticones';

$LNG['admin_ttl_permalinks'] = 'Enlaces permanentes';
$LNG['admin_sub_permalinks'] = 'Habilitar la estructura de URL de enlaces permanentes (ejemplo.com/perfil/nombredeusuario)';

$LNG['admin_ttl_email_activation'] = 'Activación por correo electrónico';
$LNG['admin_sub_email_activation'] = 'Requerir que la cuenta se active por correo electrónico';

$LNG['admin_ttl_nperpage'] = 'Notificaciones';
$LNG['admin_sub_nperpage'] = 'El número de notificaciones que se mostrarán (página de notificaciones)';

$LNG['admin_ttl_msg_limit'] = 'Caracteres del mensaje';
$LNG['admin_sub_msg_limit'] = 'La cantidad de caracteres permitidos por mensaje.';

$LNG['admin_ttl_chat_limit'] = 'Personajes de chat';
$LNG['admin_sub_chat_limit'] = 'La cantidad de caracteres permitidos por conversación.';

$LNG['admin_ttl_email_reg'] = 'Correo electrónico al registrarse';
$LNG['admin_sub_email_reg'] = 'Usuarios email en el registro';

$LNG['admin_ttl_notificationsm'] = 'Notificaciones de mensajes';
$LNG['admin_sub_notificationsm'] = 'El intervalo de actualización para comprobar si hay nuevos mensajes (en segundos)';

$LNG['admin_ttl_notificationsn'] = 'Notificaciones de eventos';
$LNG['admin_sub_notificationsn'] = 'El intervalo de actualización para comprobar si hay notificaciones de nuevos eventos (en segundos)';

$LNG['admin_ttl_chatrefresh'] = 'Actualizar chat';
$LNG['admin_sub_chatrefresh'] = 'El tiempo con qué frecuencia se actualiza la ventana de chat con nuevos mensajes (en segundos)';

$LNG['admin_ttl_timeonline'] = 'Usuarios en línea';
$LNG['admin_sub_timeonline'] = 'The amount of time to be considered online since the last user\'s activity (in seconds)';

$LNG['admin_ttl_image_profile'] = 'Tamaño de imagen (perfil)';
$LNG['admin_sub_image_profile'] = 'Tamaño de imagen permitido para cargar (imagen de perfil, portada de perfil, portada de grupo) (en MB)';

$LNG['admin_ttl_image_format'] = 'Formato de imagen (perfil)';
$LNG['admin_sub_image_format'] = 'Formato de imagen permitido para cargar (imagen de perfil, portada de perfil, portada de grupo), use solo gif, png, jpg, otros formatos no son compatibles';

$LNG['admin_ttl_message_image'] = 'Tamaño de imagen (mensajes)';
$LNG['admin_sub_message_image'] = 'Tamaño de imagen permitido para cargar (Mensajes) (en MB)';

$LNG['admin_ttl_message_format'] = 'Formato de imagen (mensajes)';
$LNG['admin_sub_message_format'] = 'Formato de imagen permitido para cargar (mensajes), use solo gif, png, jpg, otros formatos no son compatibles';

$LNG['admin_sub_friends_limit'] = 'La cantidad máxima de amistades permitidas por usuario.';
$LNG['admin_sub_pages_limit'] = 'La cantidad máxima de páginas creadas por usuario';
$LNG['admin_sub_groups_limit'] = 'La cantidad máxima de grupos creados y unidos por usuario';

$LNG['admin_ttl_censor'] = 'Censurar';
$LNG['admin_sub_censor'] = 'Palabras censuradas (ejemplo: palabra1, palabra2, palabra3)';

$LNG['email_providers'] = 'Proveedores de correo electrónico';
$LNG['sub_email_providers'] = 'Permitir el registro a ciertos proveedores de correo electrónico (ejemplo: dominio.com, dominio.org)';

$LNG['admin_ttl_ad1'] = 'Bloque de anuncios 1';
$LNG['admin_sub_ad1'] = 'Unidad de anuncios 1 (parte inferior [página de bienvenida])';

$LNG['admin_ttl_ad2'] = 'Bloque de anuncios 2';
$LNG['admin_sub_ad2'] = 'Unidad de anuncios 2 (barra lateral [Página de suministro de noticias])';

$LNG['admin_ttl_ad3'] = 'Bloque de anuncios 3';
$LNG['admin_sub_ad3'] = 'Unidad de anuncios 3 (barra lateral [página de grupos])';

$LNG['admin_ttl_ad4'] = 'Bloque de anuncios 4';
$LNG['admin_sub_ad4'] = 'Unidad de anuncios 4 (barra lateral [página de perfil])';

$LNG['admin_ttl_ad5'] = 'Bloque de anuncios 5';
$LNG['admin_sub_ad5'] = 'Unidad de publicidad 5 (barra lateral [página de mensajes])';

$LNG['admin_ttl_ad6'] = 'Bloque de anuncios 6';
$LNG['admin_sub_ad6'] = 'Unidad de anuncios 6 (barra lateral [página de búsqueda])';

$LNG['admin_ttl_fbapp'] = 'Iniciar sesión en Facebook';
$LNG['admin_sub_fbapp'] = 'Permitir a los usuarios iniciar sesión usando Facebook';

$LNG['admin_ttl_fbappid'] = 'ID de aplicación';
$LNG['admin_sub_fbappid'] = 'ID de aplicación de Facebook';

$LNG['admin_ttl_fbappsecret'] = 'App secreta'; 
$LNG['admin_sub_fbappsecret'] = 'Secreto de la aplicación Facebook';

$LNG['smtp_emails'] = 'Correos SMTP';
$LNG['smtp_sub_emails'] = 'Habilite el envío de correos electrónicos a través de SMTP';

$LNG['smtp_host'] = 'SMTP Host';
$LNG['smtp_sub_host'] = 'El host SMTP';

$LNG['smtp_port'] = 'Puerto SMTP';
$LNG['smtp_sub_port'] = 'El puerto SMTP';

$LNG['smtp_auth'] = 'Autenticación SMTP';
$LNG['smtp_sub_auth'] = 'Habilitar la autenticación SMTP';

$LNG['smtp_username'] = 'Nombre de usuario SMTP';
$LNG['smtp_sub_username'] = 'El nombre de usuario SMTP';

$LNG['smtp_password'] = 'Contraseña SMTP';
$LNG['smtp_sub_password'] = 'La contraseña SMTP';

$LNG['admin_ttl_edit'] = 'Editar';
$LNG['admin_ttl_edit_profile'] = 'Editar perfil';

$LNG['admin_ttl_delete'] = 'Delete';
$LNG['admin_ttl_delete_profile'] = 'Eliminar Perfil';

$LNG['admin_ttl_mail'] = 'Email';
$LNG['admin_ttl_username'] = 'Nombre de usuario';
$LNG['admin_ttl_id'] = 'ID'; // As in user ID

$LNG['admin_ttl_email_comment'] = 'Enviar un comentario por correo electrónico';
$LNG['admin_sub_email_comment'] = 'Habilite el envío de correos electrónicos cuando alguien comente un mensaje (overrides user\'s settings)';

$LNG['admin_ttl_email_like'] = 'Correo electrónico en Me gusta';
$LNG['admin_sub_email_like'] = 'Habilite el envío de correos electrónicos cuando a alguien le guste un mensaje (overrides user\'s settings)';

$LNG['admin_ttl_email_new_friend'] = 'Correo electrónico sobre amistades';
$LNG['admin_sub_email_new_friend'] = 'Habilite el envío de correos electrónicos cuando alguien envíe o confirme una solicitud de amistad (overrides user\'s settings)';

$LNG['admin_ttl_email_page'] = 'Invitación a la página por correo electrónico';
$LNG['admin_sub_email_page'] = 'Habilite el envío de correos electrónicos cuando alguien envíe una página como una invitación (overrides user\'s settings)';

$LNG['admin_ttl_email_group'] = 'Invitación de grupo por correo electrónico';
$LNG['admin_sub_email_group'] = 'Habilite el envío de correos electrónicos cuando alguien envíe una invitación grupal (overrides user\'s settings)';

$LNG['admin_ttl_ilimit'] = 'Imágenes (Mensajes)';
$LNG['admin_sub_ilimit'] = 'El número máximo de imágenes que se permite subir por mensaje.';

$LNG['admin_ttl_wholiked'] = 'A quien le gustó';
$LNG['admin_sub_wholiked'] = 'El número de imágenes de perfil que se mostrarán cerca del número de Me gusta';

$LNG['admin_ttl_sperpage'] = 'Usuarios';
$LNG['admin_sub_sperpage'] = 'Número de usuarios que se mostrarán por página (perfil de amigos, usuarios de grupo)';

$LNG['admin_ttl_aperip'] = 'Cuentas';
$LNG['admin_sub_aperip'] = 'Número de cuentas permitidas para registrarse por IP (0 para ilimitado)';

$LNG['admin_ttl_ronline'] = 'Amigos en línea';
$LNG['admin_sub_ronline'] = 'Número de amigos en línea que se mostrarán en la página Feed / Suscripciones (barra lateral).';

$LNG['admin_ttl_nperwidget'] = 'Notificaciones desplegables';
$LNG['admin_sub_nperwidget'] = 'Número de notificaciones que se mostrarán por categoría (me gusta, comentarios, mensajes, acciones, solicitudes de amistad)';

$LNG['admin_ttl_uperpage'] = 'Administrador';
$LNG['admin_sub_uperpage'] = 'Número de usuarios por página (administrar secciones)';

$LNG['admin_sub_verified'] = '¿Perfil de usuario verificado por defecto? (No recomendado)';
$LNG['admin_sub_tracking'] = 'El código de seguimiento de análisis';

$LNG['join_date'] = 'Fecha de Ingreso';
$LNG['user_group'] = 'Grupo de usuario';
$LNG['ttl_verified'] = 'Verificado';

$LNG['sub_verified'] = 'Estado verificado de la cuenta';
$LNG['sub_group'] = 'Grupo de cuentas';
$LNG['sub_suspended'] = 'Estado de suspensión de la cuenta';

$LNG['page_title'] = 'Título de la página';
$LNG['page_url'] = 'URL de la página';
$LNG['public_page'] = 'Pagina publica';
$LNG['page_content'] = 'Contenido de página';

$LNG['sub_page_title'] = 'El título de la página (admite cadenas traducibles)';
$LNG['sub_page_url'] = 'La URL de la página (sin caracteres especiales)';
$LNG['sub_public_page'] = 'Mostrar la página en el pie de página y en la barra lateral';
$LNG['sub_page_content'] = 'El contenido de la página (admite cadenas traducibles)';
$LNG['url_exists'] = 'Esta URL de página ya existe';

$LNG['per_page'] = '/ página';
$LNG['per_ip'] = '/ IP';
$LNG['second'] = 'segunda';
$LNG['seconds'] = 'segundos';
$LNG['minute'] = 'minuto';
$LNG['minutes'] = 'minutos';
$LNG['hour'] = 'hora';
$LNG['recommended'] = 'recomendado';
$LNG['edit_user'] = 'editar usuario';
$LNG['username_to_edit'] = 'Nombre de usuario';
$LNG['username_to_edit_sub'] = 'Ingrese el nombre de usuario que desea editar';
$LNG['group_to_edit'] = 'Nombre del grupo';
$LNG['group_to_edit_sub'] = 'Ingrese el nombre del grupo que desea editar';
$LNG['page_to_edit'] = 'Nombre de la página';
$LNG['page_to_edit_sub'] = 'Ingrese el nombre de la página que desea editar';
$LNG['chat_smiles'] = 'Agregar emoticones';
$LNG['chat_picture'] = 'Cargar imagen';
$LNG['chat_camera'] = 'Toma una foto';

// STATS
$LNG['likes'] = 'Me gusta';
$LNG['messages'] = 'Mensajes';
$LNG['comments'] = 'Comentarios';
$LNG['registered_users'] = 'Usuarios registrados';
$LNG['today'] = 'Hoy';
$LNG['this_week'] = 'Esta semana';
$LNG['this_month'] = 'Este mes';
$LNG['this_year'] = 'Este año';
$LNG['total'] = 'Total';
$LNG['total_likes'] = 'Likes Totales';
$LNG['date'] = 'Fecha';
$LNG['evolution'] = 'Evolución';

$LNG['reports'] = 'Informes';
$LNG['total_reports'] = 'Informes totales';
$LNG['pending_reports'] = 'Informes pendientes';
$LNG['safe_reports'] = 'Informes seguros';
$LNG['deleted_reports'] = 'Informes eliminados';

// DASHBOARD
$LNG['admin_panel'] = 'Panel de administrador';
$LNG['at_a_glance'] = 'De un vistazo';
$LNG['site_info'] = 'Información del sitio';
$LNG['site_version'] = '<a href="%s" target="_blank">%s</a> %s';
$LNG['site_loaded'] = 'Tema <a href="%s" rel="loadpage">%s</a> con <a href="%s" rel="loadpage">%s plugins</a> enabled';
$LNG['online_users'] = 'Usuarios en línea';
$LNG['users'] = 'Usuarios';
$LNG['moderators'] = 'Moderadores';
$LNG['shares'] = 'Comparte';
$LNG['useful_links'] = 'Enlaces útiles';
$LNG['get_themes'] = 'Obtener más temas';
$LNG['get_plugins'] = 'Obtenga más complementos';
$LNG['get_languages'] = 'Obtenga más idiomas';

// MANAGE REPORTS
$LNG['admin_reports_ignore'] = 'Ignorar el informe y marque el contenido como seguro';
$LNG['admin_reports_delete'] = 'Eliminar el informe y el contenido informado';
$LNG['admin_reports_view'] = 'Ver el contenido informado';

// LIKES
$LNG['like'] = 'Me gusta';
$LNG['dislike'] = 'No me gusta';
$LNG['liked'] = 'Gustó';
$LNG['liked_this'] = 'Le gusto esto';
$LNG['view_all_likes'] = 'Ver todos los Me gusta';
$LNG['people_who_like_this'] = 'Las personas que gustan de este';

// MISC
$LNG['sponsored'] = 'Patrocinado';
$LNG['censored'] = '<strong>censurado</strong>';
$LNG['new_like_notification'] = '<a href="%s" rel="loadpage">%s</a> le gustó tu <a href="%s" rel="loadpage">mensaje</a>';
$LNG['new_like_c_notification'] = '<a href="%s" rel="loadpage">%s</a> le gustó tu <a href="%s" rel="loadpage">comentario</a>';
$LNG['new_poke_notification'] = '<a href="%s" rel="loadpage">%s</a> te pinchó';
$LNG['new_comment_notification'] = '<a href="%s" rel="loadpage">%s</a> comentó sobre tu <a href="%s" rel="loadpage">mensaje</a>';
$LNG['new_shared_notification'] = '<a href="%s" rel="loadpage">%s</a> compartió tu <a href="%s" rel="loadpage">mensaje</a>';
$LNG['new_page_notification'] = '<a href="%s" rel="loadpage">%s</a> te ha invitado a que te guste <a href="%s" rel="loadpage">%s</a> página';
$LNG['new_group_notification'] = '<a href="%s" rel="loadpage">%s</a> te ha invitado a unirte <a href="%s" rel="loadpage">%s</a> grupo';
$LNG['new_friend_notification'] = '<a href="%s" rel="loadpage">%s</a> acepto tu solicitud de amistad';
$LNG['new_chat_notification'] = '<a href="%s" rel="loadpage">%s</a> enviarte a <span class="desktop"><a onclick="%s">mensaje de chat</a></span><span class="mobile"><a href="%s" rel="loadpage">mensaje de chat</a></span>';
$LNG['new_birthday_notification'] = '<a href="%s" rel="loadpage">%s</a>\'s cumpleaños';
$LNG['years_old'] = '%s años';
$LNG['x_and_x_others'] = '<a href="%s" rel="loadpage">%s</a> y <a href="%s" rel="loadpage">%s más</a>';
$LNG['new_like_fa'] = '<a href="%s" rel="loadpage">%s</a> le gustó un <a href="%s" rel="loadpage">mensaje</a>';
$LNG['new_like_c_fa'] = '<a href="%s" rel="loadpage">%s</a> le gustó un <a href="%s" rel="loadpage">comentario</a>';
$LNG['new_comment_fa'] = '<a href="%s" rel="loadpage">%s</a> comentó en una <a href="%s" rel="loadpage">c</a>';
$LNG['new_message_fa'] = '<a href="%s" rel="loadpage">%s</a> publicó un nuevo <a href="%s" rel="loadpage">mensaje</a>';
$LNG['change_password'] = 'Cambio de contraseña';
$LNG['enter_new_password'] = 'Introduzca su nueva contraseña';
$LNG['enter_reset_key'] = 'Introduzca clave de reinicio';
$LNG['enter_username'] = 'Intrrduzca usuario';
$LNG['reset_key'] = 'Llave de reinicio';
$LNG['new_password'] = 'Nueva contraseña';
$LNG['password_recovery'] = 'Contraseña recuperada';
$LNG['recover']	= 'Recuperar';
$LNG['recover_sub_username'] = 'Escriba el nombre de usuario o el correo electrónico que desea recuperar la contraseña';
$LNG['tracking_code'] = 'Código de seguimiento';
$LNG['friends_limit'] = 'Tu has alcanzado el limite de amigos';
$LNG['user_friends_limit'] = 'Este usuario ha alcanzado el límite de amigos';
$LNG['last_online'] = 'Visto: %s';

// PAGE
$LNG['create_page'] = 'Crear página';
$LNG['edit_page'] = 'Editar página';
$LNG['delete_page'] = 'Eliminar página';
$LNG['page_sub_name'] = 'El nombre de la página (aparecerá en la URL)';
$LNG['page_sub_title'] = 'El título de la página (aparecerá en el título de la página)';
$LNG['page_sub_description'] = 'La descripción de la página';
$LNG['page_sub_website'] = 'URL del sitio web';
$LNG['profile_image'] = 'Imagen de perfil';
$LNG['cover_image'] = 'Imagen de portada';
$LNG['page_sub_pimg'] = 'La imagen de perfil de la página';
$LNG['page_sub_cover'] = 'La imagen de la portada de la página';
$LNG['category'] = 'Categoría';
$LNG['page_sub_category'] = 'La categoría de la página';
$LNG['phone'] = 'Teléfono';
$LNG['page_sub_phone'] = 'Número de teléfono';
$LNG['page_sub_address'] = 'Dirección física';

$LNG['page_name_consist'] = 'El nombre de la página solo puede contener letras y números';
$LNG['page_name_taken'] = 'Este nombre de página ya está en uso';
$LNG['page_name_less'] = 'El nombre de la página debe tener menos de %s caracteres';
$LNG['page_title_less'] = 'El título de la página debe tener menos de %s caracteres';
$LNG['page_desc_less'] = 'La descripción de la página debe tener menos de %s caracteres';
$LNG['invalid_phone'] = 'El número de teléfono solo puede contener dígitos, signos más (+) y menos (-).';
$LNG['page_delete_desc'] = 'Eliminar una página también eliminará sus mensajes junto con su contenido.';
$LNG['page_deleted'] = 'Se ha eliminado la página <strong>%s</strong>';
$LNG['page_maximum'] = 'Has superado la cantidad máxima de páginas permitidas (%s).';
$LNG['group_maximum'] = 'Has superado la cantidad máxima de grupos permitidos (%s).';

// PAGE CATEGORIES
$LNG['select_category'] = 'Seleccione una categoría';
$LNG['page_1'] = 'Negocio o Lugar Local';
$LNG['page_2'] = 'Compañía, Organización o Institución';
$LNG['page_3'] = 'Marca o Producto';
$LNG['page_4'] = 'Artista, Banda o Figura Pública';
$LNG['page_5'] = 'Entretenimiento';
$LNG['page_6'] = 'Causa o Comunidad';

// GROUP
$LNG['create_group'] = 'Crea un grupo';
$LNG['edit_group'] = 'Editar grupo';
$LNG['leave_group'] = 'Salir del grupo';
$LNG['delete_group'] = 'Eliminar grupo';
$LNG['discussion'] = 'Discusión';
$LNG['members'] = 'Miembros';
$LNG['admins'] = 'Administradores';
$LNG['page'] = 'Página';
$LNG['group'] = 'Grupo';
$LNG['group_private'] = 'Lo sentimos, pero este grupo es privado, solo los miembros de este grupo pueden ver el contenido.';
$LNG['group_private_ttl'] = 'Grupo privado';
$LNG['name'] = 'Nombre';
$LNG['any_member'] = 'Cualquier miembro';
$LNG['posts'] = 'Publicaciones';
$LNG['group_sub_name'] = 'El nombre del grupo (aparecerá en la URL)';
$LNG['group_sub_title'] = 'El título del grupo (aparecerá en el título del grupo)';
$LNG['group_sub_privacy'] = 'La privacidad del grupo';
$LNG['group_sub_description'] = 'La descripción del grupo';
$LNG['group_sub_posts'] = 'Quién puede publicar en el grupo';
$LNG['admins_posts'] = ', solo los administradores pueden publicar';
$LNG['members_posts'] = ', cualquier miembro puede publicar';
$LNG['group_sub_cover'] = 'La imagen de portada del grupo';
$LNG['public_group'] = 'Grupo público';
$LNG['private_group'] = 'Grupo privado';
$LNG['x_members'] = '%s miembros';
$LNG['join_group'] = 'Unirse al grupo';
$LNG['pending_approval'] = 'Aprobación pendiente';
$LNG['search_this_group'] = 'Buscar este grupo';
$LNG['invited'] = 'Invitado';
$LNG['member'] = 'Miembro';
$LNG['invite'] = 'Invitación';

$LNG['group_name_consist'] = 'El nombre del grupo solo puede contener letras y números';
$LNG['group_name_taken'] = 'Este nombre de grupo ya está en uso';
$LNG['group_name_less'] = 'El nombre del grupo debe tener menos de %s caracteres';
$LNG['group_title_less'] = 'El título del grupo debe tener menos de %s caracteres';
$LNG['group_desc_less'] = 'La descripción del grupo debe tener menos de %s caracteres.';
$LNG['group_delete_desc'] = 'Eliminar un grupo también eliminará sus mensajes junto con su contenido.';
$LNG['group_deleted'] = 'Se eliminó el grupo <strong>%s</strong>';

$LNG['invite_friends'] = 'Invitar amigos';

// PROFILE
$LNG['profile_not_exists'] = 'Lo sentimos, pero este perfil no existe.';
$LNG['group_not_exists'] = 'Lo sentimos, pero este grupo no existe.';
$LNG['page_not_exists'] = 'Lo sentimos, pero esta página no existe.';
$LNG['profile_semi_private'] = 'Lo sentimos, pero este perfil es privado, solo los amigos de este usuario pueden ver el perfil.';
$LNG['profile_private'] = 'Lo sentimos, pero este perfil es completamente privado.';
$LNG['profile_suspended'] = 'Lo sentimos, pero este perfil ha sido suspendido.';
$LNG['profile_not_exists_ttl'] = 'El perfil no existe.';
$LNG['group_not_exists_ttl'] = 'El grupo no existe.';
$LNG['profile_semi_private_ttl'] = 'Perfil privado';
$LNG['profile_private_ttl'] = 'Perfil privado';
$LNG['profile_suspended_ttl'] = 'Perfil suspendido';
$LNG['profile_blocked'] = 'Lo sentimos, pero este usuario lo ha bloqueado o ha sido bloqueado.';
$LNG['profile_blocked_ttl'] = 'Perfil bloqueado';
$LNG['add_friend'] = 'Añadir como amigo';
$LNG['remove_friend'] = 'Eliminar amigo';
$LNG['friend_request_sent'] = 'Solicitud de amistad enviada';
$LNG['friend_request_accept'] = 'Aceptar solicitud de amistad';
$LNG['created_on'] = 'Creado en';
$LNG['description'] = 'Descripción';
$LNG['profile_about'] = 'Acerca de';
$LNG['profile_birthdate'] = 'Fecha de nacimiento';
$LNG['lives_in'] = 'Vive en';
$LNG['born_on'] = 'Nacido en';
$LNG['studied_at'] = 'Estudió en';
$LNG['works_at'] = 'Trabaja en';
$LNG['profile_view_site'] = 'Ver sitio web';
$LNG['profile_view_profile'] = 'Ver perfil';
$LNG['profile_bio']	= 'Bio';
$LNG['verified_page'] = 'Página verificada';
$LNG['edit_profile_cover'] = 'Cambiar imágenes de perfil';
$LNG['view_all_notifications'] = 'Ver más notificaciones';
$LNG['view_chat_notifications'] = 'Ver más mensajes';
$LNG['view_confirmed_friendships'] = 'Ver solicitudes confirmadas';
$LNG['close_notifications'] = 'Cerrar notificaciones';
$LNG['notifications_settings'] = 'Configuracion de notificaciones';
$LNG['no_notifications'] = 'No hay Notificaciones';
$LNG['search_title'] = 'Resultados de la búsqueda';
$LNG['view_all_results'] = 'Ver todos los resultados';
$LNG['close_results'] = 'Cerrar resultados';
$LNG['no_results'] = 'No hay resultados disponibles. Intente otra búsqueda.';
$LNG['no_results_ttl'] = 'Resultados de la búsqueda';
$LNG['search_for_users'] = 'Buscar usuarios';
$LNG['search_in_friends'] = 'Buscar en amigos';
$LNG['type_message'] = 'Escribe un mensaje...';
$LNG['follows'] = 'Seguir';
$LNG['followed_by'] = 'Seguido por';
$LNG['people'] = 'personas';
$LNG['no_info_avail'] = 'No hay información disponible';
$LNG['account_suspended'] = 'Esta cuenta está actualmente suspendida.';
$LNG['account_not_activated'] = 'Esta cuenta no está activada. <a href="%s"> Haga clic aquí </a> para volver a enviar el correo electrónico de activación.';
$LNG['re_activate_already'] = 'Ya se envió un correo electrónico de activación hoy';
$LNG['re_activate_sent'] = 'Se ha enviado un correo electrónico de activación.';

// GENERAL
$LNG['title_profile'] = 'Perfil';
$LNG['title_feed'] = 'Noticias';
$LNG['title_post'] = 'Correo';
$LNG['title_messages'] = 'Mensajes';
$LNG['title_settings'] = 'Ajustes';
$LNG['title_search'] = 'Buscar';
$LNG['title_notifications'] = 'Notificaciones';
$LNG['title_page'] = 'Crear página';
$LNG['title_group'] = 'Crea un grupo';
$LNG['title_admin']	= 'Administrador';
$LNG['edit'] = 'Editar';
$LNG['delete'] = 'Borrar';
$LNG['suspended'] = 'Suspendido';
$LNG['ignore'] = 'Ignorar';
$LNG['view'] = 'View';
$LNG['timeline'] = 'Cronología';
$LNG['on'] = 'Prendido';
$LNG['off'] = 'Apagado';
$LNG['yes'] = 'Si';
$LNG['no'] = 'No';
$LNG['none'] = 'Ninguno';
$LNG['pages'] = 'Páginas';
$LNG['search_for_people'] = 'buscar personas, #hashtags';
$LNG['search_pages'] = ', @páginas';
$LNG['search_groups'] = ', !grupos';
$LNG['new_message'] = 'Nuevo mensaje';
$LNG['privacy_policy'] = 'Política de privacidad';
$LNG['terms_of_use'] = 'Condiciones de uso';
$LNG['about'] = 'Acerca de';
$LNG['disclaimer'] = 'Descargo de responsabilidad';
$LNG['contact'] = 'Contacto';
$LNG['developers'] = 'Desarrolladores';
$LNG['language'] = 'Idioma';

// TIME
$LNG['just_now'] = 'En este momento';
$LNG['ta_second'] = 'Un segundo';
$LNG['ta_seconds'] = '%d segundos';
$LNG['ta_minute'] = 'un minuto';
$LNG['ta_minutes'] = '%d minutos';
$LNG['ta_hour'] = 'una hora';
$LNG['ta_hours'] = '%d horas';
$LNG['ta_day'] = 'un día';
$LNG['ta_days'] = '%d días';
$LNG['ta_week'] = 'una semana';
$LNG['ta_weeks'] = '%d semanas';
$LNG['ta_month'] = 'un mes';
$LNG['ta_months'] = '%d meses';
$LNG['ta_year'] = 'un año';
$LNG['ta_years'] = '%d años';
$LNG['ago'] = 'hace';

// MONTHS
$LNG['month'] = 'Mes';
$LNG['year'] = 'Años';
$LNG['day'] = 'Día';
$LNG['month_1'] = 'Enero';
$LNG['month_2'] = 'Febrero';
$LNG['month_3'] = 'Marzo';
$LNG['month_4'] = 'Abril';
$LNG['month_5'] = 'Mayo';
$LNG['month_6'] = 'Junio';
$LNG['month_7'] = 'Julio';
$LNG['month_8'] = 'Agosto';
$LNG['month_9'] = 'Septiembre';
$LNG['month_10'] = 'Octubre';
$LNG['month_11'] = 'Noviembre';
$LNG['month_12'] = 'Diciembre';
?>