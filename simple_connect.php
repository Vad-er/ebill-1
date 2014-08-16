<?php
//phpinfo();
$user ='root';
$pass = '';
$db = 'vad';

$conn = mysql_connect('localhost',$user,$pass) or die("Unable to connect");

mysql_select_db($db) ;

$query = "SELECT * FROM public";

$result = mysql_query($query) or die(mysql_error());

while($person = mysql_fetch_array($result)){
	
	echo "<h3>" .$person['NAME'] ."</h3>";
}
?>
echo "Damn Yeah!!!";

<h1> USER form</h1>

<form action ="addvalues.php" method = "post">
	NAME<input type = "text" name ="name" value="" />
	CITY<input type = "text" name ="city" value="" />
	<br>
	<input type ="submit" name="submit" />



</form>


