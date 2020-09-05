<?php
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		li{
			list-style: none;
		}
	</style>
</head>
<body bgcolor="lightgrey">


	                <?php
                       
                        echo $_SESSION["un"];

                    ?>

                    <li>
                    <a href="visitors_dashboard.php"></i>DASHBOARD</a>
                </li>
                
 </body>
</html>
