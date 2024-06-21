<?php

use RusaDrako\templater\Templater;

require_once(__DIR__ . '/../src/autoload.php');

$templater=new Templater();
$templater->addRootFolder(__DIR__.'/');
$templater->assign('data_1', 'test text 1');
$templater->assign('data_2', 'test text 2');
$templater->display('template_folder/template_name');
