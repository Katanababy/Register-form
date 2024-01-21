<?php
require('Link.php');

$id = $_GET['id'];


$sql="SELECT * FROM tb_user WHERE id= '$id'";
$result = mysqli_query($link,$sql);

$row= mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
         body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .form-container {
      text-align: left;
      width: 300px;
      padding: 20px; 
      border: 2px solid #ffffff; 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
    }
    
    h1 {
        color: red;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label, input {
      margin: 2px;
      height: 35px;
      line-height: 50px;
      vertical-align: middle;
      font-size: 16px;
    }

    .save-button {
      margin-top: 15px;
      width: 300px;
      height: 40px;
      line-height: 20px;
      vertical-align: middle;
      background-color: #4CAF50;
      color: #ffffff;
      border: 1.5px solid black;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    .save-button:hover {
      background-color: #45a049;
      border-color: #45a049;

    }
      a {
      font-size: 16px;

    }
  </style>
<body>
<div class="form-container">
    <form action="Uploaddata.php" method="post">
    <h1>แก้ไขผู้ใช้งาน</h1>
    <label for="">Id:</label>
        <input type="text" name="id" value=<?php echo $row['id']?>>

        <label for="">Firstname:</label>
        <input type="text" name ="firstname" value=<?php echo $row['firstname']?>>

        <label for="">Lastname:</label>
        <input type="text" name ="lastname" value=<?php echo $row['lastname']?>>

        <label for="">Email:</label>
        <input type="text" name ="email" value=<?php echo $row['email']?>>

        <label for="">Telephone:</label>
        <input type="text" name ="telephone" value=<?php echo $row['telephone']?>>

        <label for="">Address:</label>
        <input type="text" name ="address" value=<?php echo $row['address']?>>

        
        <input type="submit" class="save-button" value="Save">
    </div>
    </form>
</body>
</html>