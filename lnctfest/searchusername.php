<?php

$con=mysql_connect("127.0.0.1","ashwin","1234");
if(!$con)
	{
		die("unable to connect to the database");
	}
$mydb=mysql_select_db("register",$con);
if(!$mydb)
	{
		die("unable to locate the database");
	}
	
	$username=$_GET["username"];
	$result=mysql_query("select * from reg where username='$username';");
	$dbrec=mysql_fetch_assoc($result);
	
	if($username==$dbrec["username"])
            echo 1;
        else
            echo "";
?>
	


