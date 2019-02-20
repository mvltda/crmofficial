<?php
setlocale(LC_ALL,"es_CO");
setlocale(LC_MONETARY,"es_CO");

$list_months = new stdClass();
$list_months->en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$list_months->es = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$languaje = new stdClass();
$languaje->es = new stdClass();
$languaje->es->mounts = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$languaje->es->actions = new stdClass();
$languaje->es->actions->change = 'Modificando';
$languaje->es->actions->create = 'Creando';
$languaje->es->actions->delete = 'Eliminando';
$languaje->es->actions->view = 'Viendo';

$languaje = new stdClass();
$languaje->en = new stdClass();
$languaje->en->mounts = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$languaje->en->actions = new stdClass();
$languaje->en->actions->change = 'Modificando';
$languaje->en->actions->create = 'Creando';
$languaje->en->actions->delete = 'Eliminando';
$languaje->en->actions->view = 'Viendo';

define('title_sm', 'PDC');
define('title_md', 'Portal de Clientes');
define('title_lg', 'Monteverde LTDA - Portal de Clientes');
define('pageDescription', 'Monteverde LTDA - Portal de Clientes - Create by FelipheGomez');

# define('theme_active', 'default');
#define('theme_active', 'front-clients');
define('theme_active_admin', 'default');

define('path_home', '/');
define('path_homeAdmins', path_home.'/front-admin/');
define('path_homeThemeAdmin', path_home.'cmr/content/themes/'.theme_active_admin.'/');
define('path_homeLibs', path_home.'cmr/includes/libs/');
define('path_homeGlobalInc', path_home.'cmr/includes/');

define('path_homeClients', path_home.'');

define('MODE_DEBUG', true);
define('DEBUG_SESSION', false);
define('DEBUG_SITE', true);

if(MODE_DEBUG == true)
{
	error_reporting(E_ALL);
	ini_set('display_errors', 1);	
}
