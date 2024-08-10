<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <style>
        .body{
            background-color: rgb(65, 155, 172);

        }
        .section{
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-style:normal;
            font-size: 30px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .section2{
            display: flex;
            flex-direction: row;
            justify-content: center;
            color: white;
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
        }
        .form input{
            font-size: 20px;
            outline: none;
            padding: 2px;
            background: none;
            border-radius: 10px;
        }
        .section2 tr th{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            background-color:rgb(79, 86, 86);
        }
    </style>
   
</head>
  <body class="body">
    
  <?php
    include "navbar.php";
    ?>
    <div class="section">
    <h1>Employee Records</h1>
    </div>
    <div class="section2">
    <table border="2" width="850px">
        <tr>
            <th>Emp no</th>
            <th>Name </th>
            <th>Email</th>
            <th>Salary</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $con=new mysqli("localhost","root","","Bhopal");
        $qry="select * from employee";
        $result=$con->query($qry);
        while($row=$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["empno"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["sal"]."</td>";
         echo "<td>  
                 <a href='edit.php?eno=".$row["empno"]."'>
                 <img src='../images/edit.png' width='30' height='30' >
                 </a>
           </td>";
            
        echo "<td>
           <a href='delete.php?eno=".$row["empno"]."'>
                  <img src='../images/del.png' width='30' height='30' >
                 </a>
              </td>";
       echo "</tr>";  
     }
   ?>
 </tbody>
 </table>
 </div>



 <?php
 if (isset($_GET["update"]))
 {
   echo "<script>"; 
  echo "alert('Data succesfully updated!!!')";
  echo "</script>";
 }
?>







  </body>
</html>