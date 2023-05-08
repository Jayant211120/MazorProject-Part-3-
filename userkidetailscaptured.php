<?php
$servername='localhost';
$username='root';
$password='';
$database='e-commerce';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $number=$_POST['num'];
    $address=$_POST['add'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $radio=$_POST['rdioone'];
    $pincode=$_POST['pin'];
    $textarea=$_POST['textarea'];
    $sql="INSERT INTO `userdetails` VALUES('$name','$mail','$number','$address','$state','$city','$radio','$pincode','$textarea')";
    if(mysqli_query($conn,$sql)){
        header('Location:paymentpage.php');
    }
    else{
        echo"Data is Invalid";
    }
    
}





?>