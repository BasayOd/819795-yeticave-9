<?php
/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
require_once ('helpers.php');
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';
    if (!is_readable($name)) {
        return $result;
    }
    ob_start();
    extract($data);
    require $name;
    $result = ob_get_clean();
    return $result;
}
function form_price($summ){
    $summ=ceil($summ);
    if ($summ>=1000){
        $summ=number_format($summ, 0, '',' ');
    }
    return $summ.=' <b class="rub">р</b>';
}
function show_remaining_time(){
    $difference=date_diff(date_create('now'),date_create('tomorrow'));
    return date_interval_format($difference, '%H:%I');
}
function check_alarm($time=3600){
    if ((strtotime('tomorrow')-strtotime('now'))/$time<=1){
        return ' timer--finishing';
    };
}

function get_data_all($link, $str, $data=[]){
    $stmt=db_get_prepare_stmt($link, $str, $data);
    mysqli_stmt_execute($stmt);
    $res=mysqli_stmt_get_result($stmt);
    if ($res == false) {
        print("Произошла ошибка при выполнении запроса1");
    }
    $result=mysqli_fetch_all($res, MYSQLI_ASSOC );
    if (!$result){
        print("Произошла ошибка при выполнении запроса2");
    }
    return $result;
}
?>