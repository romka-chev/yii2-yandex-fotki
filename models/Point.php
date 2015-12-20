<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 20.12.2015
 * Time: 8:28
 */

namespace romkaChev\yandexFotki\models;


use romkaChev\yandexFotki\interfaces\models\IPoint;
use romkaChev\yandexFotki\traits\YandexFotkiAccess;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * Class GeoRssPoint
 *
 * @package romkaChev\yandexFotki\models
 */
class Point extends Model implements IPoint
{
    use YandexFotkiAccess;

    /** @var int */
    public $zoomLevel;
    /** @var string */
    public $type;
    /** @var string */
    public $mapType;
    /** @var float[] */
    public $coordinates;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['zoomLevel', 'integer'],
            ['type', 'string'],
            ['mapType', 'string'],
            ['coordinates', 'each', 'rule' => ['number']],
        ];
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function loadWithData($data)
    {
        $this->load([
            $this->formName() => [
                'zoomLevel'   => ArrayHelper::getValue($data, 'zoomlevel'),
                'type'        => ArrayHelper::getValue($data, 'type'),
                'mapType'     => ArrayHelper::getValue($data, 'maptype'),
                'coordinates' => ArrayHelper::getValue($data, $this->getCoordinatesParser()),
            ],
        ]);

        return $this;
    }

    /**
     * @return \Closure
     */
    public function getCoordinatesParser()
    {
        /**
         * @param $array
         * @param $defaultValue
         *
         * @return float[]|null
         */
        return function ($array, $defaultValue) {
            $coordinates = ArrayHelper::getValue($array, 'coordinates');

            return $coordinates ? explode(' ', $coordinates) : $defaultValue;
        };
    }
}