<?php
$link=mysqli_connect('localhost', 'root', 'Ihamop97', 'yeticave');
if (!$link){
    print('connect error'.mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

$lots=get_data_all($link,'SELECT l.name, c.name AS category, l.price, l.img AS url FROM lots l 
 LEFT JOIN categories c ON l.category_id=c.id ORDER BY l.dt_create ASC ;');
$cats=get_data_all($link,'SELECT name, icon FROM categories');
?>