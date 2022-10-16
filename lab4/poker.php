<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poker</title>
  <style>
    .spades, .clubs {
      color: black;
    }
    .hearts, .diams {
      color: red;
    }
  </style>
</head>
<body>
    <h1>ไพ่ที่ได้</h1>
<?php
$suit = ['spades','clubs','hearts','diams'];
$score = explode(',', 'A,2,3,4,5,6,7,8,9,10,J,Q,K');
$deck = [];
foreach($score as $i) {
    foreach($suit as $j) {
        $deck[] = [$i, $j];
    }
}
$cards = array_rand($deck, 2);
$card1 = $deck[$cards[0]];
$card2 = $deck[$cards[1]];
echo "<h1>";
// var_dump ($card1)
echo "<span class='{$card1[1]}'>";
echo "{$card1[0]}&{$card1[1]};";
echo "</span>";
echo " + ";
// var_dump ($card2)
echo "<span class='{$card2[1]}'>";
echo "{$card2[0]}&{$card2[1]};";
echo "</span>";
echo "</h1>";
?>
</body>
</html>