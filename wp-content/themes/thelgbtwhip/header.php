<?php
global $pagename;
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The LGBT Whip</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation-icons.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
    <style>
    .has-tip {
border-bottom: 0px;
}
    .has-tip:hover {
border-bottom: 0px;
}
    </style>
    
    
  </head>
  <body>
  <?php
  if ($pagename == '')
  {
  ?>
    <div class="logosplash">
    </div>
    <h1 class="logosplashtitle">The LGBT Whip</h1>
  <?php
  }
  else
  {
  ?>
    <div class="logo">
    </div>
    <h1 class="logotitle">The LGBT Whip</h1>
    <div class="separator-2"></div>
  <?php
  }
  ?>