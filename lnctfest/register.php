
<html>
	<head>
		
		<link href="default.css" rel="stylesheet" media="screen" type="text/css"/>
		<script src="jqminmax.js" type="text/javascript"></script>
	</head>
	<body>
            <div id="header">
				<h1>*Online Judge*</h1><h2>happily judging your solution</h2><br clear="both"/>
			</div>
		<div id="container">
			
			<div id="mainbody">
				<div id="nav">
					<ul>
						<li><a href="index.php">Back To Home Page</a></li>
						
					</ul><br clear="all"/>
				</div>
                            <h1>CONGRATULATION ! !</h1>
                            <h2>
                                YOU HAVE SUCCESSFULLY REGISTERED
                            </h2>
                            <?php
                            
                            $con=  mysql_connect("127.0.0.1","ashwin","1234");
                           
                            $db=  mysql_select_db("register",$con);
                            $username=$_POST["username"];
                            $password=$_POST["passwd"];
                           
                            $emailid=$_POST["email"];
                            $college=$_POST["college"];
                            $country=$_POST["country"];
                            $name=$_POST["name"];
                            $sql="insert into reg values('$name','$username','$password','$college','$emailid','$country','no',0);";
                            $qry=  mysql_query($sql);
                           
                            ?>
				
			</div>
			
		</div>
	</body>
</html>


