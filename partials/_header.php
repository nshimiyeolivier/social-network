<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="reseau social pour developpeur">
    <meta name="author" content="Olivier NSHIMIYUMUKIZA">

    <title>

      <?=
        isset($title)
            ? $title .' - '. WEBSITE_NAME
            : WEBSITE_NAME.' - for developpers';
       ?>

    </title>
    <!-- call a css page  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Ej0hUpn6wbrOTJtRExp8jvboBagaz+Or6E9zzWT+gHCQuuZQQVZUcbmhXQzSG17s" crossorigin="anonymous">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <!--font awesome  -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

      <!-- google fonts -->
       <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet"> 
  </head>

  <?php include('partials/_nav.php'); ?>

    <?php include('partials/_flash.php'); ?>
