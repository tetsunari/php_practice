<?php

//array_multisort
$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

// $scores = array_column($data, 'score'); //[80, 60, 70, 60]
// $name = array_column($data, 'name'); //[taguchi, kikuchi, hayashi, tamachi]
// array_multisort(
//   $scores,
//   $name,
//   $data,
// );  //[ [kikuchi, 60],[tamachi, 60], [hayashi, 70], [taguchi, 80] ]
// array_multisort(
//   $scores, SORT_DESC, SORT_NUMERIC,
//   $name, SORT_DESC, SORT_STRING,
//   $data,
// );  //[ [taguchi, 80], [hayashi, 70], [tamachi, 60], [kikuchi, 60], ]

//ファイル操作
// $fp = fopen('name.txt', 'w');
// fwrite($fp, "tetsu\n");
// fclose($fp);
//書き足し
// $fp = fopen('name.txt', 'a');
// fwrite($fp, "tetsu\n");
// fwrite($fp, "ya\n");
// fwrite($fp, "matsu\n");
// fclose($fp);
//読み込み
// $fp = fopen('name.txt', 'r');
// $contents = fread($fp, filesize('name.txt'));
// fclose($fp);
// echo $contents;
// $fp = fopen('name.txt', 'r');
// while (($line = fgets($fp)) !== false) { //failsizeが大きい時はfgetsで1行ずつ
//   echo $line;
// }
// fclose($fp);
// echo $contents;
// ファイル操作2
// $contents = "taro\njiro\nsaburo\n";
// file_put_contents('names.txt', $contents); //書き込み
// $contents = file_get_contents('names.txt'); //読み込み
// echo $contents;
// $lines = file('names.txt'); //1行ずつ配列として読み込む
// $lines = file('names.txt', FILE_IGNORE_NEW_LINES); //改行無視
// var_dump($lines);

//日付
// echo time();
echo date('Y-m-d l H-i-s');