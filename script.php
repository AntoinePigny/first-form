<?php
$points = 0;
if (isset($_GET["q1"])) {
  $points += 1;
}

if ($_GET["q2"] == "c") {
  $points += 1;
}

if ($_GET["q3"] == "d") {
  $points += 1;
}
echo "Tu as $points points !";
