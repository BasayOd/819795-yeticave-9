<?php
$link=mysqli_connect('localhost', 'root', 'Ihamop97', 'yeticave');
if (!$link){
    print('connect error'.mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

?>