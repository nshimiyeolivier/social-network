<?php $title= "Subscribe"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div class="container">
    <h1 class="lead"> Become a member </h1>

  <?php include('partials/_errors.php'); ?>

      <form data-parsley-validate method="POST" class="well col-md-6">
        <!--name field  -->
        <div class="form-group">
          <label class="control-label" for="firstname"> First-name: </label>
          <input type="text" value="<?= get_in_put('firstname') ?>" class="form-control" id="firstname" name="firstname" required="required"/>
        </div>
        <!-- nick name field  -->
        <div class="form-group">
          <label class="control-label" for="lastname"> Last-name: </label>
          <input type="text" value="<?= get_in_put('lastname') ?>" class="form-control" id="lastname" name="lastname" required="required"/>
        </div>
        <!--pseudo field  -->
        <div class="form-group">
          <label class="control-label" for="pseudo"> Pseudo: </label>
          <input data-parsley-minlength="3" type="text" value="<?= get_in_put('pseudo') ?>" class="form-control" id="pseudo" name="pseudo" required="required" />
        </div>
        <!--email field  -->
        <div class="form-group">
          <label class="control-label" for="email"> E-mail: </label>
          <input data-parsley-trigger="keypress" type="email" value="<?= get_in_put('email') ?>" class="form-control" id="email" name="email" required="required"/>
        </div>
        <!--password field  -->
        <div class="form-group">
          <label class="control-label" for="password"> Password: </label>
          <input type="password" class="form-control" id="password" name="password" required="required"/>
        </div>
        <!--password_confirm field  -->
        <div class="form-group">
          <label class="control-label" for="password_confirm"> confirm Password: </label>
          <input data-parsley-equalto="#password" data-parsley-trigger="keypress" type="password" class="form-control" id="password_confirm" name="password_confirm" requirer="required"/>
        </div>
        <input type="submit" class="btn btn-primary"  value="Register" name="register" id="register">

      </form>
    </div><!-- /.container -->

<?php include('partials/_footer.php'); ?>
