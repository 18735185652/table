<?php
  $order=$_GET['order'];
  $mysqli=new mysqli("localhost","root","","1601");
  $sql="select * from student order by {$order}";
  $result=$mysqli->query($sql);
  $arr=$result->fetch_all(MYSQLI_ASSOC);
  echo json_encode($arr);
?>