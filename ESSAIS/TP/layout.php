<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 22/02/16
 * Time: 15:30
 */

require "define.php";

$out = '';
$outDebug = '';

function _debug($text){
    echo '<div class=\"pageDebug\">';
    echo $text;
    echo '</div>';
}

function _header($text){
    echo '<div class=\"pageHeader\">';
    echo $text;
    echo '</div>';
}

function _menu($text){
    echo '<div class=\"pageLeftMenu\">';
    echo $text;
    echo '</div>';
}

function _content($text){
    echo '<div class="pageContent">';
    echo $text;
    echo '</div>';
}
function _footer($text){
    echo '<div class="pageFooter">';
    echo $text;
    echo '</div>
          </body>
          </html>';
}

function _metaHeader($title){
    echo '<!DOCTYPE html>
            <head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <link rel="stylesheet" type="text/css" href="css/style.css">
                <title>Page Title</title>
                <meta name="description" content="Write some words to describe your html page">
                <title>';
                    if(!empty($title)){ echo $title;}
    echo '</title>
            </head>';
}

function _titre(){

}

function _linkCSS(){
    echo '';
}


function _getHTML($h, $c, $f, $d, $debug = 1){
    _metaHeader($h);
    echo '<body>
          <div class="blended_grid">';
    _header($h);
    _content($c);
    _footer($f);
    if($debug == 1) {
        _debug($d);
    }
    echo '</div>
          </body>';
}
