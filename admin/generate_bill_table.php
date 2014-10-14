<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>USER</th>
                <th>UNITS</th>
                <th>BILL DATE</th>
                <th>DUE DATE</th>
                <th>GENERATE</th>                                        
            </tr>
        </thead>
        <tbody>
            <?php 
            $query1 = "SELECT COUNT(*) FROM user";
            $result1 = mysqli_query($con,$query1);
            $row1 = mysqli_fetch_row($result1);
            $numrows = $row1[0];
            include("paging1.php");                       
            $result = retrieve_bill_data($offset, $rowsperpage);

            while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <form action="generate_bill.php" method="post" name="form_gen_bill" onsubmit="return checkInp()">
                        <td height="40"><?php echo $row['uid'] ?></td>

                        <input type="hidden" name="uid" value=<?php echo $row['uid'] ?> >
                        <input type="hidden" name="uname" value=<?php echo $row['uname'] ?> >
                        
                        <td>
                            <?php echo $row['uname'] ?>
                        </td>
                        <td>                                                
                            <input class="form-control" type="tel" name="units" placeholder="ENTER UNITS">
                        </td>
                        <td>
                            <?php echo $row['bdate'] ?> 
                        </td>
                        <td>
                            <?php echo $row['ddate'] ?>
                        </td>
                        <td>
                            <button type="submit" name="generate_bill" class="btn btn-success form-control">GENERATE BILL  </button>
                        </td>
                    </form>
                </tr>                
                <?php } ?>
            </tbody>                
        </table>
        <?php include("paging2.php");  ?>
    </div><!-- ./table-responsive -->
    
<script>
    function checkInp()
    {
          var x=document.forms["form_gen_bill"]["units"].value;
          if (isNaN(x)) 
          {
            alert("Must input numbers");
            return false;
          }
    }
</script>