<?php
include('connection.php');
if(isset($_POST['update'])){
$password=md5($_POST['password']);
$update="UPDATE login set username='$_POST[username]',password='$password',email='$_POST[email]' where id='$_POST[id]'";
mysql_query($update,$connection);
echo "<script type='text/javascript'>alert('updated successfully!')</script>";
header("refresh:1; url='table.php'");

}
if(isset($_POST['delete'])){
$update1="DELETE from login where id='$_POST[id]'";
mysql_query($update1,$connection);
echo "<script type='text/javascript'>alert('deleted successfully!')</script>";
header("refresh:1; url='table.php'");

}


?>