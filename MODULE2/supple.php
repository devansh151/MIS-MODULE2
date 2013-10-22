<?php 
session_start();
include('databaseconnect.php');


$q="select * from student where rollno=".$_SESSION['user'];
$res=mysql_query($q);
$row=mysql_fetch_array($res);



?>


<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mis.nitt.edu</title>
<link rel="stylesheet" href="css/bkno.css" type="text/css" />
<link rel="stylesheet" href="css/bqgo.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<link href="css/bootstrap-responsive.css" rel="stylesheet">


<script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        
       
<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

<!-- Bootstrap jQuery Plugins, compiled and minified -->
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><span class="red">i MIS .</span></h1>
                    </div>
                    <div class="logo span5">
                        <span class="red"><img class="nitt" src="img/nitt logo1.png" /></span>
                    </div>
                    <div class="links span8">
                        <a class="home" href="https://www.nitt.edu" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <a class="blog" href="logout.php" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                    </div>
                </div>
            </div>
        </div>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Menu</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li><a href="home.php"><i class="icon-home icon-white"></i> Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="studentinfo.php">Student Information</a></li>
                            <li><a href="admission.php">Admission Details</a></li>
                                          <li><a href="academic.php">Academic Details</a></li>
              <li><a href="fee.php">Fee Details</a></li>
              <li><a href="receipt.php">Fee Receipt Details</a></li>
              


            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course Registrations <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="registration.php">Pre-Registrations</a></li>
              <li><a href="attendance.php">Student Attendance</a></li>
              <li><a href="supple.php">Supple-Registrations</a></li>
              <li><a href="mess.php">Mess Feedback</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="change.php">Change Password</a></li>
              
            </ul>
          </li>
        </ul>
        <div class="navbar-search pull-right">
        <?php echo '<font face="Ebrima" color="#eb4141">'.$_SESSION['name'].'</font>'; ?>
        </div>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->
<div class="main">
<center>
<br><br>

<font face="Ebrima" color="#eb4141">Welcome to NITT - <br><br>Sessional & Endsem Mark Entry -<br><br> 
For Cycle test Mark Entry select "Sessional Mark Entry" link and for End Semester Mark Entry select "Endsem Mark Entry" link<br>

Faculty / Student can change password as per their convinience.<br>
For any help contact us at MIS Office of NITT - 
OR Mail us at mis@nitt.edu OR Academic Section of NITT.</font>
</center>
</div>
<div class="navbar-inner">
<center>
<font face="Ebrima" class="homefttext">| MIS EMAIL-ID : mis@nitt.edu | | MIS INTERCOM - 3427 |</font>
</center>
</div>
</body>
</html>