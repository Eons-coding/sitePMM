<?php
/**
 * Created by xavier using PhpStorm.
 * PMM
 * 02/2016
 */

function _getTimeDate($param = "date"){
    if      ($param == 'date') return '<span id="date">'.date('l j F Y').'</span>';
    else if ($param == 'time') return '<span id="time">'.date('H:i:s').'</span>';
}

function _htmlHeader($title){
    echo '<!DOCTYPE HTML>
                <html lang="en">
                <head>
                    <meta http-equiv="content-type" content="text/html; charset=utf-8">
                    <title>';
                    if(!empty($title)){ echo $title;}
    echo '</title>
          </head>
          <body>';
}