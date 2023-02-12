<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
$config->set('dbhost', 'containers-us-west-150.railway.app:5856/railway');
$config->set('dbname', 'framework');
$config->set('dbuser', 'super');
$config->set('dbpass', '123456');
?>