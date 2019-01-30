<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../../common/config/main-local.php',
    require __DIR__ . '/../config/main.php',
    require __DIR__ . '/../config/main-local.php'
);

(new yii\web\Application($config))->run();

//entry script for web application 

   //defining global constants
   defined('YII_DEBUG') or define('YII_DEBUG', true);
   defined('YII_ENV') or define('YII_ENV', 'dev');
 
   //register composer autoloader
   require(__DIR__ . '/../vendor/autoload.php');
   //include yii files
   require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
  
   //load application config
   $config = require(__DIR__ . '/../config/web.php');
  
   //create, config, and process reques
   (new yii\web\Application($config))->run();
?>
