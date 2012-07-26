<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Europe/Brussels');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/technician_planning/',
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));

// Change the default cache driver to memcache
Cache::$default = 'apc';
 
// Load the memcache cache driver using default setting
$apc = Cache::instance();


Route::set('media', 'media(/<file>)', array('file' => '.+'))
    ->defaults(array(
    'controller'    => 'media',
    'action'        => 'index',
    'file'          => NULL,
));

// customers route
Route::set('customerContactPerson', 'customer/contactPerson(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'customers',
    'action'        => 'contact_person',
    'ctr'           => 0,
    'id'            => 0
));

Route::set('customerAdress', 'customer/adress(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'customers',
    'action'        => 'get_adress',
    'ctr'           => 0,
    'id'            => 0
));



Route::set('customerGeneralData', 'customer/generalData(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'customers',
    'action'        => 'general_data',
    'ctr'           => 0,
    'id'            => 0,
));

Route::set('customerSearch', 'customer/search(/<ctr>)', array())
    ->defaults(array(
    'controller'    => 'customers',
    'action'        => 'search',
));

Route::set('customerCreate', 'customer/create(/<ctr>)', array())
    ->defaults(array(
    'controller'    => 'customers',
    'action'        => 'create',
));

Route::set('customers', 'customers(/<ctr>)', array())
    ->defaults(array(
    'controller' => 'customers',
    'action'     => 'index',
    'ctr'        => 0
));   

// workplaces routes



Route::set('workplaceContactPerson', 'workplace/contactPerson(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'workplaces',
    'action'        => 'contact_person',
    'ctr'           => 0,
    'id'            => 0
));

Route::set('workplaceAdress', 'workplace/adress(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'workplaces',
    'action'        => 'get_adress',
    'ctr'           => 0,
    'id'            => 0
));



Route::set('workplaceGeneralData', 'workplace/generalData(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'workplaces',
    'action'        => 'general_data',
    'ctr'           => 0,
    'id'            => 0,
));

Route::set('workplaceSearch', 'workplace/search(/<ctr>)', array())
    ->defaults(array(
    'controller'    => 'workplaces',
    'action'        => 'search',
));


Route::set('workplaceCreate', 'workplace/create(/<ctr>)', array())
    ->defaults(array(
    'controller'    => 'workplaces',
    'action'        => 'create',
));

Route::set('workplaceCustomers', 'workplace/customers(/<ctr>(/<id>))', array())
    ->defaults(array(
    'controller'    => 'workplaces',
    'action'        => 'get_customers',
));

Route::set('workplaces', 'workplaces(/<ctr>)', array())
    ->defaults(array(
    'controller' => 'workplaces',
    'action'     => 'index',
    'ctr'        => 0
));   


//workorder

Route::set('workorder', 'workorder(/<ctr>(/<action>(/<id>)))', array())
    ->defaults(array(
    'controller' => 'workorders',
    'action'     => 'index',
    'ctr'        => 0,
    'id'         => 0
));   

  

//login

Route::set('validate_login', 'login/log', array())
    ->defaults(array(
    'controller' => 'login',
    'action'     => 'log',
));  

Route::set('default', '(/<controller>(/<action>(/<id>)))',array('stuff' => '.*'))
		->defaults(array(
		'controller' => 'login',
		'action'     => 'index',
	));


Route::set('planning', 'planning(/<action>(/<ctr>(/<technician>(/<date>))))',array('controller' =>'planning'))
    ->defaults(array(
        'controller' => 'planning',
        'action'     => 'index',
        'technician' => '',
        'ctr'        => 0,
        'date'       => date('Y-m-d',time())
    ));


Cookie::$salt = 'lang';