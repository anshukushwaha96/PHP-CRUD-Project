
<?php 
 $empno=$_GET["eno"];

 $con= new mysqli("localhost", "root", "", "bhopal");

 $qry="delete from employee where empno=$empno";

 $con->query($qry);

 $con->close();

 header("location: update.php");

?>