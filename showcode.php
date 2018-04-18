<?php

session_start();

include('filters/user_filter.php');
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');

if(!empty($_GET['id'])){
  $q = $db->prepare('SELECT code FROM codes WHERE id = ?');
  $success = $q->execute([$_GET['id']]);

// si l'id existe
  if($success){
    // recupère les données dans la base des données
    $data = $q->fetch(PDO::FETCH_OBJ);

    if(!$data){
      redirect('share.php');
    }
  }
  // si l'ID n'existe pas
}else{
  redirect('share.php');
}
?>
<?php include('views/showcode.view.php'); ?>
