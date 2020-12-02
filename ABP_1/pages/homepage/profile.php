<!----------------------------------------------------------------------------------------------------------------------------S E S S I O N ----------------------->

<?php include 'include/session.php'; ?>

<!----------------------------------------------------------------------------------------------------------------------------S E S S I O N ----------------------->
<?php
if (isset($_POST["submit"]) && $_POST["submit"])
{
$e_mail=$_POST["email"];
$p_num=$_POST["pnum"];
$add=$_POST["address"];

$change = "UPDATE abp_employee SET email = '$e_mail' , phone = '$p_num', address='$add' WHERE e_id = '$id';";
$r3 = $db->query($change);
echo '<script>alert("Information has been Updated")</script>'; 
header("Location: profile.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
      <!-- Favicons -->
    <link href="../../img/abp/favicon.ico" rel="icon">
    <link href="../../img/abp/apple-touch-icon.png" rel="apple-touch-icon">
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Montserrat:wght@700&display=swap');

        .button_cont {
            text-align: center;
            margin: 25px 0px;
        }

        .example_a {
            color: #fff !important;
            text-transform: uppercase;
            text-decoration: none;
            background-color: #4e73df;
            padding: 15px;
            border-radius: 5px;
            display: inline-block;
            border: none;
            transition: all 0.4s ease 0s;
            font-size: 20px;
            width: 210px;
            box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
        }

        .example_a:hover {
            background: #434343;
            letter-spacing: 1px;
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            box-shadow: 5px 40px -10px rgba(0, 0, 0, 0.57);
            transition: all 0.4s ease 0s;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body id="page-top">
    <div id="wrapper">
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <?php include 'include/navbar.php'; ?>
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
                <div class="container-fluid">
                    <div class="header pb-6 d-flex align-items-center">
                        <img class="header pb-6 d-flex align-items-center" src="assets/profile/img/theme/head.png" style="background-image: url('assets/profile/img/theme/head.png'); width: 100%; background-size: cover; background-position: center top;">
                        <span class="mask bg-gradient-default opacity-8"></span>
                        <div class="card-profile-image" style="padding-left: 50px;position: absolute;">
                            <a href="#">
                                <img src="<?php echo $photo; ?>" class="rounded-circle" style="width: 351px;height: 351px;">
                            </a>
                        </div>

                        <div class="container-fluid d-flex align-items-center">
                            <div class="row">
                                <div class="col-lg-7 col-md-10" style=" width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header pb-6 d-flex align-items-center">
                        <div class="card" style=" width:152%;">
                            <div class="card-header" style=" width: auto;">
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <input type="hidden" name="submit" value="1" />
                                    <h6 class="heading-small text-muted mb-4">Personal information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-username">Username</label>
                                                    <input type="text" id="input-username" class="form-control" value="<?php echo $usrname; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email address</label>
                                                    <input type="email" id="input-email" class="form-control" name="email" value="<?php echo $email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-first-name">First name</label>
                                                    <input type="text" id="input-first-name" class="form-control" value="<?php echo $f_name; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-last-name">Last name</label>
                                                    <input type="text" id="input-last-name" class="form-control" value="<?php echo $l_name; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- edited -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-pnumber">Phone Number</label>
                                                    <input id="input-phone-number" class="form-control" name="pnum" value="<?php echo $phone_no; ?>" type="text" pattern="\d*" maxlength="10">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-bdate">Birth Date</label>
                                                    <input type="text" id="input-birth-date" class="form-control" name="birthday" value="<?php echo $bdate; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />

                                    <h6 class="heading-small text-muted mb-4">Employee information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-employeeid">Employee ID</label>
                                                    <input type="tel" pattern="\d*" maxlength="4" id="input-eid" class="form-control" value="<?php echo $id; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-title">Title</label>
                                                    <input type="text" id="input-etitle" class="form-control" value="<?php echo $title; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-date-hired">Date Hired</label>
                                                    <input type="text" id="input-dhired" class="form-control" value="<?php echo $hdate; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />

                                    <!-- Address -->
                                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-address">Address</label>
                                                    <input id="input-address" name="address" class="form-control" value="<?php echo $address; ?>" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                        </div>
                    </div>
                    <div class="button_cont">
                        <input type="submit" name="submit" class="example_a" value="update" />
                    </div>
                    </form>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
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