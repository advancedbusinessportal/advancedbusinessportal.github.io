

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  N A V - B A R ------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  N A V - B A R ------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  N A V - B A R ------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  N A V - B A R ------->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  N A V - B A R ------->




<?php
    
    session_start();

    if (!isset($_SESSION["usname"]))   {
        header("Location: ../login.php");
   
        echo " Please login to get Full access !!   &nbsp &nbsp" ;
    } 
    
    else{
        $username = $_SESSION["usname"];
       
        // load the database and get the orders for this user
        $db = new mysqli("localhost", "hbv559", "Abp@216", "hbv559");
        if ($db->connect_error) {
            die ("Connection failed: " . $db->connect_error);
    }

    $q1 = "SELECT * FROM abp_employee WHERE u_name = '$username'";
    $r1 = $db->query($q1);
    $row = $r1->fetch_assoc();
    $id = $row["e_id"];
    $photo = $row["avatar"];
   $usrname = $row["u_name"];
   $f_name = $row["f_name"];
      $l_name = $row["l_name"];

   
        $result = $db->query($q);   
    }

    ?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Montserrat:wght@700&display=swap');
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../abp/index.html">
                <div class="logo-div">
                    <img src="../../img/icon/logo_trans.png" style="width: 160px;">
                </div>
                <!-- <div class="sidebar-brand-text mx-3">A B P</div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-id-badge"></i>
                    <span>Your Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Inventory</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="buttons.html">Page 1</a>
                        <a class="collapse-item" href="cards.html">Page 2</a>
                        <a class="collapse-item" href="cards.html">Page 3</a>
                        <a class="collapse-item" href="cards.html">Page 4</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Sales</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">Sales - #</a>
                        <a class="collapse-item" href="utilities-border.html">Sales - #</a>
                        <a class="collapse-item" href="utilities-animation.html">Sales - #</a>
                        <a class="collapse-item" href="utilities-other.html">Sales - #</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-handshake"></i>
                    <span>Meeting Room</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-user-friends"></i>
                    <span>Employees</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-chart-bar"></i>
                    <span>Reports</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-tasks"></i>
                    <span>Management</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------- U S E R ------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------- U S E R ------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------- U S E R ------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------- U S E R ------------>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


    

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-weight: bold; font-size: 20px; text-transform: uppercase;  "> <?php  echo($username); ?></span>
                                <img class="img-profile rounded-circle"  style="height: 3rem; width: 3rem;"  src="<?php echo $photo; ?>" >
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              
                              
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- End of NAVBAR -->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- End of NAVBAR -->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- End of NAVBAR -->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- End of NAVBAR -->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- End of NAVBAR -->






                <!----------------------------------------------------------------------------------------------------------------------------D A S H B O A R D ----------------------->

    <!----------------------------------------------------------------------------------------------------------------------------D A S H B O A R D ----------------------->

    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->




<!---------------------------------------============------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
<!---------------------------------------============------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
<!---------------------------------------============------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
<!---------------------------------------============------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
<!---------------------------------------============------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
<!---------------------------------------============------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Advanced Businness Protocol 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

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