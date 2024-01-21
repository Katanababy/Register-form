<?php

require('Link.php');
$id = $_POST['id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$address=$_POST['address'];


$sql="UPDATE tb_user SET firstname = '$fname',lastname = '$lname',email 
= '$email',telephone = '$telephone',address = '$address' 
WHERE id='$id'";

$result = mysqli_query($link,$sql);

if($result){
    echo"แก้ไขหรืออัพเดตสำเร็จ <br>";
    echo"<a href = 'Show_user.php'>กลับหน้าโชว์ข้อมูล<a/>";
}else{
    echo "error".mysqli_error($link);
}


?>