<?php
$empno=$_GET["eno"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
    <style> 

    .body{
            background-color: rgb(65, 155, 172);

        }
       
        .section{
            
             display: flex;
            flex-direction: row;
            justify-content: center; 
            margin-top: 50px;
            font-style:normal;
            font-size: 25px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .form{
            border: 2px solid black;
            padding: 20px;
            background-color: white;
            padding-bottom: 40px;
            border-radius: 20px;
            width: 600px;;
            padding-left:100px;
        }
        
        .form tr td input{
            font-size: 20px;
            outline: none;
            padding: 2px;
            background: none;
            border-radius: 10px;
        }
        </style>
</head>
<body class="body">
<?php
      include "navbar.php";
      ?>
<div class="section">
    
<form method='post' action='updatesave.php' class='form'>
<table>
    <?php 
      $con= new mysqli("localhost", "root", "", "bhopal");
      $sql="select *  from employee where empno=$empno";
      $result=$con->query($sql);
      while($row=$result->fetch_assoc())
      {
        echo "<h1 style='margin-left:30px ; margin-bottom: 20px;'>Edit Your Information</h1>";
        echo "<tr>";
         echo "<td> Employee Id : </td>";
         echo "<td>  <input type='text' value='".$row["empno"]."' name='eno'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> name : </td>";
        echo "<td><input type='text' value='".$row["name"]."'  name='nm'></td>";
       echo "</tr>";
       echo "<tr>";
       echo "<td> Email : </td>";
       echo "<td><input type='text' value='".$row["email"]."'  name='email'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Salary : </td>";
      echo "<td><input type='text' value='".$row["sal"]."'  name='sal'></td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> </td>";
     echo "<td><input style='background-color: rgb(138, 184, 76);padding-left: 10px;padding-right: 10px; padding-top: 5px;padding-bottom: 5px;font-family: Arial, Helvetica, sans-serif;color:black; font-weight: 400;' type='submit' value='update'></td>";
    echo "</tr>";
     
      }
   ?>
   </table>
  </form>
   </div>
    </div>
</body>
</html>





