<?php
function PageMain() {
	global $TMPL, $LNG, $CONF, $db, $loggedIn, $settings, $plugins;
	require_once('./includes/countries.php');
	// Impediendo que el usuario se añada a un grupo
	unset($_POST['user_group'], $_POST['suspended'], $_POST['verified']);
	if(isset($_SESSION['username']) && isset($_SESSION['password']) || isset($_COOKIE['username']) && isset($_COOKIE['password'])) {	
		$verify = $loggedIn->verify();
		
		if($verify['username']) {
			
			$TMPL_old = $TMPL; $TMPL = array();
			
			$TMPL['url'] = $CONF['url'];
			$TMPL['form_url'] = (empty($_GET['b']) ? permalink($CONF['url'].'/index.php?a=settings') : permalink($CONF['url'].'/index.php?a=settings&b='));
			$TMPL['token_input'] = generateToken($_SESSION['token_id']);
			
			// Crear la instancia de la clase
			$updateUserSettings = new updateUserSettings();
			$updateUserSettings->db = $db;
			$updateUserSettings->url = $CONF['url'];
			$updateUserSettings->id = $verify['idu'];
			
			if($_GET['b'] == 'security') {
				$skin = new skin('settings/security'); $page = '';
				
				if(!empty($_POST)) {	
					$TMPL['message'] = $updateUserSettings->query_array('users', $_POST);
				}
				
				$userSettings = $updateUserSettings->getSettings();
			} elseif($_GET['b'] == 'delete') {
				$skin = new skin('settings/delete'); $page = '';
				
				if(isset($_POST['current_password'])) {
					//Si la contraseña es valida
					if($updateUserSettings->validate_password($_POST['current_password']) && $_POST['token_id'] == $_SESSION['token_id']) {
						$userSettings = $updateUserSettings->getSettings();

						//Borrar las imagenes de perfil
						deleteImages(array($userSettings['image']), 1);
						deleteImages(array($userSettings['cover']), 0);
						
						$manageUsers = new manageUsers();
						$manageUsers->db = $db;
						$manageUsers->deleteUser($verify['idu']);
						
						// Redirigir al usuario en la página de inicio después de la eliminación de la cuenta
						$loggedIn->logOut();
						header("Location: ".$CONF['url']."/index.php?a=welcome");
					} else {
						$TMPL['message'] = notificationBox('error', $LNG['wrong_current_password']);
					}
				}
			} elseif($_GET['b'] == 'avatar') {
				$skin = new skin('settings/avatar'); $page = '';

				$TMPL['message'] = $_SESSION['error'];

				$TMPL['image'] = $CONF['url'].'/thumb.php?src='.$verify['image'].'&t=a&w=112&h=112';
				$TMPL['cover'] = $CONF['url'].'/thumb.php?src='.$verify['cover'].'&t=c&w=900&h=200';
				
				$maxsize = $settings['size'];

				if(isset($_FILES['avatarselect']['name'])) {
					foreach ($_FILES['avatarselect']['error'] as $key => $error) {
					$ext = pathinfo($_FILES['avatarselect']['name'][$key], PATHINFO_EXTENSION);
					$size = $_FILES['avatarselect']['size'][$key];
					$extArray = explode(',', $settings['format']);
					
					// Obtener el tamaño de la imagen
					list($width, $height) = getimagesize($_FILES['avatarselect']['tmp_name'][0]);
					$ratio = ($width / $height);
						if(in_array(strtolower($ext), $extArray) && $size < $maxsize && $size > 0 && !empty($width) && !empty($height)) {
							$rand = mt_rand();
							$tmp_name = $_FILES['avatarselect']['tmp_name'][$key];
							$name = pathinfo($_FILES['avatarselect']['name'][$key], PATHINFO_FILENAME);
							$fullname = $_FILES['avatarselect']['name'][$key];
							$size = $_FILES['avatarselect']['size'][$key];
							$type = pathinfo($_FILES['avatarselect']['name'][$key], PATHINFO_EXTENSION);
							$finalName = mt_rand().'_'.mt_rand().'_'.mt_rand().'.'.$db->real_escape_string($ext);
							
							imageOrientation($tmp_name);
							
							move_uploaded_file($tmp_name, 'uploads/avatars/'.$finalName);
							
							deleteImages(array($verify['image']), 1);
							
							$image = array('image' => $finalName, 'token_id' => $_POST['token_id']);
							$updateUserSettings->query_array('users', $image);
							
							$_SESSION['error'] = notificationBox('success', $LNG['image_saved']);
						} elseif($_FILES['coverselect']['name'][$key] == '') { 
							// Si no hay ningún archivo seleccionado
							$_SESSION['error'] = notificationBox('error', $LNG['no_file']);
						} elseif($size > $maxsize || $size == 0) { 
							// Si el tamaño del archivo es superior al permitido o está vacío
							$_SESSION['error'] = notificationBox('error', sprintf($LNG['file_exceeded'], round($maxsize / 1048576, 2)));
						} else { 
							// Si los archivos no tienen un formato válido
							$_SESSION['error'] = notificationBox('error', sprintf($LNG['file_format'], $settings['format']));
						}
					}
					if(!empty($_SESSION['error'])) {
						header('Location: '.permalink($CONF['url'].'/index.php?a=settings&b=avatar'));
					}
				}
				
				if(isset($_FILES['coverselect']['name'])) {
					foreach ($_FILES['coverselect']['error'] as $key => $error) {
					$ext = pathinfo($_FILES['coverselect']['name'][$key], PATHINFO_EXTENSION);
					$size = $_FILES['coverselect']['size'][$key];
					$extArray = explode(',', $settings['format']);
					
					list($width, $height) = getimagesize($_FILES['coverselect']['tmp_name'][0]);
					$ratio = ($width / $height);
						if(in_array(strtolower($ext), $extArray) && $size < $maxsize && $size > 0 && !empty($width) && !empty($height)) {
							$rand = mt_rand();
							$tmp_name = $_FILES['coverselect']['tmp_name'][$key];
							$name = pathinfo($_FILES['coverselect']['name'][$key], PATHINFO_FILENAME);
							$fullname = $_FILES['coverselect']['name'][$key];
							$size = $_FILES['coverselect']['size'][$key];
							$type = pathinfo($_FILES['coverselect']['name'][$key], PATHINFO_EXTENSION);
							$finalName = mt_rand().'_'.mt_rand().'_'.mt_rand().'.'.$db->real_escape_string($ext);
							
							imageOrientation($tmp_name);
							
							move_uploaded_file($tmp_name, 'uploads/covers/'.$finalName);
							
							deleteImages(array($verify['cover']), 0);

							$image = array('cover' => $finalName, 'token_id' => $_POST['token_id']);
							$updateUserSettings->query_array('users', $image);
							
							$_SESSION['error'] = notificationBox('success', $LNG['image_saved']);
						} elseif($_FILES['coverselect']['name'][$key] == '') { 

							$_SESSION['error'] = notificationBox('error', $LNG['no_file']);
						} elseif($size > $maxsize || $size == 0) { 
							
							$_SESSION['error'] = notificationBox('error', sprintf($LNG['file_exceeded'], round($maxsize / 1048576, 2)));
						} else { 
							
							$_SESSION['error'] = notificationBox('error', sprintf($LNG['file_format'], $settings['format']));
						}
					}
					if(!empty($_SESSION['error'])) {
						header('Location: '.permalink($CONF['url'].'/index.php?a=settings&b=avatar'));
					}
				}
				
				if(!empty($TMPL['message'])) {
					$_SESSION['error'] = '';
				}
			} elseif($_GET['b'] == 'notifications') {
				$skin = new skin('settings/notifications'); $page = '';
				
				if(!empty($_POST)) {
					$TMPL['message'] = $updateUserSettings->query_array('users', array_map("strip_tags_array", $_POST));
				}
				
				$userSettings = $updateUserSettings->getSettings();
				
				if($userSettings['notificationl'] == '0') {
					$TMPL['loff'] = 'selected="selected"';
				} else {
					$TMPL['lon'] = 'selected="selected"';
				}
				
				if($userSettings['notificationc'] == '0') {
					$TMPL['coff'] = 'selected="selected"';
				} else {
					$TMPL['con'] = 'selected="selected"';
				}
				
				if($userSettings['notifications'] == '0') {
					$TMPL['soff'] = 'selected="selected"';
				} else {
					$TMPL['son'] = 'selected="selected"';
				}
				
				if($userSettings['notificationd'] == '0') {
					$TMPL['doff'] = 'selected="selected"';
				} else {
					$TMPL['don'] = 'selected="selected"';
				}
				
				if($userSettings['notificationf'] == '0') {
					$TMPL['foff'] = 'selected="selected"';
				} else {
					$TMPL['fon'] = 'selected="selected"';
				}
				
				if($userSettings['notificationg'] == '0') {
					$TMPL['goff'] = 'selected="selected"';
				} else {
					$TMPL['gon'] = 'selected="selected"';
				}
				
				if($userSettings['notificationx'] == '0') {
					$TMPL['xoff'] = 'selected="selected"';
				} else {
					$TMPL['xon'] = 'selected="selected"';
				}
				
				if($userSettings['notificationp'] == '0') {
					$TMPL['poff'] = 'selected="selected"';
				} else {
					$TMPL['pon'] = 'selected="selected"';
				}
				
				if($userSettings['sound_new_notification'] == '0') {
					$TMPL['snnoff'] = 'selected="selected"';
				} else {
					$TMPL['snnon'] = 'selected="selected"';
				}
				
				if($userSettings['sound_new_chat'] == '0') {
					$TMPL['sncoff'] = 'selected="selected"';
				} else {
					$TMPL['sncon'] = 'selected="selected"';
				}
				
				if($userSettings['email_comment'] == '0') {
					$TMPL['ecoff'] = 'selected="selected"';
				} else {
					$TMPL['econ'] = 'selected="selected"';
				}
				
				if($userSettings['email_like'] == '0') {
					$TMPL['eloff'] = 'selected="selected"';
				} else {
					$TMPL['elon'] = 'selected="selected"';
				}
				
				if($userSettings['email_new_friend'] == '0') {
					$TMPL['enfoff'] = 'selected="selected"';
				} else {
					$TMPL['enfon'] = 'selected="selected"';
				}
				
				if($userSettings['email_page_invite'] == '0') {
					$TMPL['epioff'] = 'selected="selected"';
				} else {
					$TMPL['epion'] = 'selected="selected"';
				}
				
				if($userSettings['email_group_invite'] == '0') {
					$TMPL['egioff'] = 'selected="selected"';
				} else {
					$TMPL['egion'] = 'selected="selected"';
				}
				
				
				
				if(empty($settings['groups'])) {
					$TMPL['empty_groups'] = ' style="display: none;"';
				}
			} elseif($_GET['b'] == 'privacy') {
				$skin = new skin('settings/privacy'); $page = '';
				
				if(!empty($_POST)) {
					$TMPL['message'] = $updateUserSettings->query_array('users', array_map("strip_tags_array", $_POST));
				}
				
				$userSettings = $updateUserSettings->getSettings();
				
				if($userSettings['private'] == '1') {
					$TMPL['on'] = 'selected="selected"';
				} elseif($userSettings['private'] == '2') {
					$TMPL['semi'] = 'selected="selected"';
				} else {
					$TMPL['off'] = 'selected="selected"';
				}
				
				if($userSettings['privacy'] == '0') {
					$TMPL['pon'] = 'selected="selected"';
				} elseif($userSettings['privacy'] == '2') {
					$TMPL['psemi'] = 'selected="selected"';
				} else {
					$TMPL['poff'] = 'selected="selected"';
				}
				
				if($userSettings['offline'] == '1') {
					$TMPL['con'] = 'selected="selected"';
				} else {
					$TMPL['coff'] = 'selected="selected"';
				}
			} elseif($_GET['b'] == 'blocked') {
				$skin = new skin('settings/blocked'); $page = '';
				
				$updateUserSettings->per_page = $settings['perpage'];
				
				$TMPL['blocked_users'] = $updateUserSettings->getBlockedUsers();
			} else {
				$skin = new skin('settings/general'); $page = '';
				
				$TMPL['message'] = $_SESSION['error']; $_SESSION['error'] = '';

				if(!empty($_POST)) {
					$_SESSION['error'] = $updateUserSettings->query_array('users', array_map("strip_tags_array", $_POST));
					header('Location: '.permalink($CONF['url'].'/index.php?a=settings'));
					return;
				}
				
				$userSettings = $updateUserSettings->getSettings();
				
				$date = explode('-', $userSettings['born']);
				
				$TMPL['countries'] = countries(1, $userSettings['country']);
				
				$TMPL['years'] = generateDateForm(0, $date[0]);
				$TMPL['months'] = generateDateForm(1, $date[1]);
				$TMPL['days'] = generateDateForm(2, $date[2]);
				
				$TMPL['currentFirstName'] = $userSettings['first_name']; $TMPL['currentLastName'] = $userSettings['last_name']; $TMPL['currentEmail'] = $userSettings['email']; $TMPL['currentLocation'] = $userSettings['location']; $TMPL['currentWebsite'] = $userSettings['website']; $TMPL['currentBio'] = $userSettings['bio']; $TMPL['currentFacebook'] = $userSettings['facebook']; $TMPL['currentTwitter'] = $userSettings['twitter'];  $TMPL['currentGplus'] = $userSettings['gplus']; $TMPL['currentAddress'] = $userSettings['address']; $TMPL['currentWork'] = $userSettings['work']; $TMPL['currentSchool'] = $userSettings['school'];
				
				if($userSettings['gender'] == '0') {
					$TMPL['ngender'] = 'selected="selected"';
				} elseif($userSettings['gender'] == '1') {
					$TMPL['mgender'] = 'selected="selected"';
				} else {
					$TMPL['fgender'] = 'selected="selected"';
				}
				
				if($userSettings['interests'] == '0') {
					$TMPL['ninterests'] = 'selected="selected"';
				} elseif($userSettings['interests'] == '1') {
					$TMPL['minterests'] = 'selected="selected"';
				} else {
					$TMPL['winterests'] = 'selected="selected"';
				}
			}
			$page .= $skin->make();
			$TMPL = $TMPL_old; unset($TMPL_old);
			$TMPL['settings'] = $page;
			
		} else {
			// Si hay cookies falsas, o están mal configuradas, borra todo y redirige a la página de inicio
			$loggedIn->logOut();
			header("Location: ".$CONF['url']."/index.php?a=welcome");
		}
	} else {
		// Si la sesión o las cookies no están configuradas, redirige a la página de inicio
		header("Location: ".$CONF['url']."/index.php?a=welcome");
	}
	
	// Inicia el menú de la barra lateral
	if(isset($_GET['b'])) {
		$TMPL['welcome'] = $LNG["user_ttl_{$_GET['b']}"];
	} else {
		$TMPL['welcome'] = $LNG["user_ttl_general"];
	}
	
	$menu = array(	''					=> array('user_menu_general', 'settings'),
					'&b=avatar'			=> array('user_menu_avatar', 'interface'),
					'&b=notifications'	=> array('user_menu_notifications', 'notification'),
					'&b=privacy'		=> array('user_menu_privacy', 'privacy'),
					'&b=security'		=> array('user_menu_security', 'security'),
					'&b=blocked'		=> array('user_menu_blocked', 'blocked'),
					'&b=delete'			=> array('user_menu_delete', 'delete'));
	
	foreach($menu as $link => $title) {
		$class = '';
		if($link == '&b='.$_GET['b'] || $link == $_GET['b']) {
			$class = ' sidebar-link-active';
			$ttl = $LNG[$title[0]];
		}
		$TMPL['menu'] .= '<div class="sidebar-link'.$class.'"><a href="'.permalink($CONF['url'].'/index.php?a=settings'.$link).'" rel="loadpage"><img src="'.$CONF['url'].'/'.$CONF['theme_url'].'/images/icons/settings/'.$title[1].'.png">'.$LNG[$title[0]].'</a></div>';
	}

	$TMPL['title'] = $LNG['title_settings'].' - '.$settings['title'];
	
	$skin = new skin('settings/content');
	return $skin->make();
}
?>