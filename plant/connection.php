 <?php


 $conn = mysqli_connect("localhost", "root", "", "system");
 if (!$conn){
  die("connection error");
 }
 else
 {
  echo "connected successfully";
 }

?>

