<?php
    include_once "config.php";
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<?php include_once(LOCAL_PATH.'includes/head.php'); ?>
</head>

<body>

    <!-- top nav -->
	<?php include_once(LOCAL_PATH.'includes/nav-top.php'); ?>

    <!-- header -->
	<?php include_once(LOCAL_PATH.'includes/header.php'); ?>
    
    <!-- bottom nav -->
	<?php include_once(LOCAL_PATH.'includes/nav-bottom.php'); ?>

    <div class="main-container">

        <!-- content -->
        <div class="content pull-left">

            <!-- left-side of content that include calendar widget -->
			<?php include_once(LOCAL_PATH.'includes/calendar.php'); ?>

            <!-- right-side of content that include slider widget -->
   	        <?php include_once(LOCAL_PATH.'includes/slider.php'); ?>

            <!-- left-side of content that include weather widget -->
            <?php include_once(LOCAL_PATH.'includes/weather.php'); ?>

            <!-- right-side of content that include slider widget -->
            <?php include_once(LOCAL_PATH.'includes/news-slider.php'); ?>

            <!-- tab menu that include some feature of tavanir services -->
            <?php include_once(LOCAL_PATH.'includes/tab.php'); ?>

        </div><!-- /content -->

        <!-- right side menu -->
        <?php include_once(LOCAL_PATH.'includes/rightmenu.php'); ?>

    </div>

    <!-- footer -->
    <?php include_once(LOCAL_PATH.'includes/footer.php'); ?>

    <!-- copyright box -->
    <?php include_once(LOCAL_PATH.'includes/copyright.php'); ?>

    <!-- essential scripts of site -->
    <?php include_once LOCAL_PATH."includes/scripts.php" ?>
    <!-- /essential scripts of site -->



</body>

</html>