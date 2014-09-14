<!-- email = email i.e one and the same thing -->
<?php  
    session_start();
    $logged = false;
    
    //checking if anyone(admin/email)is logged in or not
    if(isset($_SESSION['logged']))
    {
        if ($_SESSION['logged']==true)
        {
            $logged = true ;
            $email = $_SESSION['email'];
        }
    }
    else
        $logged=false;

    if($logged != true)
    {
        $email = "";
        include "config.php";
        if (isset($_POST['email']) && isset($_POST['pass']))
        {
            $email=$_POST['email'];
            $password=$_POST['pass'];
            // for the purpose of DB searching ->
            $email = stripcslashes($email);
            $email = mysql_real_escape_string($email);
            $password = stripslashes($password);
            $password = mysql_real_escape_string($password);
            // <-

            //DB HAS 2 TABLES ADMIN AND USER BOTH HAVING THEIR OWN ATTRIBUTES
            //EMAIL AND PASSWORD 
            $sql = "SELECT * FROM admin WHERE email='$email' AND pass='$password' ";
            $result = mysql_query(sql);
            $count = mysql_num_rows($result);
            if ($count == 1) {
                $_SESSION['logged']=true;
                $_SESSION['user'] = $username;
                $_SESSION['account']="admin";
            }

            $sql = "SELECT * FROM user WHERE email='$email' AND pass='$password' ";
            $result = mysql_query(sql);
            $count = mysql_num_rows($result);
            if ($count == 1) {
                $_SESSION['logged']=true;
                $_SESSION['user'] = $username;
                $_SESSION['account']="user";
            }            
            }
        }
    }

?>