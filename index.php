<?php
include 'function.php';
    $is_auth = (bool) rand(0, 1);

    $user_name = 'Константин';
    $user_avatar = 'img/user.jpg';
    $list_category = array ("Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное");
    $list_lots = array( array("2014 Rossignol District Snowboard", "Доски и лыжи", 10999, "img/lot-1.jpg"),
                array("DC Ply Mens 2016/2017 Snowboard", "Доски и лыжи", 159999, "img/lot-2.jpg"),
                array("Крепления UCP 2015 года размер L/XL", "Крепления", 8000, "img/lot-3.jpg"),
                array("Ботинки для сноуборда DC Mutiny Charocal", "Ботинки", 10999, "img/lot-4.jpg"),
                array("Куртка для сноуборда DC Mutiny Charocal", "Одежда", 7500, "img/lot-5.jpg"),
                array("Маска Oakley Canopy", "Разное", 5400, "img/lot-6.jpg") 
                ); 
    
                
    $index = render('index', array('list_lots'=>$list_lots));
    echo render('layout', array('index'=>$index, 'user_name'=>$user_name, 'user_avatar'=>$user_avatar, 'list_category'=>$list_category));
?>
