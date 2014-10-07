<!-- email = email i.e one and the same thing -->
<!-- convert to mysqli -->
<?php  
    session_start();
    $logged = false;
    //checking if anyone(admin/email)is logged in or not
    if(isset($_SESSION['logged']))
    {
        if ($_SESSION['logged'] == true)
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
        require_once("config.php");
        if (isset($_POST['email']) && isset($_POST['pass']))
        {
            $email=$_POST['email'];
            $password=$_POST['pass'];            
            // some prereq-safeguards for the purpose of DB searching ->
            $email = stripslashes($email);
            $email = mysqli_real_escape_string($con,$email);
            $password = stripslashes($password);
            $password = mysqli_real_escape_string($con,$password);
            
            //DB HAS 2 TABLES ADMIN AND USER BOTH HAVING THEIR OWN ATTRIBUTES
            //EMAIL AND PASSWORD      
            // user       
            $sql = "SELECT * FROM user WHERE email='$email' AND pass='$password' ";
            $result = mysqli_query($con,$sql);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $_SESSION['user'] = $row['name'];
                $_SESSION['logged']=true;
                $_SESSION['uid']=$row['id'];
                $_SESSION['email'] = $email;
                $_SESSION['account']="user";
                header("Location:user/index.php");
            }  
            // admin
            $sql = "SELECT * FROM admin WHERE email='$email' AND pass='$password' ";
            $result = mysqli_query($con,$sql);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $_SESSION['logged']=true;
                $_SESSION['email'] = $email;
                $_SESSION['aid']=$row['id'];
                $_SESSION['account']="admin";
                header("Location:admin/index.php");
            }

        }
    }
?>