<?php    
    session_start();
    if (!isset($_SESSION["usname"]))   {
        header("Location: ../login.php");   
        echo " Please login to get Full access !!   &nbsp &nbsp" ;
    }     
    else{
        $username = $_SESSION["usname"];
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
    $email = $row["email"];
    $phone_no = $row["phone"];
    $address = $row["address"];
    $bdate = $row["b_date"];
    $hdate = $row["h_date"];
    $title = $row["title"];
    }
?>