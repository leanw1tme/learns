#!/usr/bin/php
<?php
if (!isset($argv[0])) {
    die();
}
    define('BASEPATH', '.');
    $sCurrentDir = dirname(__FILE__);
    $config = require(dirname($sCurrentDir) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');
    unset($config['defaultController']);
    unset($config['config']);
    require(dirname(dirname($sCurrentDir)) . DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'yiic.php');

?>
