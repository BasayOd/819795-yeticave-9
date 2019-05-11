<?php
$link=mysqli_connect('localhost', 'root', '', 'yeticave');
if (!$link){
    print('connect error'.mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

?>