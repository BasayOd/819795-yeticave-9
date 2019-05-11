<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
$id=null;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$lot=get_data_one($link,'SELECT l.*, c.name AS category FROM lots l 
                              LEFT JOIN categories c ON l.category_id=c.id 
                              WHERE l.id=?;', [$id]);
$cats=get_data_all($link,'SELECT name, icon FROM categories');
$bets=get_data_all($link, 'SELECT b.*, u.name AS user_name FROM bets b 
                               LEFT JOIN users u ON b.user_id=u.id 
                               WHERE b.lot_id=? ORDER BY amount DESC;', [$id]);
$layout_header=include_template('layout_header.php',['categories'=>$cats]);
$layout_footer=include_template('layout_footer.php',['categories'=>$cats]);
$layout_bet=include_template('bet.php',['lot'=>$lot]);

$lot_content=include_template('lot.php',['categories'=>$cats, 'lot'=>$lot,
    'bets'=>$bets, 'header'=>$layout_header, 'footer'=>$layout_footer,'bet'=>$layout_bet]);
if (!$lot) {
    $lot_content = include_template('404.php', ['categories' => $cats, 'header' => $layout_header, 'footer' => $layout_footer]);
}

print($lot_content);
?>
