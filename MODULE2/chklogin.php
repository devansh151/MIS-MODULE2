<?php
session_start();
include('databaseconnect.php');
if(isset($_POST['submit']))
{
	
	$unm=$_POST['username'];
	$pwd=$_POST['password'];
	$q='select * from login where username="'.$unm.'" AND password="'.$pwd.'" ';
	$res=mysql_query($q) or die(mysql_error());
	$n=mysql_num_rows($res);
	if($n>0)
	{
			$_SESSION['success']=true;
			$_SESSION['user']=$unm;
			header('location:home.php');
		
			
	}
	else
	{
	
		$_SESSION['fail']=true;
			header('location:index.php');
	}

}

?>