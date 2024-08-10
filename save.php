<?php
 $empno=$_POST["eno"];
 $name=$_POST["nm"];
 $email=$_POST["email"];
 $salary=$_POST["sal"];
 $con=new mysqli("localhost","root","","bhopal");
 $qry="insert into employee(empno, name, email, sal) values('$empno','$name','$email','$salary')";
 $con->query($qry);
 $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             *{
        margin: 0px;
        padding: 0px;
     }
        .body{
            background-color: rgb(65, 155, 172);

        }
        .nav a{
            text-decoration: none;
            color: white;
            font-size: 22px;
            padding: 20px;
            font-family:Arial, Helvetica, sans-serif;

        }
        .nav1{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .section{
            color:white;
            display: flex;

            flex-direction: row;
            justify-content: center;
            margin-top: 150px;
            font-style:normal;
            font-size: 30px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>
<body class="body">
    
<?php
      include "navbar.php";
      ?>
    <div class="section">
    <h1>Data Success Insert !!!......</h1>
    
</div>
</body>
</html>