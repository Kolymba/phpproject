<?php 

function render($layout_name, $vars = array()) 
{
        if(file_exists('templates/'.$layout_name.'.php')){
            ob_start();
            extract($vars);
        require 'templates/'.$layout_name.'.php';
        return ob_get_clean();
        }
}
function intformat($int)
         {
             if($int >= 1000){
                 $intceil = ceil($int);
                 $intnf = number_format($intceil, 0, ',', ' '); 
                 $intformat = $intnf . " ₽";             
                 return $intformat;
             }
         } 
         
function datepolnoch($times){
    date_default_timezone_set('Europe/Moscow');
    $ts = time();
    //var_dump($ts); exit;
    $curdate = date('d.m.y.');  
    //var_dump($curdate); exit;       
    $ts_polnoch = strtotime('tomorrow midnight');
    //var_dump($ts_polnoch); exit;
    $ts_lot = $ts_polnoch - $ts;
    //var_dump($ts_lot); exit;
    $hours = floor($ts_lot / 3600);
    //var_dump($hours); exit;
    $minutes = floor(($ts_lot % 3600) / 60);
    //var_dump($minutes); exit;
    return $times = $hours . " часов " . $minutes . " минут";
         
}
?>