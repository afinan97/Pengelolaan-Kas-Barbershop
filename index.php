<?php
    error_reporting(0);
   
    session_start();


  $koneksi = new mysqli("localhost","root","","kas_barbershop");
  if ($_SESSION['admin']) {
   
  
        
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KAS M.G BARBERSHOP</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="logout.php" class="btn btn-danger square-btn-signout">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/barber1.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard "></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="?page=user"><i class="fa fa-user"></i> User Barbershop</a>
                    </li>
                    <li>
                        <a  href="?page=pemasukkan"><i class="fa fa-sign-in"></i> Pemasukkan Barbershop</a>
                    </li>
						        <li  >
                        <a  href="?page=pengeluaran"><i class="fa fa-sign-out"></i> Pengeluaran Barbershop</a>
                    </li>	
                      <li>
                        <a  href="?page=rekap"><i class="fa fa-book "></i> Rekap barbershop</a>
                    </li>
                    
                    </ul>
                </div>
            </nav>
					                   
                    
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <?php

                        $page = isset($_GET['page']) ? $_GET['page'] : "";
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";

                        if ($page == "pemasukkan"){
                          if ($aksi == "") {
                            include "page/pemasukkan/pemasukkan_barbershop.php";
                          }if ($aksi == "hapus") {
                            include "page/pemasukkan/hapus.php";
                          }
                        }elseif ($page == "pengeluaran"){
                          if ($aksi == "") {
                            include "page/pengeluaran/pengeluaran_barbershop.php";
                          }if ($aksi == "hapus") {
                            include "page/pengeluaran/hapus.php";
                          }
                        }elseif ($page == "rekap"){
                          if ($aksi == "") {
                            include "page/rekap/rekap_barbershop.php";
                          }  
                        }elseif ($page == "user"){
                          if ($aksi == "") {
                            include "page/user/user.php";
                          }if ($aksi == "hapus") {
                            include "page/user/hapus.php";
                          }
                        }elseif ($page == ""){
                          if ($aksi == "") {
                            include "home.php";
                          }
                        }
                        ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

<?php
        }else{
        header("location:login.php");
    
      }
?>