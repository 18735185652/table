<?php
  $attr=$_GET["key"];
  $val=$_GET["value"];
  $id=$_GET['pos'];
  $mysqli=new mysqli("localhost","root","","1601");
  $sql="update `student` set {$attr}='{$val}' where id='{$id}'";
  $mysqli->query($sql);
?>