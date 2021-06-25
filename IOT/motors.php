<?php 
include_once 'dbh.php';

$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];

if(isset($_POST['save'])){
$sql ="INSERT INTO moters VALUES("
        . "$m1,$m2,$m3,$m4,$m5,$m6);";

if (!mysqli_query($conn, $sql)) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
else{
  header("location: interface.php");
}
}

if(isset($_POST['run'])){
 
  $result="SELECT * FROM `run` ORDER BY id DESC;";

    if($result=='1'){
      $re="INSERT INTO `run`(`running`) VALUES(0);";
    }else{
      $re="INSERT INTO `run`(`running`) VALUES(1);";
    }
  }
  if(!mysqli_query($conn, $re)){
    echo "Error:" . $re . "<br>" . mysqli_error($conn); 
  }else{
    $sql="INSERT INTO `moters` (`moter1`, `moter2`, `moter3`, `moter4`, `moter5`, `moter6`) VALUES($m1,$m2,$m3,$m4,$m5,$m6);";

    if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 
    else{
    header("location: interface.php");
}
  }


mysqli_close($conn);

