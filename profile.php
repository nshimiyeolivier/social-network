<?php

session_start();

include('filters/user_filter.php');
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');

// ***********************************************************************************************************************
// check if the user exist in your db or not
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
// ************************************************************************************************************************

// verify if the submit button has been clicked
 if(isset($_POST['update'])){

   $errors = [];
   // and if all fields have been well in-field
     if(not_empty(['age','country', 'city', 'sex', 'biography'])){

       extract($_POST);
  // update informations about a logged user in a db
       $q = $db->prepare('UPDATE users SET age = :age, country = :country, twitter = :twitter, available_for_hiring = :available_for_hiring, city = :city, sex = :sex, github = :github,  biography = :biography  WHERE id = :id');

       $q ->execute([
         'age' => $age,
         'country' => $country,
         'twitter' => $twitter,
         'available_for_hiring' => !empty($available_for_hiring) ? '1' : '0',
         'city' => $city,
         'sex'=> $sex,
         'github' => $github,
         'biography' => $biography,
         'id' => get_session('user_id'),
       ]);

       set_flash("Congratulation! your profile has been updated!");
       // recharge et redirectionner vers la page profile.php
       redirect('profile.php?id='.get_session('user_id'));

     }else{
       save_in_put_data();
       $errors[] = "Try to fill all required fields(*)!";
     }
 }else{
   clear_input_data();
 }

include('views/profile.view.php');

?>
