<?php
//phpinfo();
$user ='root';					//default username for xampp user	
$pass = '';					//default password for xampp user
$db = 'vad';					// primitive databases with only 2 coloumns name and city

$conn = mysql_connect('localhost',$user,$pass) or die("Unable to connect");

mysql_select_db($db) ;				//selection of the 'vad' database

$query = "SELECT * FROM public";

$result = mysql_query($query) or die(mysql_error());

while($person = mysql_fetch_array($result)){	// takes the values of databases into array
	
	echo "<h3>" .$person['NAME'] ."</h3>";
}
?>
echo "Damn Yeah!!!";

<h1> USER form</h1>

<form action ="addvalues.php" method = "post">			//addvalues is the writing script
	NAME<input type = "text" name ="name" value="" />
	CITY<input type = "text" name ="city" value="" />
	<br>
	<input type ="submit" name="submit" />



</form>


