<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 17.12.2015
 * Time: 9:03
 */

namespace romkaChev\yandexFotki\interfaces\models;

use romkaChev\yandexFotki\interfaces\IModuleAccess;

/**
 * Interface IAlbum
 *
 * @package romkaChev\yandexFotki\interfaces\models
 *
 * @property string  urn
 * @property integer id
 * @property IAuthor author
 * @property string  title
 * @property string  summary
 * @property boolean isProtected
 *
 * @property IPhoto  cover
 *
 * @property string  publishedAt
 * @property string  updatedAt
 * @property string  editedAt
 *
 * @property string  linkSelf
 * @property string  linkEdit
 * @property string  linkPhotos
 * @property string  linkCover
 * @property string  linkYmapsml
 * @property string  linkAlternate
 *
 */
interface IAlbum extends IModuleAccess
{
    /**
     * @param array $data
     *
     * @return static
     */
    public function loadWithData($data);
}