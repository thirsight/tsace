<?php

namespace ts\base;

use Yii;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class TwPhoneValidator extends \yii\validators\Validator
{
    public function init()
    {
        parent::init();

        $this->message = Yii::t('base', 'Invalid phone.');
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
