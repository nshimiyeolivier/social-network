<?php

session_start();

include('filters/user_filter.php');
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');

//verifier si la formulaire à été soumis
if(isset($_POST['save'])){
    if(!empty(['code'])){

        extract($_POST);

        $q = $db->prepare('INSERT INTO codes(code) VALUES(?)');
        $success = $q->execute([$code]);

        if($success){
          // ON RECUPERE LE DERNIER ID ENREGISTRE AVEC LA FONCTION lastInsertId
          $id = $db->lastInsertId();
        // affiche le code source sur une autre page
        redirect('showcode.php?id='.$id);
        }else{
          set_flash("Error while saving the source code! Retry pls.");
          redirect("share.php");
        }
      }else{

        redirect ("share.php");
    }
}

?>
<?php include('views/share.view.php'); ?>
