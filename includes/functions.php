<?php

// une fonction pour verifier si les champs sont bien rempli
if(!function_exists('not_empty')){
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
if(!function_exists('is_already-in_use')){
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

// une fonction pour informer l'utilisateur que l'inscription a reussi et qu'il puisse verifier sa boite de reception
if(!function_exists('set_flash')){
  function set_flash($message, $type = 'info'){
    $_SESSION['notification']['message'] = $message;
    $_SESSION['notification']['type'] = $type;
  }
}

?>
