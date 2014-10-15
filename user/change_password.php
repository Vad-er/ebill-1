<!-- WORK IN PROGRESS -->
 <?php 
    // ob_start();
 
    require_once("../Includes/session.php");
    include("../Includes/config.php");
    global $con;
    $id=$_SESSION['uid'];

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    if(isset($_POST["change"]) && !empty($_POST["new_password"]))
    {   
        $new_password=test_input($_POST["new_password"]);
        $query  = " UPDATE user SET pass='{$new_password}' WHERE id={$id} ";
        if (!mysqli_query($con,$query))
        {
            die('Error: ' . mysqli_error($con));        
        }
    }
    @header("Location:index.php");   
?> 