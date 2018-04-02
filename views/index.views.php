<?php $title= "Accueil"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('includes/constants.php'); ?>
<?php include('partials/_header.php'); ?>
<?php include('partials/_nav.php'); ?>

    <div class="container infos">
      <div id="main content">
        <div class="starter-template jumbotron">
          <h1> <?= WEBSITE_NAME; ?> </h1>
          <p class="lead"> <?= WEBSITE_NAME; ?> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. If u re interseted do not hesitate to <a href="register.php"> subscribe here </a>
          </p>

          <p class="lead">
          ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div><!-- /.container -->

<?php include('partials/_footer.php'); ?>
