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
    <div class="section">
    <h1>Display Employee Records</h1>
    </div>
    <div class="section2">
    <table border="2" width="750px">
        <tr>
            <th>Emp no</th>
            <th>Name </th>
            <th>Email</th>
            <th>Salary</th>
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
            echo "</tr>";
        }
        $con->close();
        ?>
    </table>
    </div>
    


</body>
</html>