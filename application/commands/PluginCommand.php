<?php

class PluginCommand extends CConsoleCommand
{
    public $connection;

    /**
    * register some needed or a lot used part
    */
    public function init()
    {
        parent::init();
        Yii::import('application.helpers.common_helper', true);
    }

    /**
     * Call for cron action
     * @param int $interval Minutes for interval
     * @return void
     */
    public function actionCron($interval = null)
    {
        $pm = \Yii::app()->pluginManager;
        $event = new PluginEvent('cron');
        $event->set('interval', $interval);
        $pm->dispatchEvent($event);
    }

    /**
     * Call directly an event by command (it's default)
     * @param string $target Target of action, plugin name for example
     * @param mixed $function Extra parameters for plugin
     * @param mixed $option Extra parameters for plugin
     * @return void
     */
    public function actionIndex($target, $function = null, $option = null)
    {
        $pm = \Yii::app()->pluginManager;
        $event = new PluginEvent('direct');
        $event->set('target', $target);
        $event->set('function', $function);
        $event->set('option', $option);
        $pm->dispatchEvent($event);
    }
}
