<?php 
echo 'hello php!'."\n";

//課題1の回答
$a = 3;
$b = 7;
echo '$a+$b'."\n";

//課題2の回答
$array_month =['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7]."\n";

//課題3の回答
$hello = "Hello,";
$name = "Ayako";
$world = "'s World!";
echo $hello.$name.$world."\n";

//課題4の回答
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost."\n";

//課題5の回答
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];