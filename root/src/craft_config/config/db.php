<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
    '*' => array(
			// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
			'server' => 'localhost',
			// The database username to connect with.
			'user' => 'UPDATEUSERNAME',
			// The database password to connect with.
			'password' => 'UPDATEPASSWORD',
			// The name of the database to select.
			'database' => 'PROJECT_cmsdb_prod',
			// The prefix to use when naming tables. This can be no more than 5 characters.
			'tablePrefix' => 'craft',
    ),
    '.dev' => array(
			// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
			'server' => 'localhost',
			// The database username to connect with.
			'user' => 'root',
			// The database password to connect with.
			'password' => 'vagrant',
			// The name of the database to select.
			'database' => 'vagrant',
			// The prefix to use when naming tables. This can be no more than 5 characters.
			'tablePrefix' => 'craft',
    ),
    'stage.' => array(
			// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
			'server' => 'localhost',
			// The database username to connect with.
			'user' => 'UPDATEUSERNAME',
			// The database password to connect with.
			'password' => 'UPDATEPASSWORD',
			// The name of the database to select.
			'database' => 'PROJECT_cmsdb_stage',
			// The prefix to use when naming tables. This can be no more than 5 characters.
			'tablePrefix' => 'craft',
    ),
);
