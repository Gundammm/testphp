<?php
include("conn/mysqlconn.php");

// define variables and set to empty values
$firstname = $lastname = $birthday = $age = $gender = $tel = $emergency = $email =  $address = $size = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  //$name = trim($_POST["name"]);
  $lastname = test_input($_POST["lastname"]);
  $birthday = test_input($_POST["birthday"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  $tel = test_input($_POST["tel"]);
  $emergency = test_input($_POST["emergency"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $size = test_input($_POST["size"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$birthday."<br>".$age."<br>".$gender."<br>".$tel."<br>".$emergency."<br>".$email."<br>".$address."<br>".$size."<br>";

//insert data
$sql = "INSERT INTO gundam (firstname,lastname,birthday, age, gender,tel,emergency,email,address,size) 
VALUES ('$firstname', '$lastname','$birthday','$age','$gender', '$tel', '$emergency','$email','$address','$size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>