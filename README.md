# bootstrap-select

Позволяет использовать стилизованные выпадающие списки. Плагин мультиязычный, поэтому установите язык (‘ru’, ‘fr’, ‘de’, ‘en’ – по умолчанию) в своем приложении.

## Installation

The preferred way to install this extension through [composer](http://getcomposer.org/download/).

You can set the console

```
$ composer require "scorpsan/bootstrap-select"
```

or add

```
"scorpsan/bootstrap-select": "*"
```

in ```require``` section in `composer.json` file.

## Using

Once the extension is installed, simply use it in your code by  :

Add following code to your configuration file of application:

```php
<?php
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use phpnt\bootstrapSelect\BootstrapSelectAsset;

BootstrapSelectAsset::register($this);
// теперь, все элементы, которые имеют класс selectpicker, будут стилизованными выпадающими списками
// массив элементов
$items = [
    1 => 'Апельсин',
    2 => 'Бочка',
    3 => 'Велосипед',
    4 => 'Гризли',
    5 => 'Дом',
    6 => 'Енот',
    7 => 'Ежкина мать',
    8 => 'Жигули',
    9 => 'Зуб',
    10 => 'Ирригация'
];
// Использование в активной форме
$form = ActiveForm::begin();
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-success',
        'live-search' => 'false',
        'size' => 7,
        'title' => 'Ничего не выбрано'
    ]]);
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-primary',
        'live-search' => 'true',
        'size' => 7,
        'title' => 'Ничего не выбрано',
    ],
]);
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'multiple' => true,
    'data' => [
        'style' => 'btn-warning',
        'live-search' => false,
        'size' => 7,
    ],
]);
ActiveForm::end();
// Использование без активной формы
echo Html::dropDownList('item', null, $items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-info',
        'live-search' => 'false',
        'size' => 7,
        'title' => 'Ничего не выбрано',
    ]
]);
echo Html::dropDownList('item', null, $items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-default',
        'live-search' => 'true',
        'size' => 7,
        'title' => 'Ничего не выбрано',
    ]
]);
?>
```

## License

yii2-geoip is released under the BSD 3-Clause License.
