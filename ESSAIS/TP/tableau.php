<?php

require "functions.php";
require "layout.php";

//$debug = JRequest::getVar('debug','0')=='1';

class tableau{
    // var // TODO CSS a faire pour tableau
    public $liste; // TODO gérer les listes vides et si on n'envoie rien
    public $titre = '';
    public $entete = false;  // true pour afficher les noms des colonnes. False par défaut
    public $id = "id"; // id a donner au tableau pour changer sa colorimétrie
    public $fichierCss;
    public $html = '';

    // functions
    public function getCss(){
        return "/css/style.css";
    }

    public function html(){
        $tampon = '<table class="tableau">';
        if ($this->entete == true){
          $tampon .=
            '<tr>
            <td><b>Title01</b></td>
            <td><b>Title02</b></td>
            <td><b>Title03</b></td>
          </tr>';
        }
        $i = 0;
        for ($i = 1; $i <= 10; $i++) {
            $tampon .= '<tr>
        <td>xxxxxxx</td>
        <td>xxxxxxx</td>
        <td>xxxxxxx</td>
        </tr>';
        }
        $tampon .= '</table>';

        return $tampon;

    }

}

class formulaire{
    // var
    public $action;
    public $method = 'GET';
    public $name = '';
    public $id = 'id';
    public $onSubmit = 'js';
    public $submit = 'envoyer';
    public $html = '';

    // function
    public function html(){

    }
}
/*  Ecrire une class permettant de créer le code html d'un formulaire HTML
    Les fonctionnalités de base sont les suivantes :
    $f->new formulaire(); // crée l'objet
    $f->action = "action"; //action HTML
    $f->method="GET/POST";// method HTML. GET par defaut
    $f->name="nom";// name HTML du formulaire
    $f->id="id"; // id HTML du formulaire
    $f->onSubmit="js"; // code js à passer à onsubmit="..."
    $f->submit="texte"; // si vide : pas de submit. par defaut : "envoyer"
    $html = $f->html(); //retourne le code html du formulaire
    $f->???????
    ???? comment créer les éléments
    ???? comment les mémoriser
    ???? comment les regrouper dans des fieldset
 */

/*
 * JS pour submit la requete, besoin de liste déroulante en HTML
 * on passe au tp suivant si on affiche la requete en utilisant le tableau
 */


$t = new tableau();
//$t->liste = $listePHP;
$t->titre = "Tableau des classes";
$t->entete= true;
$t->id = "id";
$t->fichierCss = $t->getCss();
$t->html = $t->html();
_getHTML($t->titre, $t->html, 'Footer', 'debugLine');




