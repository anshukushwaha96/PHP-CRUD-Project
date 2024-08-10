<?php
if(isset($_POST["submit"]))
{
$empno=$_POST["eno"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body{
            background-color: rgb(65, 155, 172);

        }
         .form{
            margin-top: 50px;
            font-size: 22px;
            width: 460px;
            border: 2px solid black;
            padding: 20px;
            font-family:sans-serif;
            margin-left:500px;
            background-color: white;
            padding-bottom: 40px;
            border-radius: 20px;
            margin-bottom: 50px;
        } 
       .form input{
           
            font-size: 20px;
            outline: none;
            padding: 8px;
            background: none;
            border-radius: 10px;
        }
        .form button{
            font-size: 20px;
            outline: none;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            background: none;
            border-radius: 10px;
            background-color: rgb(138, 184, 76);
            font-family: Arial, Helvetica, sans-serif;
            color:black; 
            font-weight: 400;
        }
        .section2{
            margin-top: 50px;
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;

        }
        .section2 tr td {
            padding: 10px;
            font-size: 22px;
            background-color: rgb(49, 128, 144);
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
    
    <form method="post" action="search.php" class="form">
        <table>
            <h3 style="margin-left:120px ; margin-bottom: 20px;">Search Employee Id </h3>
            <tr>
                <td>Enter Employee Id :</td>
                <td><input type="text" name="eno"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>

        </table>
    </form>
    <hr size="5" color="black">
    <div class="section2">
        <?php 
        if (isset($_POST["submit"]))
        {
        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Employee Id</th>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Salary</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

 
    $con=new mysqli("localhost","root","","bhopal");
    $qry="select * from employee where empno=$empno";
    $result=$con->query($qry);
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["empno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["sal"]."</td>";
       echo "</tr>";
    }
}
?>
 </tbody>
 </table>
 </div>
</body>
</html>