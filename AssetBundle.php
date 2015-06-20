<?php

namespace tsace;

class AssetBundle extends \yii\web\AssetBundle
{
    public $cssEnhance = [];

    public $jsEnhance = [];

    public function registerAssetFiles($view)
    {
        $manager = $view->getAssetManager();

        foreach ($this->jsEnhance as $js => $options) {
            if (is_numeric($js)) {
                $js = $options;
                $options = [];
            }
            $view->registerJsFile($manager->getAssetUrl($this, $js), $options);
        }

        foreach ($this->cssEnhance as $css => $options) {
            if (is_numeric($css)) {
                $css = $options;
                $options = [];
            }
            $view->registerCssFile($manager->getAssetUrl($this, $css), $options);
        }
    }
}
