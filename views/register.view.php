<?php $title = "Register"; ?> <!-- title name -->
  <?php include('partials/_header.php'); ?>
      <div id="main-content">
          <div class="container">
            <h1 class="lead"> Become a mamber </h1>

<!-- appeller un fichier errors actif au moment ou il ya des erreurs! -->
<?php include('partials/_errors.php'); ?>

            <form method="POST" class="well col-md-6">
<!-- name field  -->
              <div class="form-group">
                <label class="control-label" for="name"> Nom: </label>
                <input type="text" class="form-control" id="name" name="name" require = "required" />
              </div>
<!-- pseudo field  -->
              <div class="form-group">
                <label class="control-label" for="pseudo"> Pseudo: </label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" require = "required" />
              </div>
<!-- pseudo field  -->
              <div class="form-group">
                <label class="control-label" for="email"> E-mail: </label>
                <input type="email" class="form-control" id="email" name="email" require = "required" />
              </div>
<!-- password field  -->
              <div class="form-group">
                <label class="control-label" for="password"> Password: </label>
                <input type="password" class="form-control" id="password" name="password" require = "required" />
              </div>
<!-- password field  -->
              <div class="form-group">
                <label class="control-label" for="password_confirm"> Confirm-Password: </label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" require = "required" />
              </div>

<input type="submit" class="btn btn-primary" value="Subscribe" name="register" />

            </form>

          </div>
      </div>

  <?php include("./partials/_footer.php") ?>
