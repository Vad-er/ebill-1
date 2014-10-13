   <!-- WORK IN PROGRESS -->
    <?php 
    include("../Includes/session.php");
    include("../Includes/config.php");
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $id=$_SESSION['uid'];
    $new_password=test_input($_POST["new_password"]);
    
    if(isset($_POST["change"]) && !empty($_POST["change"]))
    {
        $query  = "UPDATE user ";
        $query .= "set pass = {'$new_password'} ";
        $query .= "WHERE id = {$id} ";
        if (!mysqli_query($con,$query))
            {
                die('Error: ' . mysqli_error($con));
            }  
    }
    header("Location:index.php");   
    ?>