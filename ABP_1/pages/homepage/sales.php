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
    <title>Sales Report</title>
    <!-- Favicons -->
    <link href="../../img/abp/favicon.ico" rel="icon">
    <link href="../../img/abp/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Montserrat:wght@700&display=swap');

        .invoice-box {
            max-width: 90%;
            margin: 25px auto;
            border-radius: 25px;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
    </style>
</head>
<body id="page-top">
    <div id="wrapper">
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <?php include 'include/navbar.php'; ?>
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <!----------------------------------------------------------------------------------------------------------------------------N A V B A R ----------------------->
        <div class="invoice-box" style="padding: 15px 30px; display: flex; justify-content:center; background-color: white; ">
            <h2>S A L E S &nbsp; R E P O R T</h2>
        </div>
        <div class="card shadow mb-4" style="margin: 0px auto;margin-bottom: 25px;width: 90%;border-radius: 25px;justify-content: center; ">
            <div class="card-body" style="padding: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, .15); border-radius: 25px;">
                <div class="table-responsive">

                    <?php
                    
                    $connection = mysqli_connect("localhost", "hbv559", "Abp@216", "hbv559");
                    $db = mysqli_select_db($connection, 'hbv559');
                    $query = "SELECT * FROM abp_sales s JOIN abp_customer c ON s.cust_id = c.cust_id JOIN abp_inventory i ON s.item_id = i.item_id";
                    $query_run = mysqli_query($connection, $query);

                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Transaction ID</th>
                                <th>Customer Name </th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Transaction ID</th>
                                <th>Customer Name </th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_array($query_run)) {

                            ?>
                                <tr>
                                    <td class="column1"><?php echo $row["date"]; ?></td>
                                    <td class="column2"><?php echo $row["trans_id"]; ?></td>
                                    <td class="column4"><?php echo $row["cf_name"] . " " . $row["cl_name"]; ?></td>
                                    <td class="column3"><?php echo $row["item_name"]; ?></td>
                                    <td class="column5"><?php echo $row["item_qnt"]; ?></td>
                                    <td class="column6"><?php echo $row["item_price"]; ?></td>
                                    <td class="column6"><?php echo ($row["item_qnt"] * $row["item_price"]); ?></td>
                                </tr>

                            <?php
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <?php include 'include/footer.php'; ?>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------- F O O T E R  ----------------------->
    </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 
<!---------------------------------------------------------------------------------------------------------------------------------------------------------- LOGOUT MODAL  ----------------------->
    <?php include 'include/logout.php'; ?>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------- LOGOUT MODAL  ----------------------->
   


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>