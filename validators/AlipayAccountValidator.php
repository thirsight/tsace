<?php

namespace ts\base\validators;

use Yii;
use yii\validators\EmailValidator;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class AlipayAccountValidator extends \yii\validators\Validator
{
    public $message;

    public function init()
    {
        parent::init();

        $this->message = empty($this->message) ? Yii::t('base', 'Invalid alipay account.') : $this->message;
    }

    protected function validateValue($value)
    {
        if (!(new EmailValidator())->validate($value) &&
            !preg_match('#^(?:1\d{10}|886-\d{9,10})$#i', $value)) {
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
