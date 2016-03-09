<!DOCTYPE HTML>
<html>
  <?php include "../common/common.php";?>
  <?php include "../page_functions/top_ideas_functions.php";?>
  <?php print_imports($app_directory); ?>
  <body class="no-sidebar">
    <!-- Header -->
    <?php print_header($app_directory); ?>
    <!-- Main -->
    <div id="main-wrapper" style="padding-top:1em;padding-left:1em;padding-right:1em;">
	<h2 align="center">The Top Five Ideas on Sparked!</h2>
        <!-- Content -->
        <div id="content">
        <!-- this is where the content will go -->
	<?php get_top_ideas($app_directory);?>
        </div><!--content-->
    </div><!--main_wrapper-->
  </body>
</html>
