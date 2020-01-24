<?php
$datas = require 'data/gallery.php';

function findOneById($id){
    global $datas;
    foreach($datas as $data){
        if($id == $data['id']){
            return $data;
        }
    }
    return false;
}
// _Renvoi la photo ayant l'id [id], ou FALSE si cet identifiant est introuvable_

function getCount($datas){
    return count($datas['id']);
}
// _Renvoi le nombre de photos présente dans la base de données._

function findPaged($limit,$offset=0){
    global $datas;
    $tab =[];
    $compteur=0;
    $compteur2=0;
    foreach($datas as $data){

        $compteur2++;
        if($compteur2<=$offset){
            continue;
        }
        $compteur ++;
        $tab[]=$data;
        if($compteur>= $limit){
        break;
        }
    }
    return $tab;
}
// _Renvoi les [limit] photos, à partir de la photo [offset]._

function findLatest(int $limit){

}

// _Renvoi les [limit] dernières photos (triées par date)._


?>