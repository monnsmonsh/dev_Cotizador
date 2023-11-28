<?php

    //Para saber si estamos en servidor Local
    define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));
    define('URL' ,(IS_LOCAL ? 'http://127.0.0.1/dev_Cotizador/' : 'LA URL DE SU SERVIDOR EN PRODUCCIÓN'));

    //def Rutas para las carpetas
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', getcwd().DS);//regresamos rutas en HDD no url
    define('APP', ROOT.'app'.DS);
    define('ASSETS',ROOT.'assets'.DS);
    define('TEMPLATES', ROOT.'templates'.DS);
    define('INCLUDES', TEMPLATES.'includes'.DS);
    define('MODULES', TEMPLATES.'modules'.DS);
    define('VIEWS', TEMPLATES.'views'.DS);
    define('UPLOADS', ROOT.'uploads'.DS);

    //Para concatinararchivos que vayamos a incluir en header o footer (css o js)
    define('CSS' , URL.'assests/css/');
    define('IMG' , URL.'assests/img/');
    define('JS' , URL.'assests/js/');

    //Cargar todas las funcciones
    require_once APP.'functions.php';

