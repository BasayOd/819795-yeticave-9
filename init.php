<?php
$link=mysqli_connect('localhost', 'root', 'Ihamop97', 'yeticave');
if (!$link){
    print('connect error'.mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");
$sql='SELECT name, icon FROM categories';
$result=mysqli_query($link, $sql);
if ($result == false) {
    print("Произошла ошибка при выполнении запроса cats");
}
$cats=mysqli_fetch_all($result, MYSQLI_ASSOC );
if (!$cats){
    print("Произошла ошибка при выполнении запроса cats");
}
$sql='SELECT l.name, c.name AS category, l.price, l.img AS url FROM lots l 
 LEFT JOIN categories c ON l.category_id=c.id ORDER BY l.dt_create ASC ;';
$result=mysqli_query($link, $sql);
if ($result == false) {
    print("Произошла ошибка при выполнении запроса lots");
}
$lots=mysqli_fetch_all($result, MYSQLI_ASSOC);
if ($result == false) {
    print("Произошла ошибка при выполнении запроса lots");
}


?>