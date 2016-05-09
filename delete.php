<?php
  $id=$_GET["num"];
  $mysqli=new mysqli("localhost","root","","1601");
  $sql="delete from `student` where id='{$id}'";
  $mysqli->query($sql);
?>