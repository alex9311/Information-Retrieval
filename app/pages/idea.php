<!DOCTYPE HTML>
<html>
  <?php include "../common/common.php";?>
  <?php include "../page_functions/idea_functions.php";?>
  <?php print_imports($app_directory); ?>
  <body class="no-sidebar">
    <!-- Header -->
    <?php print_header($app_directory); ?>
    <!-- Main -->
    <div id="main-wrapper">
        <!-- Content -->
        <div id="content">
        <!-- this is where the content will go -->
          <div id="vote">
		<?php $idea = get_idea($_GET["id"]); ?>
            <img class="ui large image vote_image" src="<?php echo substr($idea["image"],13);?>">
            <div class="ui large header" id="text"><?php echo $idea["title"]; ?></div>
            <div class="vote_descrip_text"><p><?php echo $idea["text_description"]; ?></p></div>
          </div>
        </div><!--content-->
    </div><!--main_wrapper-->
  </body>
</html>

