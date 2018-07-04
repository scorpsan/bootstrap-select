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
                $this->js[] = ['dist/js/i18n/defaults-ru_RU.min.js'];
                break;
            case ('en' || 'en_US'):
                $this->js[] = ['dist/js/i18n/defaults-en_US.min.js'];
                break;
            case ('fr' || 'fr_FR'):
                $this->js[] = ['dist/js/i18n/defaults-fr_FR.min.js'];
                break;
            case ('de' || 'de_DE'):
                $this->js[] = ['dist/js/i18n/defaults-de_DE.min.js'];
                break;
            case ('ar' || 'ar_AR'):
                $this->js[] = ['dist/js/i18n/defaults-ar_AR.min.js'];
                break;
            case ('bg' || 'bg_BG'):
                $this->js[] = ['dist/js/i18n/defaults-bg_BG.min.js'];
                break;
            case ('cs' || 'cs_CZ'):
                $this->js[] = ['dist/js/i18n/defaults-cs_CZ.min.js'];
                break;
            case ('da' || 'da_DK'):
                $this->js[] = ['dist/js/i18n/defaults-da_DK.min.js'];
                break;
            case ('es' || 'es_ES'):
                $this->js[] = ['dist/js/i18n/defaults-es_ES.min.js'];
                break;
            case ('es' || 'es_CL'):
                $this->js[] = ['dist/js/i18n/defaults-es_CL.min.js'];
                break;
            case ('et' || 'et_EE'):
                $this->js[] = ['dist/js/i18n/defaults-et_EE.min.js'];
                break;
            case ('fa' || 'fa_IR'):
                $this->js[] = ['dist/js/i18n/defaults-fa_IR.min.js'];
                break;
            case ('fi' || 'fi_FI'):
                $this->js[] = ['dist/js/i18n/defaults-fi_FI.min.js'];
                break;
            case ('hr' || 'hr_HR'):
                $this->js[] = ['dist/js/i18n/defaults-hr_HR.min.js'];
                break;
            case ('hu' || 'hu_HU'):
                $this->js[] = ['dist/js/i18n/defaults-hu_HU.min.js'];
                break;
            case ('id' || 'id_ID'):
                $this->js[] = ['dist/js/i18n/defaults-id_ID.min.js'];
                break;
            case ('it' || 'it_IT'):
                $this->js[] = ['dist/js/i18n/defaults-it_IT.min.js'];
                break;
            case ('ja' || 'ja_JP'):
                $this->js[] = ['dist/js/i18n/defaults-ja_JP.min.js'];
                break;
            case ('kh' || 'kh_KM'):
                $this->js[] = ['dist/js/i18n/defaults-kh_KM.min.js'];
                break;
            case ('ko' || 'ko_KR'):
                $this->js[] = ['dist/js/i18n/defaults-ko_KR.min.js'];
                break;
            case ('lt' || 'lt_LT'):
                $this->js[] = ['dist/js/i18n/defaults-lt_LT.min.js'];
                break;
            case ('nb' || 'nb_NO'):
                $this->js[] = ['dist/js/i18n/defaults-nb_NO.min.js'];
                break;
            case ('nl' || 'nl_NL'):
                $this->js[] = ['dist/js/i18n/defaults-nl_NL.min.js'];
                break;
            case ('pl' || 'pl_PL'):
                $this->js[] = ['dist/js/i18n/defaults-pl_PL.min.js'];
                break;
            case ('pt' || 'pt_BR'):
                $this->js[] = ['dist/js/i18n/defaults-pt_BR.min.js'];
                break;
            case ('pt' || 'pt_PT'):
                $this->js[] = ['dist/js/i18n/defaults-pt_PT.min.js'];
                break;
            case ('ro' || 'ro_RO'):
                $this->js[] = ['dist/js/i18n/defaults-ro_RO.min.js'];
                break;
            case ('sk' || 'sk_SK'):
                $this->js[] = ['dist/js/i18n/defaults-sk_SK.min.js'];
                break;
            case ('sl' || 'sl_SI'):
                $this->js[] = ['dist/js/i18n/defaults-sl_SI.min.js'];
                break;
            case ('sv' || 'sv_SE'):
                $this->js[] = ['dist/js/i18n/defaults-sv_SE.min.js'];
                break;
            case ('tr' || 'tr_TR'):
                $this->js[] = ['dist/js/i18n/defaults-tr_TR.min.js'];
                break;
            case ('ua' || 'ua_UA'):
                $this->js[] = ['dist/js/i18n/defaults-ua_UA.min.js'];
                break;
            case ('vi' || 'vi_VN'):
                $this->js[] = ['dist/js/i18n/defaults-vi_VN.min.js'];
                break;
            case ('zh' || 'zh_CN'):
                $this->js[] = ['dist/js/i18n/defaults-zh_CN.min.js'];
                break;
            case ('zh' || 'zh_TW'):
                $this->js[] = ['dist/js/i18n/defaults-zh_TW.min.js'];
                break;
            default:
                $this->js[] = ['dist/js/i18n/defaults-eu.min.js'];
        }
        //Yii::$app->view->registerJs('$(".selectpicker").selectpicker("render");');
        parent::init();
    }

}
