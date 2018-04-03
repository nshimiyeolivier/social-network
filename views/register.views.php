<?php $title= "Subscribe"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div class="container">
    <h1 class="lead"> Become a member </h1>

  <?php include('partials/_errors.php'); ?>

      <form method="POST" class="well col-md-6">
        <!--name field  -->
        <div class="form-group">
          <label class="control-label" for="name"> Name: </label>
          <input type="text" class="form-control" id="name" name="name" required="required"/>
        </div>
        <!-- nick name field  -->
        <div class="form-group">
          <label class="control-label" for="nickname"> Nickname: </label>
          <input type="text" class="form-control" id="nickname" name="nickname" required="required"/>
        </div>
        <!--pseudo field  -->
        <div class="form-group">
          <label class="control-label" for="pseudo"> Pseudo: </label>
          <input type="text" class="form-control" id="pseudo" name="pseudo" required="required"/>
        </div>
        <!--email field  -->
        <div class="form-group">
          <label class="control-label" for="email"> E-mail: </label>
          <input type="email" class="form-control" id="email" name="email" required="required"/>
        </div>
        <!--password field  -->
        <div class="form-group">
          <label class="control-label" for="password"> Password: </label>
          <input type="password" class="form-control" id="password" name="password" required="required"/>
        </div>
        <!--password_confirm field  -->
        <div class="form-group">
          <label class="control-label" for="password_confirm"> confirm Password: </label>
          <input type="password" class="form-control" id="password_confirm" name="password_confirm" requirer="required"/>
        </div>
        <input type="submit" class="btn btn-primary"  value="Register" name="register" id="register">

      </form>
    </div><!-- /.container -->

<?php include('partials/_footer.php'); ?>
