<!-- Write a PHP script to keep track of number of times the web page has been access. 
[Use Cookies] -->

<?php
    if(isset($_COOKIE['cnt']))
    {
        $x=$_COOKIE['cnt'];
        $x=$x+1;
        setcookie('cnt',$x);
        echo "you accessed this page $x times";
    }
    else
    {
        setcookie('cnt',1);
        echo "you accessed this page 1st  time";
    }
  

?>