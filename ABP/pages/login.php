<?php
ob_start();
$validate = true;
$error = "";
$uname = "";
$password = "";

if (isset($_POST["submit"]) && $_POST["submit"]) {

    $uname = trim($_POST["usname"]);
    $password = trim($_POST["pswd"]);
    $db = new mysqli("localhost", "hbv559", "Abp@216", "hbv559");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $q1 = "SELECT * FROM abp_employee WHERE u_name = '$uname' AND pass = '$password' ";
    $r1 = $db->query($q1);
    $row = $r1->fetch_assoc();
    if ($uname != $row["u_name"] && $password != $row["pass"]) {
        $validate = false;
    } else {
        if ($uname == null || $uname == "") {
            $validate = false;
        }
        if ($password == null || $password == "") {
            $validate = false;
        }
    }
    if ($validate == 1) {
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["usname"] = $row["u_name"];
        echo $row["u_name"];
        header("Location: homepage/dashboard.php");
        exit();
        $db->close();
    } else {
        $error = "Username or Password is not correct.";
        $db->close();
    }
}

$validate_reset = true;
if (isset($_POST["update"])) {

    $eid = trim($_POST["e_id"]);
    $uname = trim($_POST["u_name"]);
    $pass = trim($_POST["r_pswd"]);
    $db = new mysqli("localhost", "hbv559", "Abp@216", "hbv559");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $q1 = "SELECT * FROM abp_employee WHERE u_name = '$uname' AND e_id = '$eid'";
    $r1 = $db->query($q1);

    $row = $r1->fetch_assoc();
    if ($uname != $row["u_name"] && $eid != $row["e_id"]) {
        $validate_reset = false;
    }

    if ($validate_reset == true) {
        $q2 = "UPDATE abp_employee SET pass = '$pass' WHERE e_id = '$eid'";
        $r2 = $db->query($q2);
        header("Location: login.php");
        exit();
        $db->close();
    } else {
        echo "Please Try agian: Information Incorrect";
    }
}
?>

<!------------------------------------------------------------------------------------------------------------------------------- R E S E T --------------- P H P -------->

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login/style.css" />
    <script type="text/javascript" src="../js/login/signin-v.js"></script>
    <script type="text/javascript" src="../js/login/reset-v.js"></script>
    <style>
        .vlable {
            color: red;
            display: block;
            text-align: center;
        }
    </style>
    <title>Login Page</title>
</head>

<body>
    <!------------------------------------------------------------------------------------------------------------------------------- S I G N   I N ------------------------------>
    <div class="container">
        <div class="container-f">
            <div class="signin-up">
                <form method="post" class="sin-form" id="login" enctype="multipart/form-data">
                    <input type="hidden" name="submit" value="1" />
                    <h2 class="title">Sign in</h2>

                    <label class="vlable" id="msg_usname" class="err_msg"></label>
                   <div class="input-field" id="vBemail">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="usname" name="usname" />
                    </div>

                    <label class="vlable" id="msg_pswd" class="err_msg"></label>
                    <div class="input-field" id="vBpswd">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="pswd" name="pswd" />
                    </div>

                    <input type="submit" name="submit" value="Login" class="btn solid" id="login-btn" />
                </form>

                <!------------------------------------------------------------------------------------------------------------------------------- R E S E T ------------------------------>
                
                <form class="sign-up-form" id="Reset" method="POST">
                    <h2 class="title">Reset Password</h2>
                    <input type="hidden" name="update" value="1" />

                    <label class="vlable" id="msg_eid" class="err_msg"></label>
                    <div class="input-field" id="vBeid">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="e_id" id="e_id" placeholder="Employee ID" maxlength="4" />
                    </div>

                    <label class="vlable" id="msg_uname" class="err_msg"></label>
                    <div class="input-field" id="vBuname">
                        <i class="fas fa-user"></i>
                        <input type="text" name="u_name" id="u_name" placeholder="Username" />
                    </div>

                    <label class="vlable" id="msg_npswd" class="err_msg"></label>
                    <div class="input-field" id="vBnpswd">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="r_pswd" id="r_pswd" placeholder="New Password" />
                    </div>

                    <label class="vlable" id="msg_ncpswd" class="err_msg"></label>
                    <div class="input-field" id="vBncpswd">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="c_r_pswd" id="c_r_pswd" placeholder="Confirm Password" />
                    </div>
                    <input type="submit" name="update" class="btn" value="update" id="reset-btn" />
                </form>
            </div>
        </div><!------------------------------------------------------------------------------------------------------------------------------------------------------- E N D ------------>
        <script type="text/javascript" src="../js/login/signin-r.js"></script>
        <script type="text/javascript" src="../js/login/reset-r.js"></script>

        <div class="cont-panel">
            <div class="panel l-panel">
                <div class="content">
                    <h3>Forgot Password?</h3>
                    <p>
                        Reset Your Password.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Reset</button>
                </div>
                <img src="../img/login/log.svg" class="image" alt="" />
            </div>
            <div class="panel r-panel">
                <div class="content">
                    <h3>Sign-In Here</h3>
                    <p>
                        Click below to Sign in after resetting password.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="../img/login/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="../js/login/app.js"></script>
</body>
</html>