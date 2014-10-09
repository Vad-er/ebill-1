<?php 

    function retrieve_bills_generated($id) {
        include("config.php");
        $query  = "SELECT user.name AS user, bill.bdate AS bdate , bill.units AS units , bill.amount AS amount ";
        $query .= ", bill.ddate AS ddate, bill.status AS status ";
        $query .= " FROM user , bill ";
        $query .= " WHERE user.id=bill.uid AND aid={$id} ";
        $result = mysqli_query($con,$query);
        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }

        return $result;
    }

    function retrieve_bill_data(){
        include("config.php");
        $query = "SELECT curdate() AS bdate , adddate( curdate(),INTERVAL 30 DAY ) AS ddate , user.id AS uid , user.name AS uname FROM user";
        // echo $query;
        $result = mysqli_query($con,$query);
        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        return $result;
    }

    function retrieve_complaints_history($id)
    {
        include("config.php");
        $query  = "SELECT complaint.id AS id , complaint.complaint AS complaint , complaint.status AS status , user.name AS uname ";
        $query .= "FROM user , complaint ";
        $query  .= "WHERE complaint.uid=user.id AND status='NOT PROCESSED' AND complaint.aid={$id} ";
        $query  .= "ORDER BY complaint.id desc  ";
        $result = mysqli_query($con,$query);
        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }

        return $result;

    }

    function retrieve_users_detail()
    {
        include("config.php");
        $query  = "SELECT * FROM user";
        $result = mysqli_query($con,$query);
        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        return $result;

    }
 ?>
    
