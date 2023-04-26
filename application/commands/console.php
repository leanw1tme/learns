#!/usr/bin/php
<?php
if (!isset($argv[0])) {
    die();
}

define('BASEPATH', '.');

// The PHP file extension
define('EXT', '.php');

require_once __DIR__ . '/../../vendor/autoload.php';
require_once(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'yiisoft' . DIRECTORY_SEPARATOR . 'yii'. DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'yii.php');

// Load configuration.
$sCurrentDir = dirname(__FILE__);
$settings = require(dirname($sCurrentDir) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config-defaults.php');
$config = require(dirname($sCurrentDir) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'internal.php');
$config['components']['session']['class'] = 'ConsoleHttpSession';
$config['components']['session']['cookieMode'] = 'none';
$config['components']['session']['cookieParams'] = [];

$core = dirname($sCurrentDir) . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR;
if (isset($config['config'])) {
    $settings = array_merge($settings, $config['config']);
}
unset($config['defaultController']);
unset($config['config']);

/* fix runtime path, unsure you can lauch function anywhere (if you use php /var/www/limesurvey/... : can be /root/ for config */
if (!isset($config['runtimePath'])) {
    $runtimePath = $settings['tempdir'] . '/runtime';
    if (!is_dir($runtimePath) || !is_writable($runtimePath)) {
        $runtimePath = str_replace($settings['rootdir'], dirname(dirname(dirname(__FILE__))), $runtimePath);
    }
    $config['runtimePath'] = $runtimePath;
}

// fix for fcgi
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('YII_DEBUG') or define('YII_DEBUG', true);

/* specific for web */
unset($config['defaultController']);

if (isset($config)) {
    require_once($core . 'ConsoleApplication.php');
    $app = Yii::createApplication('ConsoleApplication', $config);
    define('APPPATH', Yii::app()->getBasePath() . DIRECTORY_SEPARATOR);
    $app->commandRunner->addCommands(YII_PATH . '/cli/commands');
    $env = (string) @getenv('YII_CONSOLE_COMMANDS');
    if (!empty($env)) {
        $app->commandRunner->addCommands($env);
    }

    // @see https://bugs.limesurvey.org/view.php?id=15500
    Yii::import('application.helpers.ClassFactory');
    ClassFactory::registerClass('Token_', 'Token');
    ClassFactory::registerClass('Response_', 'Response');
}

$app->run();
