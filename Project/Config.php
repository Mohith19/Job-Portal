<?php

$_server='localhost';
$username='root';
$password='';
$database='test_website_db';

$conn=mysqli_connect($_server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
session_start();
if(isset($_POST['jobs'])){
  
    $cname=$_POST['cname'];
    $_pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $jobs="INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$_pos','$Jdesc','$skills','$CTC')";
      if(mysqli_query($conn,$jobs)){
        header('location:index.php');
    } else {
        echo "Error: Could not able to execute $sql." .mysqli_error($conn);
    } 
}
if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $sql = "INSERT INTO `candidates`( `name`, `apply`, `qual`, `year` ) VALUES ('$name','$apply','$qual','$year')";
    mysqli_query($conn, $sql);
}
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `user`( `name`, `email`, `password`, `number` ) VALUES ('$name','$email','$password','$number')";
        if(mysqli_query($conn,$sql)){
            header('location:login.php');
        } else {
            echo "Error: Could not able to execute $sql." .mysqli_error($conn);
        }
    }

    if(isset($_POST['Login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $sql="INSERT INTO `user`(`email`,`password`) VALUES ('$email','$password')";
        if(mysqli_query($conn,$sql)){
            echo "";
        } else {
            echo "Error: Could not able to execute $sql." .mysqli_error($conn);
        }
    }



?>