<?php
  $CtoK = $_GET["angkapertama"] + 273;
  $CtoF = 9/5* $_GET["angkapertama"] + 32;
  $CtoR = 4/5* $_GET["angkapertama"];

  if($_GET["suhu"] == "3") {
    echo $CtoR;
  } elseif ($_GET["suhu"] == "2") {
    echo $CtoF;
  } elseif ($_GET["suhu"] == "1") {
    echo $CtoK;
  } else {
    echo "tidak ada";
  }

?>
