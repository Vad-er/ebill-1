<?php
include 'config.php';

$name = $_POST['name'];                             //taking values from the form
$city = $_POST['city'];                             //taking values from the form

if(!$_POST['submit']){
	echo "fill out the form";
	header('Location:config.php');

}else{
	mysql_query("INSERT INTO public (`NAME`,`CITY`)   //the database coloumns
	VALUES('$name','$city')")or die(mysql_error());   //inputing into table

	echo "user has been added";
	header('Location:simple_connect.php');
}
	

?>
