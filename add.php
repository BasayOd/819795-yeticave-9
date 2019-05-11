<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
$cats=get_data_all($link,'SELECT name, icon FROM categories');
$layout_header=include_template('layout_header.php',['categories'=>$cats]);
$layout_footer=include_template('layout_footer.php',['categories'=>$cats]);
$add_content=include_template('add.php',['categories'=>$cats, 'header'=>$layout_header, 'footer'=>$layout_footer]);

print($add_content);
if($_SERVER['REQUEST_METHOD']='POST'){
    header("Location: C:\Openserver\OSPanel\domains\yeticave\yeticave\index.php?success=true");
}
if ($_POST) {
    $sql = 'INSERT  INTO lots (name,  description, price,  user_id, dt_end, bet_step) VALUES 
(' . $_POST['lot-name'] . ',' . $_POST['message'] . ',' . $_POST['lot-rate'] . ',1,' . $_POST['lot-date'] . ',' . $_POST['lot-step'] . ');';
   $stmt=db_get_prepare_stmt($link, $sql);
    mysqli_stmt_execute($stmt);
}
?>