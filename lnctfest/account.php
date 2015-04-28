
<html>
	<head>
		<link href="default.css" rel="stylesheet" media="screen" type="text/css"/>
		<script src="jqminmax.js" type="text/javascript"></script>
		<script src="default.js" type="text/javascript"></script>
                <style type="text/css">  
                #txt
            {
                 
	margin:0px auto;
	padding:10px 0px 30px 0px;
	border-right:#222 3px solid;
	border-left:#222 3px solid;
	background:whitesmoke;
	text-align:center;
	font-size:larger;
	
	color:teal;
	font-weight:600;
            }
            #begincontest a
            {
                

    margin-left:40%;
     text-decoration: none;
    font-weight:bolder;
    color:teal;
    font-size:large;
    
          }
#begincontest a:hover
{
    color:white;
}
#contentaccount
{
    
    text-decoration: none;
    font-weight:bolder;
    color:teal;
    font-size:large;
    
}
#image
{
    position: fixed;
}
#tb1
{
    font-family:cursive;
    font-size:large;
    text-align:left;
}
            
            </style>
	</head>
	<body>
            <div id="header">
				<h1>*Online Judge*</h1><h2>happily judging your solution</h2>
                                
			</div>
		<div id="container">
			
			<div id="mainbody">
				<div id="nav">
                                    <?php
                                    session_start();
if(isset($_SESSION["member"]))
    
{
    $con=  mysql_connect("127.0.0.1","ashwin","1234");
     $db=  mysql_select_db("register",$con);
     $username=$_SESSION["username"];
     $password=$_SESSION["password"];
      $result= mysql_query("select * from reg where username='$username' and password='$password' ");
            $rst=  mysql_fetch_assoc($result);
    
?>
					<ul>
                                            <li><a href="home.php">Home</a></li>
						<li><a href="Account.php">Account</a></li>
                                                <li><a href="contest.php">Contest</a></li>
						<li><a href="problems.php">Problems</a></li>
						<li><a href="submission.php">Submissions</a></li>
						<li><a href="status.php">Status</a></li>
						<li><a href="about.html">About</a></li>
					</ul><br clear="all"/>
                                      
				</div>
                                
				<div id="contentaccount">
                                                        <?php

                            $emailid=$rst["emailid"];
                            $college=$rst["college"];
                            $country=$rst["country"];
                            $name=$rst["name"];
                                    echo'<div id="image">';
                                    echo '<img src="account.jpg">';
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name";
                                    echo'</div>';
                                    echo "<br><br><br>";
                                   
                                     echo "<br>";
                                     echo     '<table id="tb1" align="center" cellspacing="15">';
                                        echo "<tr>"
                                        . "   <th>Username : </th>"
                                         .  " <th> $username </th>"
                                        ."</tr>"
                                                
                                        ."<tr>"
                                         ."   <th>About Me : </th>"
                                         . "  <th>           </th>"
                                        ."</tr>"
                                        ."<tr>"
                                         ."   <th>Country : </th>"
                                          ."  <th> $country </th>"
                                        ."</tr>"
                                                ."<tr>"
                                         ."   <th>State : </th>"
                                          ."  <th> Madhya Pradesh </th>"
                                        ."</tr>"
                                                ."<tr>"
                                         ."   <th>City : </th>"
                                          ."  <th> Bhopal </th>"
                                        ."</tr>"
                                                ."<tr>"
                                         ."   <th>Motto : </th>"
                                          ."  <th>    </th>"
                                        ."</tr>"
                                                ."<tr>"
                                         ."   <th>Student/Professional : </th>"
                                          ."  <th> Student </th>"
                                        ."</tr>"
                                                ."<tr>"
                                         ."   <th>Link : </th>"
                                          ."  <th>   </th>"
                                        ."</tr>"
                                        ."<tr>"
                                         ."   <th>Institution : </th>"
                                          ."  <th> $college </th>"
                                        ."</tr>"
                                        ."<tr>"
                                         ."   <th> Email Id : </th>"
                                         . "  <th> $emailid </th>"
                                      . " </tr>"
                                    ."</table>";                              
                                    }
                                    
?>
                                   
				</div>
			</div>

                
			
		</div>
	</body>
</html>
 
