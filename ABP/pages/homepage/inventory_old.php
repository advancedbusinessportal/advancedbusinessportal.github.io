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
  <title>Inventory</title>
    <!-- Favicons -->
    <link href="../../img/abp/favicon.ico" rel="icon">
    <link href="../../img/abp/apple-touch-icon.png" rel="apple-touch-icon">
    
  <!-- Custom fonts for this template-->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .mybutton {
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
      width: 170px;
      box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
    }

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

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
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
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.21799" rel="stylesheet" type="text/css" />
      <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.21799" />

      <div class="invoice-box" style="padding: 15px 30px; display: flex; justify-content:center; background-color: white; ">
        <h2>I N V E N T O R Y &nbsp;&nbsp; M A N A G E M E N T</h2>
      </div>

      <div class="card shadow mb-4" style="margin: 0px auto;width: 90%;border-radius: 25px;justify-content: center; ">
        <div class="card-body" style="padding: 0px; box-shadow: 0 0 10px rgba(0, 0, 0, .15); border-radius: 25px;">
          <div class="table-responsive">

            <?php
            $connection = mysqli_connect("localhost", "hbv559", "Abp@216", "hbv559");
            $db = mysqli_select_db($connection, 'hbv559');
            $query = "SELECT * FROM abp_inventory";
            $query_run = mysqli_query($connection, $query);
            ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="text-align: center;">ID</th>
                  <th style="text-align: center;">Image</th>
                  <th style="text-align: center;">Name</th>
                  <th style="text-align: center;">Price</th>
                  <th style="text-align: center;">Stock</th>
                  <th style="text-align: center;">Description</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th style="text-align: center;">ID</th>
                  <th style="text-align: center;">Image</th>
                  <th style="text-align: center;">Name</th>
                  <th style="text-align: center;">Price</th>
                  <th style="text-align: center;">Stock</th>
                  <th style="text-align: center; ">Description</th>
                </tr>
              </tfoot>
              <tbody>

                <?php
                while ($row = mysqli_fetch_array($query_run)) {
                ?>

                  <tr>
                    <td class="column1"><?php echo $row["item_id"]; ?></td>
                    <td class="column2"><img class="img-profile rounded-circle" style="height: 4rem; width: 4rem;" src="<?php echo $row["item_image"]; ?>"></td>
                    <td class="column3"><?php echo $row["item_name"]; ?></td>
                    <td class="column4"><?php echo $row["item_price"]; ?></td>
                    <td class="column5"><?php echo $row["item_stock"]; ?></td>
                    <td class="column6"><?php echo $row["item_desc"]; ?></td>
                  </tr>

                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <?php
      $target_dir = "../../img/inventory/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOK = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      if (isset($_POST["insert"])) {
        $pid = $_POST["pid"];
        $pname = $_POST["pname"];
        $price = $_POST["price"];
        $desc = $_POST["desc"];
        $quantity = $_POST["stock"];

        $database = new mysqli("localhost", "hbv559", "Abp@216", "hbv559");
        if ($database->connect_error) {
          die("Connection failed: " . $database->connect_error);
        }
        
        echo $target_file;
        $info = "insert into abp_inventory (item_name, item_image, item_price, item_stock, item_desc) values ('$pname', '$target_file', '$price', '$quantity', '$desc')";
        $event_6 = $database->query($info);

        $database->close();
                 echo "<meta http-equiv='refresh' content='0'>";

      }

      if (isset($_POST["delete"])) {
        $db = new mysqli("localhost", "hbv559", "Abp@216", "hbv559");
        if ($db->connect_error) {
          die("Connection failed: " . $db->connect_error);
        }
        $pid = $_POST["pid"];
        $change = "DELETE FROM abp_inventory WHERE item_id = '$pid'";
        $r3 = $db->query($change);

        $db->close();
                 echo "<meta http-equiv='refresh' content='0'>";

      }

      ?>

      <div class="invoice-box" style="padding: 15px 30px;background: #fff;">
        <form method="post">
          <label for="transactionId" style="font-size: 20px;margin-right: 10px;">Delete Product: </label>
          <input type="text" name="pid" placeholder="Enter Product ID Here" style="width: 40%; display: inline;" class="form-control" />
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="DELETE" name="delete" style="float: right; width: 160px;">
        </form>
      </div>

      <div class="container1" style="padding: 0; width: 90%; border-radius: 27px; margin: 25px auto;">
        <div class="signup-content" style="border-radius: 25px; box-shadow: 0 0 10px rgba(0, 0, 0, .15);">
          <h2 style="text-align: center;padding-bottom: 9px;">Add New Product</h2>
          <form id="SignUp" style="border-radius: 25px;" method="post" enctype="multipart/form-data">
            <input type="hidden" value="1" name="submit">

            <div class="signup-box" id="vBlname">
              <input type="text" name="pname" placeholder="Product Name" class="signup-input">
            </div>

            <div class="signup-box" id="vBemail">
              <input type="text" name="price" placeholder="Product Price" class="signup-input">
            </div>

            <div class="signup-box" id="vBuname">
              <input type="text" name="desc" placeholder="Description" class="signup-input">
            </div>

            <label for="avatar">Avatar Image</label>
            <div class="signup-box" id="vBavatar">
              <input type="file" name="fileToUpload" class="signup-input">
            </div>

            <div class="signup-box" id="vBpswd">
              <input type="text" name="stock" placeholder="Quantity" class="signup-input">
            </div>

            <div class="s-box" id="vBsubmit">
              <input type="submit" value="INSERT" name="insert" style="width: 100%;height: 60px;">
            </div>
          </form>
          <script type="text/javascript" src="js/signup-r.js"></script>
        </div>
      </div>
    </div>
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