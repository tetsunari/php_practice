<?php

// $name = 'Apple';
// $score = 32.246;

// $info = "[$name][$score]";
// echo $info . PHP_EOL;

// $info = sprintf("[%15s][%10.2f]", $name,$score);
// echo $info . PHP_EOL;

// $info = sprintf("[%-15s][%010.2f]", $name,$score);
// echo $info . PHP_EOL;

// $input = ' dot_tetsuya  ';
// $del_inp = trim($input);    //空白、改行を除く
// echo strlen($input) ."\n";  //文字数確認 strlen
// echo strlen($del_inp) ."\n";
// echo strpos($input, '_') ."\t"; //_の位置の検索
// echo strpos($del_inp, '_') ."\t"; //_の位置の検索
// $input = str_replace('_', '-', $input); //文字の置換
// echo $input ."\n";

//日本語は注意
$input = ' こんにちは ';
// $del_inp = mb_trim($input);    //空白、改行を除く←trimはマルチバイトできない
echo mb_strlen($input) ."\n";  //文字数確認 strlen
// echo mb_strlen($del_inp) ."\n";
echo mb_strpos($input, 'に') ."\t"; //「に」の位置の検索
// echo mb_strpos($del_inp, 'に') ."\t"; //「に」の位置の検索
$input = str_replace('にち', 'ばん', $input); //文字の置換←str_replaceはマルチバイトしなくてもいける
echo $input ."\n";