<?php
require '../dbcon.php';
function getCustomerList (  )
{
    global $con;
    $query = "select * from customer";
    $result  = mysqli_query ($con,$query);
    if($result){
        if(mysqli_num_rows ($result) > 0){
            $row = mysqli_fetch_all ($result,MYSQLI_ASSOC);
            $data = [
                'status'=> 200,
                'message'=> "Customer list fetch successfully",
                'data'=>$row
            ];
            header ("HTTP/1.0 200 Customer list fetch successfully");
           echo json_encode ($data);
        }else{
            $data = [
                'status'=> 404,
                'message'=> "Internal Server Error",
            ];
            header ("HTTP/1.0 500 Internal Server Error");
            echo json_encode ($data);
        }
    }else{
        $data = [
            'status'=> 500,
            'message'=> "Internal Server Error",
        ];
        header ("HTTP/1.0 500 Internal Server Error");
        echo json_encode ($data);
    }
}