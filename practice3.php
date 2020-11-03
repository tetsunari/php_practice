<?php

// $input = '20201101Item-A  1200';

// $date = substr($input, 0, 8);
// $product = substr($input, 8, 8);
// $amount = substr($input, 16);

// echo $date ."<br>";
// echo $product . "<br>";
// echo $amount . "<br>";
// echo number_format($amount) ."<br>";

// //文字列の変更
// $input_2 = substr_replace($input, "Item-B  ", 8, 8);
// echo $input_2 ."<br>";

// //文字列の検索、置換
// $input = 'Call us at 03-3001-1256 or 03-3015-3222';
// $pattern = '/\d{2}-\d{4}-\d{4}/';
// preg_match($pattern, $input, $matches);
// print_r($matches);
// //matchしたもの全て探す
// preg_match_all($pattern, $input, $matches_2);
// print_r($matches_2);
// //文字列の置換
// $input_2 = preg_replace($pattern, '**-****-****', $input);
// echo $input_2 ."<br>";

// //文字列と配列を相互に変換
// $d = [2020, 11, 15];
// echo "$d[0]-$d[1]-$d[2]" . "<br>";
// echo implode('-', $d) . "<br>";
// //文字列を配列に
// $t = '17_32_45';
// print_r(explode('_', $t));  //アンダーバーで区切るように指定

// //数学系の関数を使う
// $n = 5.6283;
// echo ceil($n) ."<br>";  //小数点以下切り上げ
// echo floor($n) ."<br>";  //小数点以下切り捨て
// echo round($n) ."<br>";  //四捨五入して整数にする
// echo round($n, 2) ."<br>";  //小数点以下２桁にする
// echo mt_rand(1, 6) ."<br>"; //1~6までのランダムな数字
// echo max(3, 11, 4) ."<br>"; //最大値を求める
// echo min(3, 11, 4) ."<br>"; //最小値を求める
// echo M_PI . "<br>"; //円周率
// echo M_SQRT2 . "<br>"; //2の平方根

//配列の要素を変更
$scores = [30, 40, 50];
array_unshift($scores, 10, 20); //配列の先頭に要素追加
array_push($scores, 60, 70);  //配列の後ろに要素追加
$scores [] = 80;  //配列の後ろに要素追加
array_shift($scores); //配列の先頭の要素削除
array_pop($scores); //配列の後ろの要素削除
print_r($scores);