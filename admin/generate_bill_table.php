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
                $result = retrieve_bill_data();
                // Initialising #
                $counter = 1;
                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <form action="generate_bill.php" method="post">
                            <td height="40"><?php echo $counter ?></td>

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
                <?php
                $counter = $counter +1;
                }
                ?>
            </tbody>                
        </table>

    </div><!-- ./table-responsive -->
                                        