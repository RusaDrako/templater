# RusaDrako\\templater

[![Latest Stable Version](https://poser.pugx.org/rusadrako/templater/v/stable)](https://packagist.org/packages/rusadrako/templater)
[![Total Downloads](https://poser.pugx.org/rusadrako/templater/downloads)](https://packagist.org/packages/rusadrako/templater/stats)
[![License](https://poser.pugx.org/rusadrako/templater/license)](./LICENSE)

Шаблонизатор

## Установка (composer)
```sh
composer require 'rusadrako/templater'
```


## Установка (manual)
- Скачать и распоковать библиотеку.
- Добавить в код инструкцию:
```php
require_once('/templater/src/autoload.php')
```

## Пример выполнения
```PHP
use RusaDrako\templater\Templater;
$templater=new Templater();
$templater->addRootFolder(__DIR__.'/');
$templater->assign('data_1', 'test text 1');
$templater->assign('data_2', 'test text 2');
$templater->display('template_folder/template_name');
```

```PHP
use RusaDrako\templater\Templater;
$templater=new Templater();
$templater->addRootFolder(__DIR__.'/');
$templater->display('template_folder/template_name', ['data_1'=>'test text 1', 'data_2'=>'test text 2']);
```

```PHP
use RusaDrako\templater\Templater;
$templater=new Templater();
$templater->addRootFolder(__DIR__.'/');
$templater->assign('data_1', 'test text 1');
$templater->assign('data_2', 'test text 2');
echo $templater->render('template_folder/template_name');
```

```PHP
use RusaDrako\templater\Templater;
$templater=new Templater();
$templater->addRootFolder(__DIR__.'/');
echo $templater->render('template_folder/template_name', ['data_1'=>'test text 1', 'data_2'=>'test text 2']);
```

## Вызов шаблона из другого шаблона
```PHP
<hr>
<?php $this->templater->display('template_folder/template_name_2', ['data_3'=>'test text 3',]) ?>
<hr>
```
