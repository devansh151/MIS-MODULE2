<?php 
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mis.nitt.edu</title>
<link rel="stylesheet" href="css/bkno.css" type="text/css" />
<link rel="stylesheet" href="css/bqgo.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


<script src="js/jquery-1.8.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
       <script src="js/scripts.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
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
                        <a class="home" href="http://www.nitt.edu" rel="tooltip" data-placement="bottom" data-original-title="NITT Site"></a>
                    </div>
                </div>
            </div>
        </div>
<div class="register-container container">
            <div class="row">
                <div class="register span6">
<form action="chklogin.php" method="post">
<h2>Login to <span class="red"><strong>i MIS</strong></span></h2>
<label for="Roll No">ROLL NO</label>
<input type="text" id="username" name="username" placeholder="Rollno"/><br /><br />
<label for="Password">PASSWORD</label>
<input type="password" id="password" name="password" placeholder="password"/><br /><br />
<button type="submit" name="submit">Login</button><br />
<?php if(isset($_SESSION['fail'])) echo '<font face="Ebrima" color="#eb4141">Wrong username/password.. Try again.</font>';?>

</form>

  </div>
 </div>
            </div>
        </div>
        
        
        <div class="indexfooter">
<center>
<font face="Ebrima" class="indexfttext">| National Institute of Technology Tiruchirappalli-620 015, Tamil Nadu, INDIA | | copyright &copy; web'DEV' |</font>
</center>
</div>

</body>
</html>