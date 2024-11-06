<?php
    error_reporting(0);
    ob_start();
    session_start();


    $koneksi = new mysqli("localhost","root","","kas_barbershop");
    if ($_SESSION['admin']) {
   
    header("location:index.php");
    }else{ 

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
<br /><br />
<body background="assets/img/kas11.jpg">
    <div class="container">
        <div class="row text-center ">
            <div style="font-family: verdana;" class="col-md-12">
                <br /><br />
                <strong style="font-size: 30px;color: red;">MANAJEMEN KAS</strong>
                <br /><br />
                <strong style="font-size: 30px;color: red;" >MAS GANTENG BARBERSHOP</strong>
                <br /><br />
        </div>
    </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <center> Masukan Username Dan Password </center>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />   
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Username " name="username" />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Password" name="pass" />
                                        </div>
                                        <center>
                                        <div class="form-group input-group">
                                            
                                            <input type="submit" class="btn btn-primary active"  name="login" value="Login" />
                                        </div>
                                        </center>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>

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

if (isset($_POST['login'])) {

    $username=$_POST['username'];
    $pass=$_POST['pass'];

    $ambil = $koneksi->query("select * from tb_user where username='$username' and password='$pass' ");
    $data =$ambil->fetch_assoc();
    $ketemu = $ambil->num_rows;

    if($ketemu >=1){
                                    
    session_start();
    
    $_SESSION['username'] = $data ['username'];
    $_SESSION['pass'] = $data ['password'];
    $_SESSION['level'] = $data ['level'];
    
    
    if($data['level'] == "admin"){
        $_SESSION['admin'] = $data['id'];
        header("location:index.php");
        
    }   

} else{
            ?>
                <script type="text/javascript">
                    alert("Login Gagal Username dan Password Salah.. Silahkan Ulangi Lagi");
                </script>
            <?php
        }


}
}

?>

