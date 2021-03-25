<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
	/**
	 * The directory that holds the Migrations
	 * and Seeds directories.
	 *
	 * @var string
	 */
	public $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

	/**
	 * Lets you choose which connection group to
	 * use if no other is specified.
	 *
	 * @var string
	 */
	public $defaultGroup = 'default';

	/**
	 * The default database connection.
	 *
	 * @var array
	 */

    /*public $default = [
        'DSN'  => 'mysql:host=camarabraz3.mysql.dbaas.com.br;port=3306;dbname=camarabraz3',
        'hostname' => 'mysql:host=camarabraz3.mysql.dbaas.com.br',
        'username' => 'camarabraz3',
        'password' => 'Camara@2020',
        'database' => 'camarabraz3',
        'DBdriver' => 'pdo',
        'DBprefix' => '',
        'pConnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'DBcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    ];*/

	public $default = [
		'DSN'      => 'mysql:host=camarabraz3.mysql.dbaas.com.br;port=3306;dbname=camarabraz3',
		'hostname' => 'camarabraz3.mysql.dbaas.com.br',
		'username' => 'camarabraz3',
		'password' => 'Camara@2020',
		'database' => 'camarabraz3',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => false,
		'DBDebug'  => (ENVIRONMENT !== 'development'),
		'charset'  => 'utf8',
		'DBCollat' => 'utf8_general_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
        'save_queries' => TRUE,
	];

	/**
	 * This database connection is used when
	 * running PHPUnit database tests.
	 *
	 * @var array
	 */
	public $tests = [
		'DSN'      => '',
		'hostname' => '127.0.0.1',
		'username' => '',
		'password' => '',
		'database' => ':memory:',
		'DBDriver' => 'SQLite3',
		'DBPrefix' => 'db_',  // Needed to ensure we're working correctly with prefixes live. DO NOT REMOVE FOR CI DEVS
		'pConnect' => false,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => 'utf8',
		'DBCollat' => 'utf8_general_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
		'port'     => 3306,
	];

	//--------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();

		// Ensure that we always set the database group to 'tests' if
		// we are currently running an automated test suite, so that
		// we don't overwrite live data on accident.
		if (ENVIRONMENT === 'testing')
		{
			$this->defaultGroup = 'tests';
		}
	}

	//--------------------------------------------------------------------

}
