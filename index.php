<?php
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
$products=[
    [
     'name'=>'2014 Rossignol District Snowboard',
     'category'=>$categories[0],
     'price'=>10999,
     'url'=>'img/lot-1.jpg'
    ],
    [
      'name'=>'DC Ply Mens 2016/2017 Snowboard',
      'category'=>$categories[0],
      'price'=>159999,
      'url'=>'img/lot-2.jpg'
    ],
    [
       'name'=>'Крепления Union Contact Pro 2015 года размер L/XL	',
       'category'=>$categories[1],
       'price'=>8000,
      'url'=>'img/lot-3.jpg'
    ],
    [
        'name'=>'Ботинки для сноуборда DC Mutiny Charocal',
        'category'=>$categories[2],
        'price'=>10999,
        'url'=>'img/lot-4.jpg'
    ],
    [
        'name'=>'Куртка для сноуборда DC Mutiny Charocal',
        'category'=>$categories[3],
        'price'=>7500,
        'url'=>'img/lot-5.jpg'
    ],
    [
        'name'=>'Маска Oakley Canopy',
        'category'=>$categories[5],
        'price'=>5400,
        'url'=>'img/lot-6.jpg'
    ]
    ];
$user_name = 'Vasil Litvinenko'; // укажите здесь ваше имя
$title = "Главная";
function form_price($summ){
    $summ=ceil($summ);
    if ($summ>=1000){
        $summ=number_format($summ, 0, '',' ');
    }
    return $summ.=' <b class="rub">р</b>'; 
}


require_once ('functions.php');
$page_content=include_template('index.php',['categories'=>$categories, 'products'=>$products]);
$layout_content=include_template('layout.php',
        ['content'=>$page_content,
         'title'=>$title,
         'user_name'=>$user_name,
         'categories'=>$categories]);
print($layout_content);
?>
