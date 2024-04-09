<?php
include_once('dbcon.php');

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mil = $_POST['mil'];
  $eng = $_POST['eng'];
  $tlhs = $_POST['tlhs'];
  $math = $_POST['math'];
  $gsc = $_POST['gsc'];
  $ssc = $_POST['ssc'];
  
  $mark = $mil + $eng + $tlhs + $math + $gsc + $ssc += $_POST['mark'];

// Data insert into table 
   $sql = "INSERT INTO `marksheet` (name, mil, eng, tlhs, math, gsc, ssc, mark) VALUES ('$name', '$mil', '$eng', '$tlhs', '$math', '$gsc', '$ssc', '$mark');";
  
  if (mysqli_query($dbcon, $sql)) {
    echo '<script type="text/javascript">';
    echo 'window.location.href ="index.php";';
    echo '</script>';
  } else {
    echo "Error: " .$sql."<br>".mysqli_error($dbconn);
  }
}

?>
