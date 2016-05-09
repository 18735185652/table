<?php
  $id=$_GET["num"];
  $mysqli=new mysqli("localhost","root","","1601");
  $sql="insert into `student`(`id`) values ('{$id}')";
  $mysqli->query($sql);
?>