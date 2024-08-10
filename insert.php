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
            color:black;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 150px;
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
    </style>
</head>
<body class="body">
   <?php
      include "navbar.php";
      ?>
<div class="section">
    <form method="post" action="save.php" class="form">
        <table>
            <h3 style="margin-left:120px ; margin-bottom: 20px;">Insert Employee </h3>
            <tr>
                <td>Enter Employee Id :</td>
                <td><input type="text" name="eno"></td>
            </tr>
            <tr>
                <td>Enter Employee Name :</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td>Enter Employee Email :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Enter Employee Salary :</td>
                <td><input type="text" name="sal"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input style="background-color: rgb(138, 184, 76);padding-left: 10px;padding-right: 10px; padding-top: 5px;padding-bottom: 5px;font-family: Arial, Helvetica, sans-serif;color:black; font-weight: 400;" type="submit" value="Save"></td>
            </tr>

        </table>
    </form>
    </div>
    
</body>
</html>