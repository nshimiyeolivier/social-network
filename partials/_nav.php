<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Ol-Star Social-Network</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="<?= set_active('index')?>"><a href="index.php"> Home </a></li>
<!-- faire en sorte que les menus login est Subscribe ne soient pas visible au moment ou l'utulisateur est connecté -->
            <?php if(is_logged_in() ): ?>
              <li class="<?= set_active('profile') ?>">
                <a href="profile.php?id=<?= get_session('user_id') ?>"> My profile </a>
              </li>
              <li class="<?= set_active('share')?>"> <a href="share.php"> Share </a> </li>
              <li> <a href="logout.php"> Logout </a> </li>
            <?php else : ?>
              <li class="<?= set_active('login')?>"> <a href="login.php"> Login </a> </li>
              <li class="<?= set_active('register')?>"> <a href="register.php"> Subscribe </a> </li>
            <?php endif; ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
