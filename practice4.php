<?php

//array_sliceの使い方
// $scores = [30, 40, 50, 60, 70];
// $a = array_slice($scores,2);
// $b = array_slice($scores, 2, 3);  //上記と同じ
// $c = array_slice($scores, -2);
// var_dump($a); //[50,60,70]
// var_dump($b); //[50,60,70]
// var_dump($c); //[60,70]

//array_spliceの使い方
// array_slice($scores, 2, 2); //[30, 40, 70]
// array_slice($scores, 2, 2, 100); //[30, 40, 100, 70]
// array_slice($scores, 2, 0, [100, 101]); //[30, 40, 100, 101, 50, 60, 70]

//sortの使い方
// $scores = [40, 50, 20, 30];
// sort($scores);  //小さ順に並べる
// shuffle($scores); //配列をランダムに表示
// $ab = array_rand($scores, 3);
// echo $scores[$ab[0]] .PHP_EOL;
// echo $scores[$ab[1]] .PHP_EOL;
// echo $scores[$ab[2]] .PHP_EOL;

//array_fill
// $scores1 = array_fill(0, 5, 100); //100が５個の配列
// $scores2 = range(1, 10);  //1~10までの配列
// $scores3 = range(1, 10, 2); //1~10までの配列2つ飛ばし
// array_sum($scores3);  //25
// max($scores3);  //9
// min($scores3);  //1
// array_sum($scores3) / count($scores3);  //5

//配列の結合など
// $a = [3, 4, 8];
// $b = [4, 8, 12];
// $c = array_merge($a, $b); //[3,4,8,4,8,12]
// $c1 = [...$a, ...$b]; //上記と同じ
// $d = array_unique($c); //[3,4,8,12]
// $e = array_diff($a, $b);  //[3]
// $f = array_diff($b, $a);  //[12]
// $g = array_intersect($a, $b); //[4,8]

//array_map
// $prices = [100, 200, 300];
// $a = array_map(
//   // function ($b) { return $b * 1.1;},
//   fn($b) => $b * 1.1, //上記と一緒
//   $prices
// );
// var_dump($a); //[110,220,330]

//array_filter
// $numbers = range(1, 10);
// $a = array_filter(
//   $numbers,
//   function ($b){
//     if ($b % 2 === 0){
//       return true;
//     }else{
//       return false;
//     }
//   //   // return $b % 2 === 0;  //上記と一緒
//   }
//   // fn($b) => $b % 2 === 0  //上記と一緒
// );
// var_dump($a); //[2,4,6,8,10]

//keyとvalue
// $scores = [
//   'taguchi' => 80,
//   'hayashi' => 70,
//   'kikuchi' => 60,
// ];
// // $key = array_keys($scores);
// // $value = array_values($scores);
// // var_dump($key);
// // var_dump($value);
// // if(array_key_exists('taguchi', $scores) === true){
// //   echo 'taguchi' . PHP_EOL;
// // }
// // if(in_array(80, $scores) === true){
// //   echo 'ma-ma-';
// // }
// echo array_search(70, $scores);

//asorとksort
$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];
asort($scores); //keyと値のセットで値小さい順
var_dump($scores);
arsort($scores);  //keyと値のセットで値大きいさい順
var_dump($scores);
ksort($scores); //keyと値のセットでkey小さい順
var_dump($scores);
krsort($scores);//keyと値のセットでkey大きいさい順
var_dump($scores);