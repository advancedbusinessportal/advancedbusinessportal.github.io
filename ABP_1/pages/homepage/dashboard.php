<!----------------------------------------------------------------------------------------------------------------------------S E S S I O N ----------------------->
<?php include 'include/session.php'; ?>
<!----------------------------------------------------------------------------------------------------------------------------S E S S I O N ----------------------->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <!-- Favicons -->
    <link href="../../img/abp/favicon.ico" rel="icon">
    <link href="../../img/abp/apple-touch-icon.png" rel="apple-touch-icon">
    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <?php include 'include/navbar.php'; ?>
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------D A S H B O A R D ----------------------->
        <div>
            <div>
                <div class="root-view">

                    <div class="single-presenter-view cloudos-presenter-view multi-child-view" style="margin-top: 0px;">
                        <div class="child-views">
                            <div class="content-container-view">
                                <div class="content" style="margin-top: 44px;">

                                    <div class="springboard-view" style="height: 739.25px; ">
                                        <div class="cw-label-view greeting-label" style="text-align: center; position: absolute; margin: 0px; top: 0px; left: 0px; width: 280px; height: 31px; transform: translateX(821px) translateY(300px) translateX(0px) translateY(0px) scaleX(1.40899) scaleY(1.40899);">Hello, <br> <?php echo ($f_name); ?> &Tab; <?php echo ($l_name); ?></div>

                                        <div class="user-photo-icon-view" style="text-align: center; position: absolute; margin: 0px; top: 0px; left: 0px; height: 100px; width: 100px; transform-origin: 0px 0px; transform: translateX(880px) translateY(120px) scaleX(1.6) scaleY(1.6);">
                                            <div class="photo-icon" style="background-repeat: no-repeat; overflow: hidden; width: 100px; height: 100px; background-position: -10px -47px; background-size: 120px 193px; background-color: black; ">

                                                <img src="<?php echo $photo; ?>" alt="Employee Avatar" style="block-size: 100%; inline-size: 100%;">
                                            </div>
                                            <div class="empty-avatar view-hidden" style="width: 100px; height: 100px;">
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="profile.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(350px) translateY(390px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845); border-radius: 72px; ">
                                                    <img src="../../img/icon/profile.png" class="app-icon-view" style="position: static;">
                                                </div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Your Profile
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="Inventory.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(600px) translateY(390px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845); border-radius: 72px;">
                                                    <img class="calendar-icon-view app-icon-view" src="../../img/icon/inventory.png" style="position: static;">
                                                </div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Inventory
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="sales.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(850px) translateY(390px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845); border-radius: 72px;">
                                                    <img src="../../img/icon/sales.png" class="app-icon-view" style="position: static;"></div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Sales Reports
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="meeting.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(1100px) translateY(390px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845);
                                    border-radius: 72px;">
                                                    <img src="../../img/icon/meeting.png" class="app-icon-view" style="position: static;"></div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Meeting Room
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="employee.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(350px) translateY(590px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845);border-radius: 72px;">
                                                    <img src="../../img/icon/employee.png" class="app-icon-view" style="position: static;"></div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Employees
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="invoice.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(600px) translateY(590px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845);border-radius: 72px;">
                                                    <img src="../../img/icon/report.png" class="app-icon-view" style="position: static;"></div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Invoice
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="management.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(850px) translateY(590px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845);border-radius: 72px;">
                                                    <img src="../../img/icon/management.png" class="app-icon-view" style="position: static;"></div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Management
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="../logout.php">
                                            <div class="scalable-app-switcher-item-view" role="button" style="text-align: center; transform: translateX(1100px) translateY(590px) scaleX(1) scaleY(1);">
                                                <div class="icon-container" style="width: 142px; height: 142px; transform: translateX(-50%) translateY(-50%) scaleX(0.840845) scaleY(0.840845);border-radius: 72px;">
                                                    <img src="../../img/icon/logout.png" class="app-icon-view" style="position: static;"></div>

                                                <div class="title-label" style="transform: translateX(-50%) scaleX(0.914022) scaleY(0.914022) translateY(59.7px) translateY(20px);">
                                                    Logout
                                                    <div class="subtitle-label" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!----------------------------------------------------------------------------------------------------------------------------D A S H B O A R D ----------------------->
    </div>
    <!-- End of Main Content -->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <?php include 'include/footer.php'; ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


<!---------------------------------------------------------------------------------------------------------------------------------------------------------- LOGOUT MODAL  ----------------------->
    <?php include 'include/logout.php'; ?>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------- LOGOUT MODAL  ----------------------->
   






    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>