<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Raleigh Visual Budget</title>
    <meta name="description" content="An interactive tool to learn more about the budget of the City of Raleigh, North Carolina." />
    <?php
       //$dataSections = array('revenues', 'expenses', 'funds');
       $dataSections = array('revenues', 'expenses');
       require_once 'includes/imports.php';
    ?>
    <script>
    $(document).ready(initialize);
    </script>
    <link href="css/page.css" rel="stylesheet" type="text/css" />
    <style type='text/css'>

    </style> 
  </head>
  <body class='show-me-the-money'>
    <div class='header-container'>
      <?php include 'includes/template_elements/top-bar.php'; ?>     
    </div>
    <?php
      require_once 'includes/home.php';
      require_once 'includes/navbar.php';
      require_once 'includes/container.php';
      require_once 'includes/footer.php';
      require_once 'includes/templates.php';
      require_once 'includes/datafiles.php';
    ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-10273473-12', 'Ashevillevisualbudget.org');
      ga('send', 'pageview');
    </script>
    <?php include 'includes/template_elements/footer.php'; ?>
  </body>
</html>