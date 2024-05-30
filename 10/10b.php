<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    if ($num == 1 || $num == 0) {
      echo "The number $num is neither prime nor not prime";
      return;
    }
    $flag = 0;
    for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
        $flag = 1;
        break;
    }
    }
    if ($flag == 1) 
    echo "The number $num is not a prime number";
    else
    echo "The number $num is a prime number";
  }
  ?>