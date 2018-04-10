<?php

session_start();

include('filters/user_filter.php');
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');

if(!empty($_GET['id'])){
  // Recupère les infos sur l'utilisateur dans la base de données en utilisant son identifiant
  $user = find_user_by_id($_GET['id']);
// si l'utilisateur ne se trouve pas dans la db
  if(!$user){
    redirect('index.php');
  }
// si l'utilisateur est bien dans la  db
}else{
  redirect('profile.php?='. get_session('user_id'));
}

include('views/profile.view.php');

?>
