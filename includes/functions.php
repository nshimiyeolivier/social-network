<?php

// une fonction pour verifier si les champs sont bien rempli
if(! defined('not_empty')){
  function not_empty($fields = []){
    if(count($fields) != 0){
      foreach($fields as $field){
        if(empty($_POST[$field]) || trim($_POST[$field]) == ""){
          return false;
        }
      }
        return true;
    }
  }
}

// une fonction pour verifier si le pseudo ou mod depasse est déjà utilisé
if(! defined('is_already-in_use')){
  function is_already_in_use ($field, $value, $table){
    global $db;

    $q = $db -> prepare("SELECT id FROM $table WHERE $field = ?");

    $q->execute([$value]);

    // pour avoir le nombre de resultats

    $count = $q->rowCount();

    // Apres avoir faire des requetes de selection il faut auto. ferme le curseur
    $q->closeCursor();

    return $count;
  }
}

?>
