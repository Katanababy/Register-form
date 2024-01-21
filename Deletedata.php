<?php

require('Link.php');
$id = $_GET['id'];


$sql="DELETE FROM tb_user WHERE id='$id'";

$result = mysqli_query($link,$sql);

if($result){
    echo"Delete successfully! <br>";
    echo"<a href = 'Show_user.php'>กลับหน้าโชว์ข้อมูล<a/>";
}else{
    echo "error".mysqli_error($link);
}


?>










