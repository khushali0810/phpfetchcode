<?php
 include '../Connection.php';

 $q= "select * from order_table " ;
                $query = mysqli_query($conn, $q);
                $arr = array();
                while($res = mysqli_fetch_assoc($query)){
                	$arr[] = $res;
                }

if($query)
  {
  	$mess ="done";
  }
  else{
  	$mess ="not done";
  }

echo json_encode($arr);

 ?>