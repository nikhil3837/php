<!-- Write a PHP script to keep track of number of times the web page has been access. 
[Use session]  -->

<html>
<head>
<title> Number of times the web page has been viited.</title>
</head>
<body>
<?php
                session_start();
                if(isset($_SESSION['count']))
                $_SESSION['count']=$_SESSION['count']+1;
                                else
                                $_SESSION['count']=1;
                echo "This page is accessed ".$_SESSION['count']." times";
?>
</body>
</html>