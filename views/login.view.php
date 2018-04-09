<?php $title= "login"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div class="container">
    <h1 class="lead"> Login </h1>

  <?php include('partials/_errors.php'); ?>

      <form data-parsley-validate method="POST" class="well col-md-6">
        <!-- field identifiant  -->
        <div class="form-group">
          <label class="control-label" for="identifiant"> Your Pseudo or E-mail: </label>
          <input type="text" value="<?= get_in_put('identifiant') ?>" class="form-control" id="identifiant" name="identifiant" required="required"/>
        </div>

        <!--password field  -->
        <div class="form-group">
          <label class="control-label" for="password"> Password: </label>
          <input type="password" class="form-control" id="password" name="password" required="required"/>
        </div>
        <!--password_confirm field  -->

        <input type="submit" class="btn btn-primary"  value="Login" name="login" id="login">

      </form>
    </div><!-- /.container -->

<?php include('partials/_footer.php'); ?>
