<?php
echo '演習問題'.'<br>';
// 問題1
for ($i= 100;$i > 0;$i--){
  echo $i.'<br>';
}

echo'<br>'.'問題2'.'<br>';
for($i = 1;$i <10; $i++) {
  echo $i * 3 .' ';
}

echo'<br>'.'問題3'.'<br>';
for ($c = 1; $c <= 100; $c++) {
  if ($c % 3 === 0 && $c % 5 === 0) {
      echo 'FizzBuzz';
  } elseif ($c % 5 === 0) {
      echo 'Buzz';
  } elseif ($c % 3 === 0) {
      echo 'Fizz';
  } else {
      echo $c;
  }
  echo '<br>';
}

echo'<br>'.'問題4'.'<br>';
for ($i = 1; $i <= 100; $i++) {
  echo $i.',';
  if ($i % 10 === 0) {
      echo '<br>';
  }
}
echo'<br>'.'問題5'.'<br>';
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
// Aの個数
$A = 0;
foreach($alpha as $i) {
  if($i = 'A') {
    $A++;
  }
}

echo'<br>'.'問題6'.'<br>';
$eng = 90;
$math = 40;
$sum = $eng + $math;

if ($eng >= 60 && $math >= 60 && $sum >= 140) {
    echo '合格です!';
} else {
    echo '残念です!';
}
echo'<br>'.'問題7'.'<br>';
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
      $sum = $i * $j . ',';
      echo $sum;
  }
  echo '<br>';
}
echo'<br>'.'問題8'.'<br>';
for($i=2; $i<100; $i++){
  for($s=floor($i/2); $i%$s!=0; $s--);
    if ($s==1) {
      echo $i.',';
     }
}









