<?php
namespace scorpsan\bootstrapSelect;

use yii\web\AssetBundle;
use Yii;

class BootstrapSelectAsset extends AssetBundle {

    public $sourcePath = '@bower/bootstrap-select';

    public $css = [
        'dist/css/bootstrap-select.min.css',
    ];

    public $js = [
        'dist/js/bootstrap-select.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    public function init() {
        switch (Yii::$app->language) {
            case ('ru' || 'ru_RU'):
                $this->js[] = [
                    'dist/js/i18n/defaults-ru_RU.min.js',
                ];
                break;
            case ('fr' || 'fr_FR'):
                $this->js[] = [
                    'dist/js/i18n/defaults-fr_FR.min.js',
                ];
                break;
            case ('de' || 'de_DE'):
                $this->js[] = [
                    'dist/js/i18n/defaults-de_DE.min.js',
                ];
                break;
        }
        $js = "$('.selectpicker').selectpicker('render');";
        //$js .= "$('.bootstrap-select').click(function () {";
        //$js .= "$('.selectpicker').selectpicker('refresh');";
        //$js .= "});";
        Yii::$app->view->registerJs($js);
        parent::init();
    }

}
