<?php
error_reporting(0);

$CONF = $TMPL = array();

// The MySQL credentials
$CONF['host'] = 'localhost';
$CONF['user'] = 'u532654912_valleyfair';
$CONF['pass'] = 'gtaV19921963';
$CONF['name'] = 'u532654912_valleyfair';

// $CONF['host'] = 'localhost';
// $CONF['user'] = 'root';
// $CONF['pass'] = '';
// $CONF['name'] = 'valleyfairp';

// The Installation URL
$CONF['url'] = 'http://localhost/valleyfair';

// The Notifications e-mail
$CONF['email'] = 'dmercadoff@gmail.com';

// The themes directory
$CONF['theme_path'] = 'themes';

// The plugins directory
$CONF['plugin_path'] = 'plugins';

$action = array('admin'			=> 'admin',
				'feed'			=> 'feed',
				'settings'		=> 'settings',
				'messages'		=> 'messages',
				'post'			=> 'post',
				'recover'		=> 'recover',
				'profile'		=> 'profile',
				'notifications'	=> 'notifications',
				'search'		=> 'search',
				'group'			=> 'group',
				'page'			=> 'page',
				'info'			=> 'info'
				);
?>