<?php
date_default_timezone_set('Europe/Kiev');
$user_name = 'Vasil Litvinenko'; // укажите здесь ваше имя
$title = "Главная";
require_once ('data.php');
require_once ('functions.php');
$page_content=include_template('index.php',['categories'=>$categories, 'products'=>$products]);
$layout_content=include_template('layout.php',
        ['content'=>$page_content,
         'title'=>$title,
         'user_name'=>$user_name,
         'categories'=>$categories]);
print($layout_content);
?>
