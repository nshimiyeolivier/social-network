<?php
include('config/database.php');
include('includes/functions.php');
include('includes/constants.php');
// verify if the submit button has been clicked
 if(isset($_POST['register'])){
   // and if all fields have been well completed
   if(not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])){

     $errors = [];

     extract($_POST);
     // verify if the pseudo has minimum 3 letters
     if(mb_strlen($pseudo) < 3){
       $erros[] = "Very short Pseudo, (it must contain minimum 3 letters!) ";
     }

     // verify if the email is valid
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors[] = "Invalid Email!";
     }

     // verify if the passwor has minimum 6 letters
     if(mb_strlen($password) < 6){
       $erros[] = "Very short Password, (it must contain minimum 6 letters!) ";
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

     if(count($errors) == 0){
    // envoie d'un mail d'activation
    $to = $email;
    $subject = WEBSITE_NAME . "ACTIVATION DE COMPTE";
    $token = sha1($pseudo.$email.$password);

    ob_start();
    require('templates/emails/activation.tmpl.php');
    $content = ob_get_clean();

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = 'content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to, $subject, $content, $headers);

    //informer l'utilisateur pour q'il puisse verifier sa boite de reception

    echo "Mail d'activation envoyé";
         }


   }else{
     $errors[] = "Try to fill all required fields Please!";
   }
 }

 ?>

<?php include('views/register.views.php'); ?>
