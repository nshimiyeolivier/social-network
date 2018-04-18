<?php $title= "Showcode"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div id="main-content">
      <pre> <?= $data->code; ?> </pre>
    </div>

<!-- SCRIPTS  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" integrity="sha384-VI5+XuguQ/l3kUhh4knz7Hxptx47wpQbVRDnp8v7Vvuhzwn1PEYb/uvtH6KLxv6d" crossorigin="anonymous"></script>
