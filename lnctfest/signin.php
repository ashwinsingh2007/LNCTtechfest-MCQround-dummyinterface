
<html>
	<head>
		<link href="default.css" rel="stylesheet" media="screen" type="text/css"/>
		<script src="jqminmax.js" type="text/javascript"></script>
		<script src="default.js" type="text/javascript"></script>
	</head>
	<body>
            <div id="header">
				<h1>*Online Judge*</h1><h2>happily judging your solution</h2>
                                
			</div>
		<div id="container">
			
			<div id="mainbody">
				<div id="nav">
					<ul>
                                            <li><a href="index.php">Home</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="teamlist.php">Teams</a></li>
						<li><a href="problems.php">Problems</a></li>
						<li><a href="submission.php">Submissions</a></li>
						<li><a href="status.php">Status</a></li>
						<li><a href="about.html">About</a></li>
					</ul><br clear="all"/>
				</div>
				<div id="content">
        <?php
        
        
        if(isset($_GET["submit"]))
       
        {
          
            $con=  mysql_connect("127.0.0.1","ashwin","ashwin");
          
        $mydb=mysql_select_db("register",$con);
        $username=$_POST["username"];
        $password=$_POST["passwd"];
            
            $result= mysql_query("insert into values('ashwin')");
            $rst=  mysql_fetch_assoc($result);
            if($rst==false)
            {
                echo "Wrong Username or Password";
            }
            else
            {
                $us=$rst["name"];
         session_start();
                $_SESSION['member']=$us;
                $_SESSION["username"]=$rst["username"];
                $_SESSION["password"]=$rst["password"];
            header('Location: bugs.php');
            exit();
            }
           mysql_close($con);
        }
        ?>
					
				</div>
			</div>
			
		</div>
	</body>
</html>
 
