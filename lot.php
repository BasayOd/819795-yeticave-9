<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
$id_number=$_GET['id']??'1';
$lots=get_data_all($link,'SELECT l.*, c.name AS category FROM lots l 
                              LEFT JOIN categories c ON l.category_id=c.id 
                              WHERE l.id='.$id_number.';');
$cats=get_data_all($link,'SELECT name, icon FROM categories');
$bets=get_data_all($link, 'SELECT b.*, u.name AS user_name FROM bets b 
                               LEFT JOIN users u ON b.user_id=u.id 
                               WHERE lot_id='.$id_number.' ORDER BY amount DESC;');
if ($lots) {
    $lot=$lots[0];
    $lot_content=include_template('lot.php',['categories'=>$cats, 'lot'=>$lot, 'bets'=>$bets]);
    print($lot_content);
   }else{
    print('404');};
?>
