<?php 
    require_once 'config.php';
    session_start();
    // $db_host = '127.0.0.1';
    // $db_name = 'akim';//
    // $db_username = 'root';//Mccg8(3P^tJVnBDsF
    // $pass_word = '#4kLxMzGurQ7Z~';//$databasePassword;//'Mccg8(3P^tJVnBDsF';//#4kLxMzGurQ7Z~
    // $charset = 'utf8mb4';
    // $server_path = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$charset;
    // $connect = new PDO($server_path, $db_username, $pass_word);//"mysql:host=localhost;dbname=behind_voice;charset=utf8","root",""
    // $connect->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);


    $current_category = "";
    // if (isset($_GET['q']) && $_GET['q'] != "") 
    // {
    //     $current_category = $_GET['q'];
    //     //die($current_category);
    // } else {
    //     header("Location: https://tinyurl.com/ypgawards");
    // }

?>



<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>GMA <?php echo date('Y'); ?> | MobileContent.com.gh </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Lordgreat-Adri Emmanuel">
    <!-- Favicon icon -->
    <link rel="icon" href="../files/assets/images/auth/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- light gallery css -->
    <!--<link rel="stylesheet" type="text/css" href="../files/bower_components/lightgallery/css/lightgallery.min.css">-->
    <!-- Select 2 css -->
    <link rel="stylesheet" href="../files/bower_components/select2/css/select2.min.css" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">



    <style>
        button:hover
        {

           /* background-color: ;#45a049*/
            color: gray;
            border: 1px solid gray;
            border-top-left-radius: 15px;
            border-bottom-right-radius: 15px;
            box-shadow: 0 6px #666;
            transform: translateY(4px);
            background-color: gray;
        }

        button:active 
        {
          background-color: #3e8e41;
          box-shadow: 0 5px #666;
          transform: translateY(4px);
        }
    </style>

    <style type="text/css">
        @media screen and (min-width: 600px) {
         #mobile-share {
         visibility: hidden;
         clear: both;
         float: left;
         margin: 10px auto 5px 20px;
         width: 28%;
         display: none;
         }
        }
    </style>
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="http://mobilecontent.com.gh" target="_blank">
                        <!-- <img  style="margin-top: 35px; margin-bottom: 25px; border-radius: 100%; width: 80px; height: 80px; background-color: white; border-radius: 50px;" class="img-fluid" src="../files/assets/images/logo.png" alt="Theme-Logo" /> -->
                        <img style="margin-top: 6px; margin-bottom: 10px; border-radius: 100%; width: 50px; height: 50px; background-color: white; " class="img-fluid" src="banner.png" alt="service-logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <!-- <span class="badge bg-c-pink">5</span> -->
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <!-- <label class="label label-danger">New</label> -->
                                        
                                    </li>
                                     
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <!-- <span class="badge bg-c-green">3</span> -->
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                   <!--  <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Current User</span>
                                    <i class="feather icon-chevron-down"></i> -->
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                    <!-- <li>
                                        <a href="auth-normal-sign-in.html">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li> -->
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <!-- <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                     
                </div>
            </div>
        </div> -->
         
        
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">View Performance</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Contestant Details</span>
                                </a>
                                 
                             
                        </ul>
                         
                         
                    </div>
                </nav>




                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Ghana Beauty Awards</h4>
                                                    <br>
                                                    <h6 style="color: maroon;">Welcome. Please select the Award Category for this nomination to begin. </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <?php 
                                        //SELECT * FROM contestants WHERE cabinet = '$current_category' ORDER BY num_of_votes DESC
                                        // $query = "SELECT * FROM categories ORDER BY category_name ASC";

                                        // $statement = $connect->prepare($query);
                                        // $statement->execute();
                                        // $results = $statement->fetchAll();

                                        // foreach ($results as $value) {
                                        ?>
                                    </div>
                                </div>

                                <?php 
                                    if(isset($_SESSION['notice_message']) && $_SESSION['notice_message'] != "") 
                                    {
                                        //echo "<span class='text-center success' style='color:gree; margin: 3px auto; font-sieze: 26'>". $_SESSION['notice_message']."</span>";
                                       echo "<div  class='alert alert-info alert-dismissible ' role='alert' style='color: green'><button type='button' class='close' data-dismiss='alert' aria-label ='close'><span aria-hiddden='true'>x</span></button><b>".$_SESSION['notice_message']."</b></div>";
                                        unset($_SESSION['notice_message']);
                                    }else
                                    {
                                        unset($_SESSION['notice_message']);
                                    }
                                ?>
                                <hr>
                                <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body masonry-page">

                                        <!-- Gallery with description card start -->
                                        <!-- <h5 class="m-b-20">Contestant Details</h5> -->
                                        <!-- <h5 class="m-b-20" style="font-family: Serif; font-weight: 8px; color: maroon;">CHOOSE FROM : <span class="text-muted">"<?php //echo strtoupper($current_category) ; ?>"</span>  CATEGORY </h5> -->
                                        
                                        <div class="default-grid row">
                                            <div class="row lightboxgallery-popup">
                                                <?php 
                                                    //foreach ($results as $get_result) {
                                                ?>

                                                <div class="col-md-12 default-grid-item" style="border: 1px silver solid;">
                                                    <div class="card gallery-desc">

                                                        <div class="masonry-media col-md-4 inline"><!-- <?php //echo $get_result["contestant_id"];?> voteidentifier -->
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        </div>

                                                        <div class="masonry-media col-md-4 inline"><!-- <?php //echo $get_result["contestant_id"];?> voteidentifier -->
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        </div>

                                                        <div class="masonry-media col-md-4 inline"><!-- <?php //echo $get_result["contestant_id"];?> voteidentifier -->
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        </div>

                                                        <div class="masonry-media col-md-4 inline"><!-- <?php //echo $get_result["contestant_id"];?> voteidentifier -->
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>


                                               
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                            </div>
                                        </div>


                    <div class="modal" data-keyboard="false"  data-backdrop="static" id="testModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <img src="banner.png" style="margin-top: 5px; margin-bottom: 5px; border-radius: 100%; width: 50px; height: 50px;" class="img-fluid" >

                                    <h4 class="modal-title pull-right">Payment Plan for [ <label id="user" name="user" class="text-danger"></label> ] </h4>
                                    <button class="close pull-left" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="">
                                    
                                </div>
                                <!-- action="process_payment.php"  method="post"<hr style="border: 1px solid silver; width: 100%"> 22.5  -->
                                 <form  name="payment" id="payment" class="payment"  onsubmit="return validateEntryForm();">
                                    
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="amount">Bulk Vote</label>
                                            <select name="amount" class="form-control amount" id="amount">
                                                <option value="">select bulk votes</option>
                                                <option value="1">₵1.00 => 1 vote</option>
                                                <option value="5">₵5 => 5 votes</option>
                                                <option value="10">₵10.00 => 10 votes</option>
                                                <option value="25">₵25.00 => 25 votes</option>
                                                <option value="50">₵50.00 => 50 votes</option>
                                                <option value="100">₵100.00 => 100 votes</option>
                                                <option value="250">₵250.00 => 250 votes</option>
                                                <option value="500">₵500.00 => 500 votes</option>
                                            </select>
                                        </div>


                                        <div class="form-group inline">
                                            <label for="inputUserName">Choose payment option</label> <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="channel" class="channel" value="mtn-gh" id="mtn-gh" onClick="return checkIfVisacard()"><!--  onClick="checkIfVodafone()" -->
                                                <img src="../files/assets/images/logo_mtn.png" style="margin-top: 0px; margin-bottom: 5px; border-radius: 100%; width: 35px; height: 35px;" class="img-fluid">
                                            </label>
                                           <label class="radio-inline">
                                                <input type="radio" name="channel" class="channel" value="tigo-gh" id="tigo-gh" onClick="return checkIfVisacard()"><!--  onClick="checkIfVodafone()" logo_tigo.png-->
                                                <img src="airtel_tigo.png" style="margin-top: 0px; margin-bottom: 5px; border-radius: 100%; width: 35px; height: 35px;" class="img-fluid">
                                            </label>

                                           <!--  <label class="radio-inline">
                                                <input type="radio" name="channel" class="channel" value="airtel-gh" id="airtel-gh" onClick="return checkIfVisacard()">
                                                <img src="../files/assets/images/logo_airtel.png" style="margin-top: 0px; margin-bottom: 5px; border-radius: 100%; width: 35px; height: 35px;" class="img-fluid">
                                            </label> -->

                                            <label class="radio-inline">
                                                <input type="radio" name="channel" class="channel" id="rad_voda_token" value="vodafone-gh-ussd" onClick="return checkIfVisacard();">
                                                <img src="vodafone.png" style="margin-top: 0px; margin-bottom: 5px; border-radius: 100%; width: 35px; height: 35px;" class="img-fluid"><!-- ../files/assets/images/logo_voda.png -->
                                             </label>

                                             <label class="radio-inline">
                                                <input type="hidden" name="channel" class="channel" id="visa_card" value="visa_card" onClick="return checkIfVisacard()">
                                                <!-- <img src="../files/assets/images/logo_visa.png" style="margin-top: 5px; margin-bottom: 5px; border-radius: 100%; width: 65px; height: 65px;" class="img-fluid"> -->
                                             </label>
                                            <br>
                                        </div>


                                        <div class="form-group">
                                             <label for="mobile_number" id="mobile_number">Mobile Number</label>
                                            <label for="phone_numb" id="mobile_money_number">Mobile Money Number</label>
                                            <input type="text" class="form-control number" name="number" id="phone_numb" placeholder="mobile number" required="">
                                             <input type="hidden" name="contestant_id" id="contestant_id" class="contestant_id">
                                             <input type="hidden" name="nominee_name" id="contestant_name" class="nominee_name">
                                             <input type="hidden" name="voteidentifier" id="voteidentifier">
                                             <input type="hidden" name="api_key" class="api_key" value="33ffc38bcaff137103b94abb0480f966">
                                        </div>

                                        <div class="form-group" id="voda_token_div">
                                            <label for="token">Vodafone Token</label>
                                            <input type="text" class="form-control" name="token" id="token" placeholder="voda token">
                                        </div>
                                        <!-- <input type="submit" class="btn btn-primary" name="sender"> -->
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-primary" type="submit" name="send">Cast Vote</button>
                                        <button class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                                
                                
                            </div>                          
                        </div>                       
                    </div>


                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                           <!--  <div id="styleSelector">

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- isotope js -->
    <script src="../files/assets/pages/isotope/jquery.isotope.js"></script>
    <script src="../files/assets/pages/isotope/isotope.pkgd.min.js"></script>

    <script type="text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->

    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vartical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> -->

    <script type="text/javascript">
        $(window).on('load', function() {
            var $container = $('.filter-container');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            var $grid = $('.default-grid').isotope({
                itemSelector: '.default-grid-item',
                masonry: {}
            });
        });
    </script>
    <script type="text/javascript" src="../files/assets/js/script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
    window.oncontextmenu = function () {
         console.log("Right Click Disabled");
         return false;
    }

    document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
            //ctrl+u Alt+c, Alt+v will also be disabled sadly.
        } else {
            return true;
        }
    };


    // $(document).keypress("u",function(e) {
    //     if(e.ctrlKey)
    //     {
    //         return false; working very well too Lordgreat
    //     }
    //     else
    //     {
    //         return true;
    //     }
    // });




    $('#signup-form').validate({
        rules : {
            first_name : {
                required: true,
            },
            last_name : {
                required: true,
            },
            phone_number : {
                required: true
            },
            password : {
                required: true
            },
            re_password : {
                required: true,
                equalTo: "#password"
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });

    

    $(document).ready(function(){
        $('.voter').on('click',function(){
                $("#contestant_id").val($(this).data('contestant-id'));
                $("#contestant_name").val($(this).data('contestant-name'));
                $("#voteidentifier").val($(this).data('voteidentifier'));

                $("#user").html($(this).data('contestant-name'));

                $("#testModal").modal("toggle");
                $("#testModal").modal("show");
        });

       document.getElementById('voda_token_div').style.display="none";
       // document.getElementById('voda_token_div').style.display="none";
       document.getElementById('mobile_number').style.display = 'none';
        
    });
    

</script>


<script >
    function validateEntryForm()
    {
        var amount = document.forms['payment']['amount'];
        var channel = document.forms['payment']['channel'];
        var number = document.forms['payment']['number'];
        // var visa_card = document.forms['payment']['visa_card'];
        var token = document.forms['payment']['token'];


        if(amount.value.trim() =="")
        {
            alert("please select bulk vote");
            return false;
        }

        if(channel.value.trim() =="")
        {
           alert("please select your payment option");
           return false;
        }

        if(channel.value == 'visa_card') 
        {

        }else
        {
            if(number.value.trim() == "")
            {
                alert("please enter mobile money number!");
                return false;
            }
        }
        

        // if(network.value == 'vodafone-gh') 
        // {
        //     if(token.value.trim() == "")
        //     {
        //         alert("please enter vodafone token or dial *110# to generate payment token");
        //         return false;
        //     }
        // }


        if(number.value.trim() != "") 
        {
            if(number.value.trim().length >= 10)
            {
              // return  validatePhoneNumber(phone_number);
            }
        }
    }


    function validatePhoneNumber(contactValue)
    {
        var phonenoFormat = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(contactValue.value.match(phoneno))
        {
           return true;
        }else
        {
            alert("Contact value not valid, enter valid numbers only");
            return false;
        }
    }


    function checkIfVisacard()
    {
        if(document.getElementById('visa_card').checked) 
        {
           document.querySelector('#mobile_number').style.display = 'block';
           document.querySelector('#mobile_money_number').style.display = 'none';
        }else{
           document.querySelector('#mobile_number').style.display = 'none';
           document.querySelector('#mobile_money_number').style.display = 'block';
        }    
    }

    function checkIfVodafone()
    {
        if(document.getElementById('rad_voda_token').checked) 
        {
           document.querySelector('#voda_token_div').style.display = 'block';
        }else{
           document.querySelector('#voda_token_div').style.display = 'none';
        }    
    }
</script>


<script >
    $(document).ready(function(){
        $(".payment").submit(function(event) {
            event.preventDefault();
            var amount = $(".amount").val();
            var channel = $(".channel").val();
            var api_key = $(".api_key").val();
            var nominee_name = $(".nominee_name").val();
            var contestant_id = $(".contestant_id").val();
            var contestant_num = $("#voteidentifier").val();
            var number = $(".number").val();

            //restrict voting if amount is not selected
            if (amount == "") {
                alert('Please select vote plan to continue.');
                return false;
            }

            if (document.getElementById('visa_card').checked)
            {          
                $.ajax({
                    url: "payment-api/card_pay/process_order.php",
                    type: "POST",
                    // contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    data: {
                        api_key:api_key, 
                        price:amount, 
                        contestant_name:nominee_name,
                        contestant_id:contestant_id,
                        contestant_num:contestant_num,
                        number:number,
                        device:"online"
                    },
                    beforeSend: function() {
                        $('.payment').trigger('reset');
                        $("#testModal").modal('hide');
                    },
                    success:function(response){
                       // console.log(response);
 
                      window.location.href = response['action_url'];
                    }//JSON.stringify()
                });
            }else
            {
                $.ajax({
                    url: "payment_api/momo/execute_pay.php",
                    type: "POST",
                    data: {
                        contestant_name:nominee_name,
                        contestant_num:contestant_num,
                        contestant_id:contestant_id,
                        amount:amount,
                        api_key:api_key,
                        number:number,
                        channel:channel,
                        device:'online'
                    },
                    beforeSend: function() {
                        $("#testModal").modal('hide');
                    },
                    success:function(response){
                        // alert("Vote is being process. Check and confirm payment!");
                        alert(response.Data.Message);
                        $('.payment').trigger('reset');
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
</body>



</html>
