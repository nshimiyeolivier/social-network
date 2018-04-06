<?php

// une fonction qui securise les champs des formulaire pour eviter que l'utilisateur puisse entre les scripts.
if(!function_exists('e')){
  function e($string){
    if($string){
      return htmlspecialchars($string);
    }
  }
}

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

// une fonction pour l'affichage d'un message envoyer à un utilisateur qui viens de s'enregistrer
if(!function_exists('set_flash')){
  function set_flash($message, $type = 'info'){
    $_SESSION['notification']['message'] = $message;
    $_SESSION['notification']['type'] = $type;
  }
}

// une fonction pour la redirection vers une page specifique
 if(!function_exists('redirect')){
   function redirect($page){
     header('location:' . $page);
     exit();
   }
 }


// deux fonctions suivant pour garde les donnees tapes dans une formulaire en memoire
if(!function_exists('save_in_put_data')){
  function save_in_put_data(){
    foreach($_POST as $key => $value){
      if(strpos($key, 'password') === false){
        $_SESSION['input'][$key] = $value;
      }
    }
  }
}

if(!function_exists('get_in_put')){
  function get_in_put($key){
    if(!empty($_SESSION['input'][$key])){
      return $_SESSION['input'][$key];
    }else{
      return null;
    }

  }
}

// une fonction permettant de supprimer les donnees gardee au nuveau d'une session
if(!function_exists('clear_input_data')){
  function clear_input_data(){
    if(isset($_SESSION['input'])){
      $_SESSION['input'] = [];
    }
  }
}
?>
