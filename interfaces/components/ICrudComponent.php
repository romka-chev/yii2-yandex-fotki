<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 17.12.2015
 * Time: 9:07
 */

namespace romkaChev\yandexFotki\interfaces\components;


use romkaChev\yandexFotki\interfaces\IModuleAccess;

interface ICrudComponent extends IModuleAccess
{
    /**
     * @param mixed $identity
     *
     * @return mixed
     */
    public function get($identity);

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function create($data);

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function update($data);

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function delete($data);

    /**
     * @param $identities
     *
     * @return mixed
     */
    public function multiGet($identities);

    /**
     * @param $data
     *
     * @return mixed
     */
    public function multiCreate($data);

    /**
     * @param $data
     *
     * @return mixed
     */
    public function multiUpdate($data);

    /**
     * @param $data
     *
     * @return mixed
     */
    public function multiDelete($data);
}