<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 20.12.2015
 * Time: 9:01
 */

namespace romkaChev\yandexFotki\validators;


use romkaChev\yandexFotki\interfaces\IYandexFotkiAccess;
use romkaChev\yandexFotki\models\Author;
use romkaChev\yandexFotki\traits\YandexFotkiAccess;
use yii\validators\Validator;

/**
 * Class AuthorValidator
 *
 * @package romkaChev\yandexFotki\validators
 */
class AuthorValidator extends Validator implements IYandexFotkiAccess
{
    use YandexFotkiAccess;

    /**
     * @inheritdoc
     */
    public function validateAttribute($model, $attribute)
    {
        $instance = Author::className();

        if (!$this->$attribute instanceof $instance) {
            $given    = get_class($this->$attribute);
            $this->addError($model, $attribute, "{$attribute} must be an instance of '{$instance}', '{$given}' given.");
        }
    }
}