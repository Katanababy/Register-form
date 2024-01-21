<?php
require('Link.php');

$sql = "SELECT  /*query หรือเรียกว่าการกรองข้อมูลเพื่อหาค่ามาแสดงในshow user*/ 
tb_user.id,
tb_user.firstname,
tb_user.lastname,
tb_user.email,
tb_user.telephone,
tb_user.address
FROM 
tb_user";
$result = mysqli_query($link,$sql);

?>


<!-- ถึงตรงนี้จ้าาาาาาาาา -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid black;
    }

    th, td {
        padding: 15px;
        text-align: left; 
        font-family: Arial, sans-serif;
    }

    th {
    
        background-color: #f2f2f2;
    }

    a {
        font-size: 16px;
        line-height: 20px;
    }
</style>

<title>Test</title>
</head>
<body>

<table>
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Address</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tbody>
            <tr>
                <td>
                    <?= $row['id'] ?>
                </td>
                <td>
                    <?= $row['firstname'] ?>
                </td>
                <td>
                    <?= $row['lastname'] ?>
                </td>
                <td>
                    <?= $row['email'] ?>
                </td>
                <td>
                    <?= $row['telephone'] ?>
                </td>
                <td>
                    <?= $row['address'] ?>
                </td>

                <td><a href="Edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
        
                    <br><a href="Deletedata.php?id=<?php echo $row['id']; ?>">Delete</a></td>

            </tr>
        </tbody>
    <?php } ?>

</table>
    <br>
    <a href="Input.html">Add user</a>
</body>

</html>

</body>
</html>




