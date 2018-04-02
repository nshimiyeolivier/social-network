<?php

// une fonction qui verifie si tout les champs ont belle bien remplis
if(!function_exists('not_empty')){
  function not_empty($fields=[]){
    if(count($fields) != 0){
      foreach ($fields as $field ){
        if(empty($_POST[$field]) || trim($field == "")){
          return false;
        }
      }
      return true;
    }
  }
}


// une fonction pour verifier si un pseudo ou mail n'est pas déjà utilise
if(!function_exists('is_already_in_use')){
    function is_already_in_use($field, $value, $table){
      global $db;

      $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
      $q->execute([$value]);

      $count = $q-> rowCount();


      $q->closeCursor();

      return $count;

    }
}


 ?>
