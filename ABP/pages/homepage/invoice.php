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
    <title>INVOICE</title>

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

        .example_ab:hover {
            background: #434343;
            letter-spacing: 1px;
            box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            color: whitesmoke;
            transition: all 0.4s ease 0s;
        }

        .invoice-box {
            max-width: 1000px;
            margin: 40px auto;
            border-radius: 25px;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }



        /**************************************************************************************************** I N V O I C E *******************************************************/
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
        <div id="wrapper" style="display:flex; justify-content: center; ">
            <div class="main-content" id="printInvoice">
                <div class="row small-spacing">
                    <div class="col-xs-12" style="width: 900px;">

                        <div class="invoice-box" style="padding: 15px 30px;">
                            <form action="" method="post">
                                <label for="transactionId" style="font-size: 20px; margin-right: 10px;">Transaction ID: </label>
                                <input type="text" name="search" placeholder="Enter Transaction ID for Invoice" style="width: 40%; display: inline;" class="form-control" />
                                <input type="submit" class="btn btn-primary waves-effect waves-light" name="submit" value="Search" style="float: right; width: 160px;">
                            </form>
                        </div>

                        <?php
                        if (isset($_POST["submit"])) {
                            $tid = $_POST["search"];
                            $connection = mysqli_connect("localhost", "hbv559", "Abp@216", "hbv559");
                            $db = mysqli_select_db($connection, 'hbv559');
                            $query = "SELECT * FROM abp_sales s JOIN abp_customer c ON s.cust_id = c.cust_id JOIN abp_inventory i ON s.item_id = i.item_id WHERE trans_id = '$tid'";
                            $query_run = mysqli_query($connection, $query);

                            $total = 0;
                            $row = mysqli_fetch_array($query_run)
                        ?>

                            <div class="invoice-box">
                                <table>
                                    <tr class="top">
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td class="title">
                                                        <img src="../../img/icon/LOGO.png" alt="ABP" style="width: 70px; border-radius: 35px;height: 70px;" >
                                                    </td>

                                                    <td>
                                                        Invoice #:
                                                        <? echo $tid; ?><br>
                                                         Date :
                                                        <? echo $row["date"]; ?><br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class="information">
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td>
                                                        Advanced Business Portal,<br>
                                                        Wascana Road,<br>
                                                        Regina, SK S4S6W1.
                                                    </td>
                                                    <th></th>
                                                    <td>
                                                        <label id="cust_name">Name:
                                                            <? echo $row["cf_name"] . " " . $row["cl_name"]; ?><br> </label><br>
                                                        <label id="cust_phone">Phone:
                                                            <? echo $row["c_phone"]; ?><br> </label><br>
                                                        <label id="cust_email">Email:
                                                            <? echo $row["c_email"]; ?><br> </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Quantity</th>
                                                    <th>Price(Per/EA)</th>
                                                </tr>

                                                <?php

                                                while ($row = mysqli_fetch_array($query_run)) {

                                                ?>

                                                    <tr>
                                                        <td><?php echo $row["item_name"]; ?></td>
                                                        <th><?php echo $row["item_qnt"]; ?></th>
                                                        <td><?php echo $row["item_price"]; ?></td>
                                                    </tr>

                                                <?php

                                                    $total = $total + ($row["item_price"] * $row["item_qnt"]);
                                                }

                                                ?>

                                                <tr>
                                                    <td></td>
                                                    <th>Total</th>
                                                    <th><?php echo $total; ?></th>
                                                </tr>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            </table>
                        
                            <div class="text-right margin-top-20">
                                <ul class="list-inline">
                                    
                                        <script type="text/javascript">
                                            function printDiv(divName) {
                                                var printContents = document.getElementById(divName).innerHTML;
                                                var originalContents = document.body.innerHTML;
                                                document.body.innerHTML = printContents;
                                                window.print();
                                                document.body.innerHTML = originalContents;
                                            }
                                        </script>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" onclick="printDiv('printInvoice')"><i class='fa fa-print'></i> Print</button>
                                    </li>
                                </ul>

                            <?php

                        }
                            ?>

                            </div>
                    </div>
                </div>
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
   


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>