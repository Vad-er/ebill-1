<!-- NOTE
SINGLE PAGE FORM ALONG WITH VALIDATION
NO PHP LEAKS BACK TO THE INDEX 
 -->
 <?php
require_once("Includes/session.php");
$nameErr = $phoneErr = $addrErr = $emailErr = $passwordErr = $confpasswordErr = "";

$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {   

        // NAME VALIDATION
        // first
        if (empty($_POST["fname"])) 
        {
            $nameErr = "Missing name";
            $flag=1;
        }
        else 
        {
            $fname = $_POST["fname"];
        }
        // last
        if (empty($_POST["lname"])) 
        {
            $nameErr = "Missing name";
            $flag=1;
        }
        else 
        {
            $fname = $_POST["lname"];
        }

        // Phone No validation
        if (empty($_POST["contactNo"])) 
        {
            $phoneErr = "Missing";
            $flag=1;
        }
        else 
        {
            if(is_numeric($_POST['contactNo']))
            {
                $phone = $_POST["contactNo"];
            }
            else
            {
                $phoneErr = "Phone number can contain only numbers";
                $flag=1;
            }
        }

        // Password Validation
        if (empty($_POST["inputPassword"])) 
        {
            $passwordErr = "missing";
            $flag=1;
        }
        else 
        {
            $password = $_POST["inputPassword"];
        }

        // Confirm Password
        if (empty($_POST["confirmPassword"])) 
        {
            $confpasswordErr = "missing";
            $flag=1;
        }
        else 
        {
            if($_POST['confirmPassword'] == $password)
            {
                $confpassword = $_POST["confirmPassword"];
            }
            else
            {
                $confpasswordErr = "not same as password";
                $flag = 1;
            }
        }
        // Address Validation        
        if (empty($_POST["address"])) 
        {
            $addrErr = "Missing";
            $flag=1;
        }
        else 
        {
            $address = $_POST["address"];
        }
        
        // Email validation
        if (empty($_POST["email"])) 
        {
            $emailErr = "Missing";
            $flag=1;
        }
        else 
        {
            if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
            {
                $email = $_POST['email'];                
            }
            else
            {
                $emailErr = "Invalid Mail";
                $flag=1;
            }
        }
           
        // Only if succeed from the validation thourough put   
        if($flag == 0)
        {
            include("Includes/config.php");
            $sql = "INSERT INTO user (`name`,`email`,`phone`,`pass`,`address`)
                    VALUES('$fname $lname','$email','$phone','$password','$address')";
            if (!mysqli_query($con,$sql))
            {
                die('Error: ' . mysqli_error($con));
            }
            header("Location:index.php");
        }
    
    }
?>

<form action="signup.php" method="post" class="form-horizontal" role="form">
    <div class="row form-group">
        <div class="col-md-6">
            <input type="fname" class="form-control" name="fname" id="fname" placeholder="First Name" required>
            <!-- <label><?php echo $nameErr;?></label> -->
        </div>
        <div class="col-md-6">
            <input type="lname" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
            <!-- <label><?php echo $nameErr;?></label> -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="email" class="form-control" id="email" placeholder="Email" required>
            <!-- <label><?php echo $emailErr;?></label> -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" required>
            <!-- <label><?php echo $passwordErr;?></label> -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
            <!-- <label><?php echo $confpasswordErr;?></label><label><?php echo $confpasswordErr;?></label> -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="tel" class="form-control" name="contactNo" placeholder="Contact No." required>
            <!-- <label><?php echo $phoneErr;?></label> -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="address" class="form-control" name="address" placeholder="Address" required>
            <!-- <label><?php echo $addrErr;?></label> -->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>

</form>
