<br>
<?php
session_start();
include('databaseconnect.php');
if($_SESSION['success'])
{



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


<!--<script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        
       
<!--<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')-->


<!--</script>-->
<script src="js/jquery-1.10.1.js"></script>
<script>
$(document).ready(function(){
						   
						   $('#stud_info').click(function(){
												   
												   $('#entry1').slideToggle(500);
												   
												   });
						   
						   
						   
						   });
</script>
<!-- Bootstrap jQuery Plugins, compiled and minified -->
<!--<script src="js/bootstrap.min.js"></script>-->
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
                        <a class="home" href="http://www.nitt.edu" rel="tooltip" data-placement="bottom" data-original-title="NITT Home Page"></a>
                        <a class="blog" href="logout.php" rel="tooltip" data-placement="bottom" data-original-title=""></a>
                    </div>
                </div>
            </div>
        </div>
<div class="navbar">
 <div class="navbar-inner">
  <div class="navbar-search pull-right">
                <?php $_SESSION['name']=$row['name']; echo '<font face="Ebrima" color="#eb4141">'.$row['name'].'</font>'; ?>

        </div>
 </div>
</div><!-- /.navbar -->
<div class="main">
<center>
<br><br>


            
                <div class="register span6" style="width:100%;">
<form>

<button type="submit" id="stud_info" name="submit">Student Info</button><br />
 <div style="width:auto;float:left;-moz-box-shadow:0 1px 5px rgba(0,0,0,0.3);-webkit-box-shadow:0 1px 5px rgba(0,0,0,0.3);box-shadow:0 1px 5px rgba(0,0,0,0.3);">
  <p id="entry1">
  dadadas
  d'adsl'sdlasd
  'asd'
  ladsas;;md;ds;sdk;sd
  </p>
  </div>
</form>
<form style="background:none;-moz-box-shadow:0 0px 0px 0;-webkit-box-shadow:0 0px 0px 0;box-shadow:0 0px 0px 0;float:left;width:15%;">


<button type="submit" id="ac" name="submit">Academic Details</button><br />
 <div  style="width:auto; display:none;float:left;-moz-box-shadow:0 1px 5px rgba(0,0,0,0.3);-webkit-box-shadow:0 1px 5px rgba(0,0,0,0.3);box-shadow:0 1px 5px rgba(0,0,0,0.3);">
  <p id="entry2">kqwjehkla
  dadadas
  d'adsl'sdlasd
  'asd'
  ladsas;;md;ds;sdk;sd
  </p>
  </div>
</form>
<form style="background:none;-moz-box-shadow:0 0px 0px 0;-webkit-box-shadow:0 0px 0px 0;box-shadow:0 0px 0px 0;float:left;width:15%;">


<button type="submit" id="ad" name="submit">Admission Details</button><br />
<div id="entry3" style="width:100%;float:left;-moz-box-shadow:0 1px 5px rgba(0,0,0,0.3);-webkit-box-shadow:0 1px 5px rgba(0,0,0,0.3);box-shadow:0 1px 5px rgba(0,0,0,0.3);">
  <p>kqwjehkla
  dadadas
  d'adsl'sdlasd
  'asd'
  ladsas;;md;ds;sdk;sd
  </p>
  </div>
  
</form>
<form style="background:none;-moz-box-shadow:0 0px 0px 0;-webkit-box-shadow:0 0px 0px 0;box-shadow:0 0px 0px 0;float:left;width:15%;">


<button type="submit" id="fee" name="submit">Fee Details</button><br />
<div id="entry4" style="width:100%;float:left;-moz-box-shadow:0 1px 5px rgba(0,0,0,0.3);-webkit-box-shadow:0 1px 5px rgba(0,0,0,0.3);box-shadow:0 1px 5px rgba(0,0,0,0.3);">
  <p>kqwjehkla
  dadadas
  d'adsl'sdlasd
  'asd'
  ladsas;;md;ds;sdk;sd
  </p>
  </div>
</form>
 
  
 
  
  
 </div>
           
</center>
</div>
<div class="homefooter">
<div class="navbar-inner">

<center>
<font face="Ebrima" class="homefttext">| MIS EMAIL-ID : mis@nitt.edu | | MIS INTERCOM - 3427 |</font>
</center>
</div>
</div>
</body>
</html>
<?php 
}
?>