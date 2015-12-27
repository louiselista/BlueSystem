<?php
require('./resources/constants/settings.php');
require('./resources/constants/util.php');
require('./resources/constants/session.php');
require('./resources/constants/view.php');
require('./resources/presets/general.php');

Session::CHECK_SESSION_TIMEOUT();

$_SESSION["permisos"] = 65535;
$_SESSION["usuarios_id"] = 1;
$_SESSION["eventos_id"] = 2;

$uri        = explode('/', $_SERVER['REQUEST_URI']);
$view       = new View();
$response   = $view->load_elements($uri);
$model      = new stdClass();

if ($response !== true) {
    include("./views/error/".($response === false ? 404 : $response).".php" );
}