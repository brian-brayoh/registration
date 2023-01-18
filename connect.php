<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$phonenumber=$_POST["phonenumber"];
$password=$_POST["password"];
$gender=$_POST["gender"];

// database connection
$conn= new mysqli('localhost','root','','test');
if($conn->connect_error){
  die("connection failure : ".$conn->connect_error);
else{
  $stmt =$conn->prepare("insert into registration(firstname,lastname,email,phonenumber,password,gender)") values(?,?,?,?,?,?);
    $stmt->blind_param("sssiss",$firstname,$lastname,$email,$phonenumber,$password,$gender);
    $stmt->execute();
    echo "registration successfully....";
    $stmt->close();
    $conn->close();
  }

}
 ?>
