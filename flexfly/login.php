<?php
$email = $_POST ['email'];
$password = $_POST ['[password]'];
//connect
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
  die('connection Failed : ' .$conn->connect_error);
}
else{
  $stmt = $conn->prepare("insert into sign(email, password)
  value(?,?)");
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  echo "login success";
  $stmt->close();
  $conn->close();
}
?>