<?php

namespace ts\base\validators;

use Yii;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class TwPhoneValidator extends \yii\validators\Validator
{
    public $message;

    public function init()
    {
        parent::init();

        $this->message = empty($this->message) ? Yii::t('base', 'Invalid phone.') : $this->message;
    }

    protected function validateValue($value)
    {
        if (!preg_match('#^09\d{8}$#i', $value)) {
            return [$this->message, []];
        }
        return null;
    }

    public function clientValidateAttribute($model, $attribute, $view)
    {
        return <<<JS
JS;
    }
}
