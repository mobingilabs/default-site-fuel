<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type' => 'mysqli',
		'connection'  => array(
			'hostname'   => getenv("MYSQLPROXY_PORT_3306_TCP_ADDR"),
			'port'       => getenv("MYSQLPROXY_PORT_3306_TCP_PORT"),
			'database'   => getenv("MOCLOUD_DATABASE_NAME"),
			'username'   => getenv("MOCLOUD_DATABASE_USERNAME"),
			'password'   => getenv("MOCLOUD_DATABASE_PASSWORD"),
		),
	),
);
