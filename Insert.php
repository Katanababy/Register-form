<?php 
require('Link.php'); //เอาค่าเข้าฐานข้อมูล

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];

//เอาค่าเข้าฐานข้อมูล
$sql ="INSERT INTO tb_user(firstname,lastname,email,telephone,address) VALUES ('$fname','$lname','$email','$telephone','$address')";
$result = mysqli_query($link,$sql);  

if(isset($result)){  
    echo "Save successfully!"; 
    echo"<a href = 'Show_user.php'>
    <br>กลับหน้าโชว์ข้อมูล<a/>";
}else{
    echo "error".mysqli_error($con);

}

?>
