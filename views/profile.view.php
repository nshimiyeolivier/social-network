<?php $title= "profile"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <?= e($user->pseudo)?> 's profile</h3>
            </div>
            <div class="panel-body">
              <?php ?>
              <div class="row">
                <div class="col-md-5">
                  <img src="<?= get_avatar_url($user->email) ?>" alt="image de profil de <?= e($user->pseudo) ?>" class="img-circle">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <strong> <?= e($user->pseudo) ?> </strong> <br>
                  <!-- mailto: permit to send email to the linked destinator -->
                  <a href="mailto:<?= $user->email ?>"> <?=e($user->email) ?> </a>
                </div>
              </div>

            </div>
        </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Mr. <?= e($user->pseudo)?> complete your profile </h3>
            </div>
            <div class="panel-body">
<!-- call the errors verification's page -->
             <?php include('partials/_errors.php'); ?>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="name"> Name <span class="text-danger"> * </span> </label>
                    <input type="text" class="form-control" id="name" name="name" required="required"/>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="country"> Country <span class="text-danger"> * </span> </label>
                    <input type="text" class="form-control" id="country" name="country" required="required"/>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="twitter"> Twitter </label>
                    <input type="text" class="form-control" id="twitter" name="twitter" required="required"/>
                  </div>

                  <div class="form-group">
                    <input type="checkbox" id="available" name="available" value="Available"> Available for a job?
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="city"> City <span class="text-danger"> * </span></label>
                    <input type="text" class="form-control" id="city" name="city" required="required"/>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="sex"> Sex <span class="text-danger"> * </span></label>
                    <select name="sex" id="sex" class="form-control">
                      <option>  </option>
                      <option value="M"> MASCULIN </option>
                      <option value="F"> FEMININ</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="github"> Github </label>
                    <input type="text" class="form-control" id="github" name="github" required="required"/>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="biography"> Biography <span class="text-danger"> * </span> </label>
                    <textarea class="form-control" id="biography" name="biography"  rows="4" cols="50" placeholder="fill in here your Biography" > </textarea>
                  </div>
                </div>
              </div>

              <input type="submit" class="btn btn-primary"  value="SEND" name="send" id="send">

            </div>
        </div>
        </div>
      </div>



    </div><!-- /.container -->

<?php include('partials/_footer.php'); ?>
