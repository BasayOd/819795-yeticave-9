<?php
date_default_timezone_set('Europe/Kiev');
$user_name = 'Vasil Litvinenko'; // укажите здесь ваше имя
$title = "Главная";
require_once ('data.php');
require_once ('functions.php');
require_once ('init.php');
$page_content=include_template('index.php',['categories'=>$cats, 'products'=>$lots]);
$layout_content=include_template('layout.php',
        ['content'=>$page_content,
         'title'=>$title,
         'user_name'=>$user_name,
         'categories'=>$cats]);
print($layout_content);
?>
