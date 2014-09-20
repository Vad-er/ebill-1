<?php
    $host='localhost';
    $mysql_user="root";
    $mysql_pwd="";
    $dbms="ebill";
    $con = mysqli_connect($host,$mysql_user,$mysql_pwd,$dbms);
    if (!$con) die('Could not connect: ' . mysql_error());
    mysqli_select_db($con,$dbms)or die("cannot select DB" . mysql_error());
?>