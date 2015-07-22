<?php

namespace ts\base\validators;

use Yii;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class ChineseValidator extends \yii\validators\Validator
{
    public $message;

    public function init()
    {
        parent::init();

        $this->message = empty($this->message) ? Yii::t('base', 'Invalid chinese.') : $this->message;
    }

    protected function validateValue($value)
    {
        if (!preg_match('#^[\x{4E00}-\x{9FA5}]{1,}$#u', $value)) {
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
