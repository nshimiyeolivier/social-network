<?php $title= "share"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div id="main-content">
      <form action="" autocomplete="off">
        <textarea name="code" id="code" placeholder="Write your code here!" required="required"></textarea>
          <div class="btn-group navi" id="navi">
            <a href="#" class="btn btn-danger"> Clear All </a>
              <input type="submit" name="save" class="btn btn-success" value="save" />
          </div>
      </form>
    </div>

<?php include('partials/_footer.php'); ?>
