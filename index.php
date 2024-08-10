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
       
        .section{
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 150px;
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
        .section3{
            display: flex;
            flex-direction: row;
            justify-content: center;
            color: white;
            font-style:normal;
            
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .section3 a{
            text-decoration: none;
            color: white;
            font-size: 25px;
        }
        .section3 button{
            background-color: rgb(138, 184, 76);
            border: none;
            padding: 10px;
            margin-top: 30px;
        }
        
    </style>
</head>
<body class="body">
<?php
      include "navbar.php";
      ?>
    </div>
<div class="section">
    <h1>Welcome To PHP CRUD Operation</h1>
    
</div>
<div class="section2">
    <p>CRUD operations stand for Create, Read, Update, and Delete—essential operations for managing data in applications</p>
</div>
<div class="section3">
    <button><a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete">Read More</a></button>
</div>
</body>
</html>