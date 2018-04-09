<?php

session_start();

include('filters/guest_filters.php');
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');

// verify if the submit button has been clicked
 if(isset($_POST['register'])){
   // and if all fields have been well completed
   if(not_empty(['firstname', 'lastname', 'pseudo', 'email', 'password', 'password_confirm'])){

     $errors = [];

     extract($_POST);
     // verify if the pseudo has minimum 3 letters
     if(mb_strlen($pseudo) < 3){
       $errors[] = "Very short Pseudo, (it must contain minimum 3 letters!) ";
     }

     // verify if the email is valid
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors[] = "Invalid Email!";
     }

     // verify if the passwor has minimum 6 letters
     if(mb_strlen($password) < 6){
       $errors[] = "Very short Password, (it must contain minimum 6 letters!) ";
     }else{
       if($password != $password_confirm){
         $errors[] = "Your passwords are not equivalent!";
       }
     }

     //verify if in table USERS there is no the same pseudo
     if(is_already_in_use('pseudo', $pseudo, 'users')){
       $errors[] = "This pseudo is not available(It has been used by another member!)";
     }

     //verify if in table Email there is no the same email
     if(is_already_in_use('email', $email, 'users')){
       $errors[] = "This email is not available(It is already in use!)";
     }

// in case there is no errors the form can be submited and the user will be informed
     if(count($errors) == 0){
    // envoie d'un mail d'activation
    $to = $email;
    $subject = WEBSITE_NAME . " - ACTIVATION DE COMPTE";

    $password = sha1($password);
    $token = sha1($pseudo.$email.$password);

    ob_start();
    require('templates/emails/activation.tmpl.php');
    $content = ob_get_clean();

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = 'content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to, $subject, $content, $headers);

    //informer l'utilisateur pour q'il puisse verifier sa boite de reception

    set_flash("The activation mail has been sent!", 'success');

// une requette preparé pour envoyer les infos dans la base des données
    $q = $db -> prepare('INSERT INTO users(firstname, lastname, pseudo, email, password)
                                VALUES(:firstname, :lastname, :pseudo, :email, :password)');
    $q->execute([
      'firstname' => $firstname,
      'lastname' => $lastname,
      'pseudo' => $pseudo,
      'email' => $email,
      'password' => $password,
    ]);

//diriger l'utulisateur vers la page d'accueil et y afficher le message d'alert
      redirect('index.php');
    } else{
      save_in_put_data();
    }

   }else{
     $errors[] = "Try to fill all required fields Please!";
     save_in_put_data();
   }
 }else{
   clear_input_data();
 }

 ?>

<?php include('views/register.views.php'); ?>
