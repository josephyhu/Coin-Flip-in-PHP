<?php
$stdin = fopen('php://stdin', 'r');
$n = 0;
$heads = 0;
$tails = 0;
$flip;

while ($n < 1 || !is_int($n)) {
  echo 'Enter a positive integer ';
  $n = intval(trim(fgets($stdin)));
}

for ($i = 0; $i < $n; $i++) {
  $flip = rand(0, 1);
  if ($flip === 0) {
    $tails++;
  } else {
    $heads++;
  }
}

echo $n . " flips\n" . "heads: " . $heads . ", tails: " . $tails . "\n";