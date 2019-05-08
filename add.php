<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
$cats=get_data_all($link,'SELECT name, icon FROM categories');
$layout_header=include_template('layout_header.php',['categories'=>$cats]);
$layout_footer=include_template('layout_footer.php',['categories'=>$cats]);
$add_content=include_template('add.php',['header'=>$layout_header, 'footer'=>$layout_footer]);

print($add_content);
?>