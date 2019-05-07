<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
$user_name = 'Vasil Litvinenko'; // укажите здесь ваше имя
$title = "Главная";
$lots=get_data_all($link,'SELECT l.id, l.dt_end, l.name, c.name AS category, l.price, l.img AS url FROM lots l 
 LEFT JOIN categories c ON l.category_id=c.id ORDER BY l.dt_create ASC LIMIT 6;');
$cats=get_data_all($link,'SELECT name, icon FROM categories');
$page_content=include_template('index.php',['categories'=>$cats, 'products'=>$lots]);
$layout_content=include_template('layout.php',
        ['content'=>$page_content,
         'title'=>$title,
         'user_name'=>$user_name,
         'categories'=>$cats]);
print($layout_content);
?>
