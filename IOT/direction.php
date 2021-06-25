<?php 
include_once 'dbh.php';


if(isset($_POST['l'])){
  $sql ="INSERT INTO `dir`(`direction`) VALUES ('l');";
}
if(isset($_POST['f'])){
  $sql ="INSERT INTO `dir`(`direction`) VALUES ('f');";
}
if(isset($_POST['r'])){
  $sql ="INSERT INTO `dir`(`direction`) VALUES ('r');";
}
if(isset($_POST['s'])){
  $sql ="INSERT INTO `dir`(`direction`) VALUES ('s');";
}
if(isset($_POST['b'])){
  $sql ="INSERT INTO `dir`(`direction`) VALUES ('b');";
}

if (!mysqli_query($conn, $sql)) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
else{
 $result="SELECT * FROM `dir` ORDER BY id DESC;";
     if(!mysqli_query($conn, $result)){
        echo "Error:" . $result . "<br>" . mysqli_error($conn); 
      }
      else{
        header("location: interface.php");
      }
}
  
mysqli_close($conn);