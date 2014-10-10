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

    function retrieve_admin_stats($id)
    {
        include("config.php");
        $query1  = " SELECT count(id) AS unprocessed_bills FROM bill  WHERE status = 'PENDING'  AND aid = {$id} ";
        $query2  = " SELECT count(id) AS generated_bills FROM bill  WHERE aid = {$id} " ;
        $query3  = " SELECT count(id) AS unprocessed_complaints from complaint where status='NOT PROCESSED' AND aid = {$id} ";
        // echo $query;
        
        $result1 = mysqli_query($con,$query1);
        if($result1 === FALSE) {
            echo "FAILED1";
            die(mysql_error()); // TODO: better error handling
        }

        $result2 = mysqli_query($con,$query2);
        if($result2 === FALSE) {
            echo "FAILED2";
            die(mysql_error()); // TODO: better error handling
        }

        $result3 = mysqli_query($con,$query3);
        if($result3 === FALSE) {
            echo "FAILED3";
            die(mysql_error()); // TODO: better error handling
        }

        return array($result1,$result2,$result3);
    }

    function retrieve_users_defaulting($id){
        include("config.php");
        $query1  = " SELECT count(id) AS unprocessed_bills FROM bill  WHERE status = 'PENDING'  AND aid = {$id} ";
        $query2  = " SELECT count(id) AS generated_bills FROM bill  WHERE aid = {$id} " ;
    }

 ?>