<?php
//Q1引数に数値を指定して実行すると数値を２倍にして返す関数
function multiply($number){
  $result = $number*2;
  return $result;
}
echo multiply(10);
echo "\n";
//resultを使わないver
function multiply2($number){
  return $number*2;
}
echo multiply2(100);
echo "\n";

//Q2仮引数$a,$bを足した結果を返す関数
function sum($a,$b){
  return $a + $b;
}
echo sum(5,10);
echo "\n";

//Q3配列$arrの仮引数を持ち、数値が入った配列arrayを渡すと要素すべてをかけた結果を返す関数
function mulutiply_array($arr){
$result = 1;
foreach ($arr as $i){
  $result *= $i;
}
 return $result;
}
$arr = array(1,3,5,7,9);
echo mulutiply_array($arr);
echo "\n";

//Q4応用　配列の中で一番大きい値を返すmay＿array関数を完成させる
function max_number($arr){
$max_number = $arr[0];
foreach ($arr as $i) {
  if($max_number < $i){
    $max_number = $i;
  }
}
return $max_number;
}
//仮引数に渡す配列を（1,2,5,6,7）とする
$arr = array(1,2,5,6,7);
echo max_number($arr);
echo "\n";

//Q5次のビルトイン関数の用途・使い方を調べ、実際に使ってみる

// strip_tags【用途】文字列からHTMLおよびphpタグを取り除く
$tag = "<p>Hello world!</p>";
echo strip_tags($tag);
echo "\n";

// array_push【用途】要素を配列の最後に追加する
$numbers = [1,4,7,9,10];
array_push($numbers, 11,20);
print_r ($numbers);
echo "\n";

// array_merge【用途】配列の後ろに配列を追加する
$number1 = [1,5,10];
$number2 = [20,30,40];
$animals = ["cat","dog","lion"];
$number_animal = array_merge($number1,$number2,$animals);
print_r ($number_animal);
echo "\n";

// time【用途】現在時刻のUNIXタイムスタンプの取得
echo time();
echo "\n";

// mktime【用途】指定した日時のUNIXタイムスタンプの取得
$timestamp = mktime(0,0,0,10,1,2020);
echo $timestamp;
echo "\n";

//date【用途】指定されたフォーマットを元に日付文字列を返す
$date = date('y/m/d');
echo $date;
echo "\n";
 ?>
