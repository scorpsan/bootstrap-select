# bootstrap-select

Позволяет использовать стилизованные выпадающие списки. Плагин мультиязычный, поэтому установите язык в своем приложении.

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
...
use phpnt\bootstrapSelect\BootstrapSelectAsset;
...

BootstrapSelectAsset::register($this);
...

echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-success',
        'live-search' => false,
        'size' => 7,
        'title' => 'Choose one...'
    ]]);
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-primary',
        'live-search' => true,
        'size' => 7,
        'title' => 'Choose one...',
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

echo Html::dropDownList('item', null, $items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-info',
        'live-search' => false,
        'size' => 7,
        'title' => 'Choose one...',
    ]
]);
echo Html::dropDownList('item', null, $items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-default',
        'live-search' => true,
        'size' => 7,
        'title' => 'Choose one...',
    ]
]);

...
?>
```
