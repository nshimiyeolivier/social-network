<?php
session_start();
// connexion à la base des données
  // require('config/database.php');

// appeler la page des fonctions
  require('includes/functions.php');

  // appeler la page des fonctions
    require('includes/constants.php');


      // si le formulaire a ete soumis
      if(isset($_POST['register'])){

          // si tous les champs ont ete remplis
            if(not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])){

          $errors = [];

          extract($_POST);

      // si le pseudo contien plus de trois chat-ractere
          if(mb_strlen($pseudo) < 3){
            $errors[] = " Your pseudo must contain min 3 charcters";
          }

      // si le bon mail et valide
          if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Invalid e-mail adress!";
          }

      // si le mot de passe contient aumoins 6 charactere
          if(mb_strlen($password) < 6){
            $errors[] = "Your password must contain min 6 characters!";
          }else{
            // si la confirmation du mot depasse concorde au precedent
            if($password != $password_confirm){
              $errors[] = "password does not match! retry to fill your password";
            }
          }

      // si le pseudo existe deja dans la base des donnees
          if(is_already_in_use('pseudo', $pseudo, 'users')){
            $errors[] = "This pseudo is not available, it is alredy in use!";
          }

      // si le mail existe déjà dans la base des donnees
          if(is_already_in_use('email', $email, 'users')){
            $errors[] = "This email has been used!";
          }

      //s'il n'y a pas d'erreur
          if(count($errors) == 0){
            // envoie d'un mail d'activation
            $to = $email;

            $subject = WEBSITE_NAME. " - ACTIVATION DE COMPTE";

            $token = sha1($pseudo.$email.$password);

            ob_start();
            require('templates/emails/activation.template.php');
            $content = ob_get_clean();

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            mail($to, $subject, $content, $headers);

            //informer l'utilisateur que l'inscription a reussi et qu'il puisse verifier sa boite de reception
            set_flash("The activation mail has been sent to your E-mail", 'success');
          }

      }else{

      $errors[] = "Fill in requested fields!";
      }
    }
      ?>

<?php require('views/register.view.php'); ?>
