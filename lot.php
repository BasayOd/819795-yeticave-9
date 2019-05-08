<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
if(isset($_GET['id'])&&is_numeric($_GET['id'])){$id_number=$_GET['id'];
}else{
$id_number='0';}
$lots=get_data_all($link,'SELECT l.*, c.name AS category FROM lots l 
                              LEFT JOIN categories c ON l.category_id=c.id 
                              WHERE l.id='.$id_number.';');
$cats=get_data_all($link,'SELECT name, icon FROM categories');
$bets=get_data_all($link, 'SELECT b.*, u.name AS user_name FROM bets b 
                               LEFT JOIN users u ON b.user_id=u.id 
                               WHERE b.lot_id='.$id_number.' ORDER BY amount DESC;');
$layout_header=include_template('layout_header.php',['categories'=>$cats]);
$layout_footer=include_template('layout_footer.php',['categories'=>$cats]);
if ($lots) {
    $lot=$lots[0];
    $lot_content=include_template('lot.php',['categories'=>$cats, 'lot'=>$lot,
                                  'bets'=>$bets, 'header'=>$layout_header, 'footer'=>$layout_footer]);
   }else{
    $lot_content=include_template('404.php',['categories'=>$cats, 'header'=>$layout_header, 'footer'=>$layout_footer]);};

print($lot_content);
?>
