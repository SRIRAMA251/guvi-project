<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email=$_POST["email"];
  $mobileno=$_POST["mobileno"];
  $password=$_POST["password"];
 
  $confrimpassword=$_POST["confrimpassword"];
  $department=$_POST["department"];
 
  // Do something with the form data, such as insert it into a database
  // and return a success message
  $con = mysqli_connect("localhost","root","","project");
  $query="INSERT INTO register(firstname,lastname,email,password,mobileno,department) VALUES ('$firstname','$lastname','$email','$password','$mobileno','$department')";
  $v=mysqli_query($con,$query);
  if($v){
    echo "Thank you for signing up, $firstname!";
}else{
    echo "No!";
}
}
?>

