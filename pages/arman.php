<?php
    include_once "../config.php";
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
                <div class="box full-box pull-left">
                    <h3><span class="pull-right rtl">اساسنامه شرکت توانیر</span></h3>
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 pull-right">
                                <ul class="rtl">
                                    <li>فصل سوم - اركان‌ شركت</li>
                                    <li>فصل‌ چهارم‌ - صورتهاي‌ مالي‌ شركت</li>
                                    <li>فصل‌ پنجم‌ - ساير مقررات‌</li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <ul class="rtl">
                                    <li>فصل سوم - اركان‌ شركت</li>
                                    <li>فصل‌ چهارم‌ - صورتهاي‌ مالي‌ شركت</li>
                                    <li>فصل‌ پنجم‌ - ساير مقررات‌</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /left-side of content that include calendar widget -->

                <!-- left-side of content that include calendar widget -->
                <div class="box full-box pull-left">
                    <h3><span class="pull-right rtl">آرمان صنعت برق</span></h3>
                    <div class="content">
                        <p class="rtl text-justify">
                            <br>
                        </p>
                    </div>
                </div><!-- /left-side of content that include calendar widget -->

                <!-- left-side of content that include calendar widget -->
                <div class="box full-box pull-left">
                    <h3><span class="pull-right rtl">آرمان صنعت برق</span></h3>
                    <div class="content">
                        <table class="table table-bordered rtl">
                            <thead>
                                <tr>
                                    <th class="text-right">1</th>
                                    <th class="text-right">2</th>
                                    <th class="text-right">3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /left-side of content that include calendar widget -->
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