<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 26.02.2016
 * Time: 21:12
 */

namespace romkaChev\yandexFotki\traits\parsers;


use romkaChev\yandexFotki\interfaces\models\AbstractPoint;
use yii\helpers\ArrayHelper;

/**
 * Class PointParser
 *
 * @package romkaChev\yandexFotki\traits\parsers
 */
trait PointParser
{
    /**
     * @param string|\Closure|array $key
     * @param AbstractPoint         $model
     * @param bool                  $fast
     *
     * @return \Closure
     */
    public function getPointParser($key, AbstractPoint $model, $fast = false)
    {
        /**
         * @param $array
         * @param $defaultValue
         *
         * @return mixed
         */
        return function ($array, $defaultValue) use ($key, $model, $fast) {
            $data = ArrayHelper::getValue($array, $key);
            if ($data instanceof AbstractPoint) {
                return $data;
            }

            $localModel = clone $model;
            $localModel->loadWithData($data, $fast);

            return $localModel ?: $defaultValue;
        };
    }
}