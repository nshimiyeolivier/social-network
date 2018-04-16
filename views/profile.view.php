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
                  <img src="<?= get_avatar_url($user->email) ?>" alt="Image de profil de <?= e($user->pseudo) ?>" class="img-circle">
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <strong> <?= e($user->pseudo) ?> </strong> <br>
                  <!-- mailto: permit to send email to the linked destinator -->
                  <a href="mailto:<?= $user->email ?>"> <?=e($user->email) ?> </a> <br />
                  <!--si le compte twitter existe, le recupère et l'affiche à la page de profil -->
                  <?=
                  $user->city && $user->country ? '<i class="fas fa-map-marker"></i>  &nbsp;'. e($user->city). '-'. e($user->country) : '';
                   ?> <br /> <a href="https://www.google.com/maps?q=.<?=e($user->city). ' '. e($user->country)?>" target="_blank"> Location on Google Maps </a>
                </div>
                <div class="col-sm-6">
                  <!--si le compte twitter existe, le recupère et l'affiche à la page de profil -->
                  <?=
                  $user->twitter ? '<i class="fab fa-twitter"></i>  &nbsp; <a href="//twitter.com/'.e($user->twitter).'"> @'.($user->twitter).'</a> <br />' : '';
                   ?>

                   <!--si le compte github existe, le recupère et l'affiche à la page de profil -->
                   <?=
                   $user->github ? '<i class="fab fa-github"></i> &nbsp; <a href="//github.com/'.e($user->github).'">'.e($user->github).'</a> <br />' : '';
                    ?>

                    <!--si l'utilisateur est disponible pour l'emploi -->
                    <?=
                    $user->sex == "M" ? '<i class="fas fa-male"></i>' : '<i class="fas fa-female"></i>';
                     ?>
                    <?=
                    // &nbsp pour cree un espace
                    $user->available_for_hiring ? '&nbsp; &nbsp; Disponible pour emploie' : ' &nbsp; &nbsp; Non disponible pour emploie';
                     ?>
                </div>
              </div>
              <div class="col-md-12 well">
                <h4> Biography: </h4>
                <?= $user->biography ? nl2br(e($user->biography)) : "There is no biography for the moment!";
                 ?>
              </div>

            </div>
        </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Complete your profile </h3>
            </div>
            <div class="panel-body">
<!-- call the errors verification's page -->
             <?php include('partials/_errors.php'); ?>
             <form data-parsley-validate method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="age"> Age <span class="text-danger"> * </span> </label>
                    <input type="text" class="form-control" id="age" name="age" required="required" required="required"/>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="country"> Country <span class="text-danger"> * </span> </label>
                    <input type="text" class="form-control" id="country" name="country" value="<?= get_in_put('country') ? get_in_put('country') : e($user->country) ?>" required="required"/>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="twitter"> Twitter </label>
                    <input type="text" class="form-control" id="twitter" value="<?= get_in_put('twitter') ? get_in_put('twitter') : e($user->twitter) ?>" name="twitter"/>
                  </div>

                  <div class="form-group">
                    <input type="checkbox" id="available_for_hiring" name="available_for_hiring"
                    <?= $user->available_for_hiring ? "checked" : "" ?> > Available for a job?
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="city"> City <span class="text-danger"> * </span></label>
                    <input type="text" class="form-control" id="city" name="city" value="<?=get_in_put('city') ? get_in_put('city') : e($user->city) ?>" required="required"/>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="sex"> Sex <span class="text-danger"> * </span> </label>
                    <select name="sex" id="sex" class="form-control" required="required">
                      <option value="M" <?= $user->sex == "M" ? "selected" : "" ?> > MASCULIN </option>
                      <option value="F" <?= $user->sex == "F" ? "selected" : "" ?> > FEMININ</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="github"> Github </label>
                    <input type="text" class="form-control" id="github" value="<?= get_in_put('github') ? get_in_put('github') : e($user->github) ?>" name="github"/>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="biography"> Biography <span class="text-danger"> * </span> </label>
                    <textarea class="form-control" id="biography" name="biography"  rows="4" cols="50" placeholder="Fill in here your Biography" required="required"> <?= get_in_put('biography') ? get_in_put('biography') : e($user->biography) ?> </textarea>
                  </div>
                </div>
              </div>

              <input type="submit" class="btn btn-primary"  value="SEND" name="update" id="update">
            </form>
            </div>
        </div>
        </div>
      </div>



    </div><!-- /.container -->

<?php include('partials/_footer.php'); ?>
