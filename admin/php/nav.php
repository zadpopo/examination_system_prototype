<!doctype html>
<html lang="en">
  <head> <!---Admin page-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="admin_sidemenu.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title></title>
  </head>
  <body style=" background-color: black;">
<?php

include ("connections.php");






 session_start();
 
 if(isset($_SESSION["user"])){
   $user = $_SESSION["user"];
 }else{
   echo "<script>window.location.href='../';</script>";
 }
 
$retrieve_query = mysqli_query($conn, "SELECT * FROM logtbl WHERE user='$user' ");

while($row_users = mysqli_fetch_assoc( $retrieve_query )){
  
  $emp_user = $row_users["user"];
  $emp_pass = $row_users["pass"];

}


$retrieve_query = mysqli_query($conn, "SELECT * FROM emptbl WHERE e_id='$emp_user' AND password ='$emp_pass'");

while($row_users = mysqli_fetch_assoc( $retrieve_query )){
  
  

  $emp_user = $row_users["e_id"];
  $emp_lname = $row_users["lname"];
  $emp_fname = $row_users["fname"];
  $emp_mname = $row_users["mname"];

  
  
  $emp_fullname = $emp_fname . " " . $emp_lname; 
  
  
}

?>
<div class="area"></div><nav class="main-menu">
 <form action="" method="POST"> 
            <ul>
                <li>
                    <a href="home.php" name="home" >
                        <br>
                        <i class="fa fa-home fa-1.5x "></i>
                        <span class="nav-text">
                         Home
                        </span>
                        
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="setyear.php">
                        <br>
                        <i class=" fa fa-calendar fa-1.5x "></i>
                        <span class="nav-text">
                            Review Year
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="programs.php">
                        <br>
                       <i class="fa fa-list fa-1.5x"></i>
                        <span class="nav-text">
                            Programs
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="emoloyeesfrm.php">
                        <br>
                       <i class="fa fa-user-tie fa-1.5x"></i>
                        <span class="nav-text">
                            Employees Registration
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="studentfrmtest.php">
                        <br>
                       <i class="fa fa-user-graduate fa-1.5x "></i>
                        <span class="nav-text">
                            Student Registration
                        </span>
                    </a>
                </li>
                <li>
                    <a  href="stud_list.php">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Student list
                        </span>
                    </a>
                </li>
                <li>
                   <a hidden href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a hidden href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a hidden href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../logout.php">
                    <br>
                         <i class="fa fa-power-off fa-1.5x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
      </form>
        