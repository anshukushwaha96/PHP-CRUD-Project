<?php
 $empno=$_POST["eno"];
 $name=$_POST["nm"];
 $email=$_POST["email"];
 $salary=$_POST["sal"];
 $con=new mysqli("localhost","root","","bhopal");
 $qry="update employee set name='$name', email='$email', sal='$salary' where empno='$empno'";
 $con->query($qry);
 $con->close();
 header("location: update.php?update=yes");
?>