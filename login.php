<?php

session_start();

include('filters/guest_filters.php');
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');

// verify if the submit button has been clicked
 if(isset($_POST['login'])){
   // and if all fields have been well completed
   if(not_empty(['identifiant','password'])){

     extract($_POST);

     $q = $db->prepare("SELECT id, pseudo FROM users
                        WHERE (pseudo = :identifiant OR email = :identifiant)
                        AND password = :password AND active = '1'");

     $q ->execute([
       'identifiant' => $identifiant,
       'password' => sha1($password)
     ]);

     $userHasBeenFound = $q->rowCount();

     if($userHasBeenFound){
// before redirected to the profile's page first check if the user is loged in
       $user = $q->fetch(PDO::FETCH_OBJ);

       $_SESSION['user_id'] = $user->id;
       $_SESSION['pseudo'] = $user->pseudo;

       redirect('profile.php?id=' . $user->id);
     }else{
       set_flash('Incorrect Identifier/Password!', 'danger');
       save_in_put_data();
     }
   }

 }else{
   clear_input_data();
 }

 ?>

<?php include('views/login.view.php'); ?>
