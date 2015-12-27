<?php
return array(
    'db' => array(
        'adapters' => array(),
        'database' => 'evttest',
        'driver' => 'PDO_Mysql',
        'hostname' => 'startup-xpress.com',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
        ),
    ),
    'view_manager' => array(
        'display_exceptions' => true,
    ),
    'router' => array(
        'routes' => array(),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(),
        ),
    ),
);
