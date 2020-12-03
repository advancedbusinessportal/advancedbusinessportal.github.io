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

    <title>Management</title>
      <!-- Favicons -->
    <link href="../../img/abp/favicon.ico" rel="icon">
    <link href="../../img/abp/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Montserrat:wght@700&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            ;
            background: #333;
        }

        .containerphoto {
            max-width: 900px;
            display: flex;
            justify-content: space-evenly;
            margin: 0 auto;
        }

        .card-wrapper {
            width: 400px;
            height: 500px;
            position: relative;
        }

        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 313px;
            height: 400px;
            transform: translate(-50%, -50%);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.6);
            cursor: pointer;
            transition: 0.5s;
        }

        .card-image {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: 2;
            background-color: #000;
            transition: .5s;
        }

        .card:hover img {
            opacity: 0.4;
            transition: .5s;
        }


        .card:hover .card-image {
            transform: translateY(-100px);
            transition: all .9s;
        }

        /**** Social Icons *****/


        /**** Personal Details ****/

        .details {
            position: absolute;
            bottom: 0;
            left: 0;
            background: #fff;
            width: 100%;
            height: 120px;
            z-index: 1;
            padding: 10px;
        }

        .photoimg {
            width: 400px;
            position: absolute;
            top: 0;
            left: -50px;
            height: 100%;
        }

        h2 {
            margin: 30px 0;
            padding: 0;
            text-align: center;
        }

        .job-title {
            font-size: 1rem;
            line-height: 2.5rem;
            color: #333;
            font-weight: 300;
        }



        .jane {
            position: absolute;
            bottom: -120px;
            left: 0;
            opacity: 0;
            background: #fff;
            width: 100%;
            height: 120px;
            z-index: 3;
            padding: 10px;
            transition: .4s;
        }

        .profile-two .social-icons li a {
            border-radius: 50%;
        }

        .card:hover .profile-img--two {
            transform: rotateY(180deg);
        }

        .card:hover .jane {
            bottom: 0;
            left: 0;
            transition-delay: 0.5s;
            opacity: 1;
        }

        .photo {
            display: flex;
            align-items: center;
        }
    </style>
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

        <!----------------------------------------------------------------------------------------------------------------------------D A S H B O A R D ----------------------->

        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
<div class="photo">
        <div class="containerphoto">
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-image">
                        <img class="photoimg" src="../../img/employee/v1.jpeg" alt="profile one">
                    </div>

                    <div class="details">
                        <h2>Harsh Vaghasiya
                            <br>
                            <span class="job-title">CEO</span>
                        </h2>
                    </div>
                </div>
            </div><!-- end box wrapper -->
        </div>

        <div class="containerphoto">
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-image">
                        <img class="photoimg" src="../../img/employee/prerak.JPG" alt="profile one">
                    </div>

                    <div class="details">
                        <h2>Prerak Patel
                            <br>
                            <span class="job-title">Executive Director</span>
                        </h2>
                    </div>
                </div>
            </div><!-- end box wrapper -->
        </div>

        <div class="containerphoto">
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-image">
                        <img class="photoimg" style="top:-1px;left: -89px;" src="../../img/employee/s1.jpeg" alt="profile one">
                    </div>

                    <div class="details">
                        <h2>Sahilkumar Gopani
                            <br>
                            <span class="job-title">CTO</span>
                        </h2>
                    </div>
                </div>
            </div><!-- end box wrapper -->
        </div>

    </div>
    <div class="containerphoto">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-image">
                    <img class="photoimg" src="../../img/employee/rushi.jpeg" alt="profile one">
                </div>

                <div class="details">
                    <h2>Rushikumar Patel
                        <br>
                        <span class="job-title">COO</span>
                    </h2>
                </div>
            </div>
        </div><!-- end box wrapper -->
    </div>
  </div>
    <!-- End of Content Wrapper -->
    </div>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <?php include 'include/footer.php'; ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
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