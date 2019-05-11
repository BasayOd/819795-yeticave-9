<?php
require_once ('functions.php');
require_once ('init.php');
require_once ('helpers.php');
date_default_timezone_set('Europe/Kiev');
$cats=get_data_all($link,'SELECT id, name, icon FROM categories');
$layout_header=include_template('layout_header.php',['categories'=>$cats]);
$layout_footer=include_template('layout_footer.php',['categories'=>$cats]);
$add_content=include_template('add.php',['categories'=>$cats, 'header'=>$layout_header, 'footer'=>$layout_footer]);

if($_SERVER['REQUEST_METHOD']=='POST'){

        $img=$_FILES['lot-img'];
        $imgname='uploads/'.str_replace("image/", uniqid().".", $img['type']);
        move_uploaded_file($_FILES['lot-img']['tmp_name'], $imgname);
        $sql = 'INSERT  INTO lots (dt_create, name,  description, price,  user_id, category_id, dt_end, bet_step, img) VALUES 
       (NOW(), ?, ?, ?, 1, ?, ?, ?, ?)';
        $stmt=db_get_prepare_stmt($link, $sql,
            [$_POST['lot-name'],$_POST['message'],$_POST['lot-rate'],$_POST['category'],
                $_POST['lot-date'], $_POST['lot-step'], $imgname]);
        $res=mysqli_stmt_execute($stmt);
        if($res){
            $lot_id=mysqli_insert_id($link);
             header('Location: /yeticave/lot.php?id='.$lot_id);

        }
    }


print($add_content);

?>