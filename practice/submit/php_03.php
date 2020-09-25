<?php
//Q1.$nameが自分の名前だったら「私は志帆です」、違う場合は「志帆ではありません」と表示

$name = "yamada";
if ($name == "志帆"){
  echo "私は志帆です。";
}else {
  echo "志帆ではありません。";
}

//Q2.for文を使って1から10000までの合計の値を表示

for($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total;

//Q3.$fruitsに好きなフルーツを5つ代入し、foreach分で順番に出力する

$fruits = array("peach","apple","mango","grape","lemon");
foreach($fruits as $fruit){
  echo "" . $fruit;
  echo "\n";
}

//Q4.【応用】バグの修正　1-100の間の5の倍数のみ表示

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}









 ?>
