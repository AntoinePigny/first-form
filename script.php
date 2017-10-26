<?php
$points = 0;
if (isset($_GET["q1"])) {
  $points ++;
}

if ($_GET["q2"] == "c") {
  $points ++;
}

if ($_GET["q3"] == "d") {
  $points ++;
}

require_once("head.html");
if ($points == 1) {
  echo "<h3>Tu as $points point !</h3>";
  # code...
} else {
  echo "<h3>Tu as $points points !</h3>";
}
require_once("foot.html");
