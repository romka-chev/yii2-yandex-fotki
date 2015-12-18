<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 17.12.2015
 * Time: 15:43
 */

namespace romkaChev\yandexFotki\tests\unit;


use romkaChev\yandexFotki\Module;
use yii\console\Application;
use yii\helpers\ArrayHelper;

class BaseTestCase extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        new Application(ArrayHelper::merge(
            require(__DIR__ . '/config/main.php'),
            require(__DIR__ . '/config/main-local.php')
        ));
    }

    /**
     * @return Module
     */
    public function getModule()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        return \Yii::$app->getModule('yandexFotki');
    }
}