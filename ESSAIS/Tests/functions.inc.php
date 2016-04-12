<?php
/**
 * Created by PhpStorm.
 * User: MIDGETSTORM
 * Date: 16-02-16
 * Time: 14:29
 */

require 'functions.inc.php';
?>

<?php
echo _getHead("SEM2_TP2", "css/style.css")
    ._getBody(_getTimeDate(), _getTimeDate("time"))
    ._getFooter();

//Fonction de cr�ation de l'en-t�te de la page
function _getHead($title = "no title", $stylesheet = "null"){
    $out = '';
    $out .= '<!DOCTYPE html>';
    $out .= '<html>';
    $out .= '<head>';
    $out .=     '<meta charset="UTF-8">';
    $out .=     '<title>'.$title.'</title>';
    $out .=     '<link rel="stylesheet" href="'.$stylesheet.'">';
    $out .=     '<script src="js/script.js"></script>';
    $out .= '</head>';
    return $out;
}

function _getBody($param = "", $param2 = ""){
    $out = '';
    $out .= '<body>';
    $out .= $param;
    $out .= $param2;
    $out .= '</body>';
    return $out;
}

function _getFooter(){
    $out = '';
    $out .= '<footer>';
        $out .= '<p><a href="mailto:@gmail.com">Contact</a></p>';
        $out .= '<a href="#topAnchor">Retour vers le haut</a>';
    $out .= '</footer>';
    $out .= '</html>';
    return $out;
}

function _getTimeDate($param = "date"){
    if      ($param == 'date') return '<span id="date">'.date('l j F Y').'</span>';
else if ($param == 'time') return '<span id="time">'.date('H:i:s').'</span>';
}

?>