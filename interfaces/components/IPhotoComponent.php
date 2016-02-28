<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 17.12.2015
 * Time: 8:59
 */

namespace romkaChev\yandexFotki\interfaces\components;


use romkaChev\yandexFotki\interfaces\IYandexFotkiAccess;
use romkaChev\yandexFotki\interfaces\models\AbstractPhoto;
use romkaChev\yandexFotki\interfaces\models\options\AbstractCreatePhotoOptions;

/**
 * Interface IPhotoComponent
 *
 * @package romkaChev\yandexFotki\interfaces\components
 */
interface IPhotoComponent extends IYandexFotkiAccess
{
    /**
     * @param int|string $id
     *
     * @return AbstractPhoto
     */
    public function get($id);

    /**
     * @param AbstractCreatePhotoOptions $options
     *
     * @return AbstractPhoto
     */
    public function create(AbstractCreatePhotoOptions $options);

    /**
     * @param mixed $options
     *
     * @return AbstractPhoto
     */
    public function update($options);

    /**
     * @param mixed $data
     *
     * @return AbstractPhoto
     */
    public function delete($data);

    /**
     * @param $ids
     *
     * @return AbstractPhoto[]
     */
    public function batchGet($ids);

    /**
     * @param AbstractCreatePhotoOptions[] $optionsArray
     *
     * @return AbstractPhoto[]
     */
    public function batchCreate(array $optionsArray);

    /**
     * @param $data
     *
     * @return AbstractPhoto[]
     */
    public function batchUpdate($data);

    /**
     * @param $data
     *
     * @return AbstractPhoto[]
     */
    public function batchDelete($data);
}