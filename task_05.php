<?php
$text = '<p>ビルトイン関数を勉強中です。</p>';
echo strip_tags($text);
echo"\n";

$fruits = ["apple","orange"];
array_push ($fruits,"grape");
print_r($fruits);
echo"\n";

$number1 = [1,2];
$number2 = [3,4];
$number3 = array_merge($number1,$number2);
print_r($number3);
echo"\n";

echo time();
echo"\n";

echo mktime(0,30,11,7,2015);
echo"\n";

$date = date('Y年m月d日');
echo $date;
?>