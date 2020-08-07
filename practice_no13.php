<?php

//課題１の回答
function number($result){
    $sum = $result *2;
    return $sum;
}
$sum = number(5);
echo '数値の２倍は'.$sum.'です。'."\n";



//課題2の回答
function f($a, $b){
    $plus = $a + $b;
    return $plus;
}
$plus = f(50,2);
echo '加算の結果は'.$plus.'です。'."\n";


//課題3の回答
$arr = array(1, 3, 5, 7, 9);
function mult($arr){
  $result = 1;
  foreach ($arr as $a) {
    $result *= $a;
  }
  return $result;
}
$result= mult($arr);
echo '掛け算の結果は'.$result.'です。'."\n";


//課題4の回答
$arr = array(15, 3, 5, 7, 9);
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number < $a){
     $max_number = $a;
 }
 }
 return $max_number;
 }
 $result= max_array($arr);
 echo '一番大きい値は'.$result.'です。'."\n";
 
 
 //課題5の回答
 
 //  strip_tagsについて(HTMLタグを含む文字列からタグを取り除くスクリプト)
$str = "<h1>こんにちはphpの勉強です。</h1>"."\n"."<strong>こちらはとりのぞきません。</strong>";
echo strip_tags($str,"<strong>");


 //  array_pushについて(一つ以上の要素を配列の最後に追加する)
$fruits = ["バナナ", "リンゴ", "いちご"];
array_push($fruits, "メロン", "桃");
print_r($fruits);
foreach($fruits as $value){
    echo $value."\n";
}


//  array_mergeについて(配列の要素の最後にひとつまたは複数の配列を結合する)
$fruits = ["バナナ", "リンゴ", "いちご"];
$fruits2 = ["バナナ2", "リンゴ2", "いちご2"];
$fruits3 = ["バナナ3", "リンゴ3", "いちご3"];
$array = array_merge($fruits, $fruits2, $fruits3);
print_r($array);


//  timeについて(time関数は現在時刻のUNIXタイムスタンプを取得する,)
echo '現在のUnixタイムスタンプ：'.time()."\n";

//mktimeについて
//指定した日時のUNIXタイムスタンプを取得する(引数には第1引数から順番に時間、分、秒、月、日、年, サマータイムフラグを設定することが可能)
//タイムスタンプは1970年1月1日00:00:00 GMTから指定した時間までの秒を取得
$time = mktime(0, 10 , 10 , 8 ,22 , 2020);
echo date('指定した日時のタイムスタンプを取得:Y年m月d日h時i分s秒',$time)."\n";

//  dateについて(引数に指定されたフォーマットを元に、日付文字列を返す関数)
date_default_timezone_set('Asia/Tokyo');
$today = date('Y年m月d日h時i分s秒')."\n";
echo '現在の時刻は'.$today.'です。'."\n"; 
