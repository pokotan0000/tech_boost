<?php 

//課題１の回答

$name = "Ayako";

if ($name == "Ayako") {
  echo "私は $name です"."\n";
} else {
  echo " $name ではありません。"."\n";
}


//課題2の回答
$total = 0;

for($i = 1; $i <= 10000; $i++){
    $total += $i;
}

echo "合計は $total です"."\n";


//課題3の回答
$fruits = array("メロン","いちご","なし","りんご","桃");

foreach($fruits as $fruit){
    echo "$fruit"."\n";
}

//課題4の回答

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}