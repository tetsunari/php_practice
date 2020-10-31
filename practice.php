<?php 

// $name = 'tetsuya';

// echo 'Hello tetsuya' . PHP_EOL;
// echo 'Hi tetsuya' . PHP_EOL;

// echo 'Hello ' . $name . PHP_EOL;
// echo 'Hi ' . $name . PHP_EOL;
// echo "Hi  . $name \t it's \"sunday\"" . PHP_EOL;

// const name = "matsu";

// echo name;
// $hp = 100;
// while ($hp > 0){
//   echo "your HP: $hp" . PHP_EOL;
//   $hp -= 15;
//}

//do-whileを使うことで１回は処理が実行される
// do{
//   echo "your HP: $hp" . PHP_EOL;
// }while($hp>0);

// for($i = 1; $i <= 10; $i++){
  //if($i ===4){  //4のときだけ飛ばす
  //   if($i %3 === 0){   //３の倍数の時飛ばす
  //   continue;
  // }
  // if ($i === 4){  //４まで処理を実行する
//   break;
//   }
//   echo $i . PHP_EOL;
// }

// function showAd($message = 'Ad')  //仮引数（何も渡されない時はAdが表示される）
// {
//   echo '---------' . PHP_EOL;
//   echo '---' . $message . '---' . PHP_EOL;
//   echo '---------' . PHP_EOL;
// }

// showAd('Header Ad');
// echo 'tom is great' . PHP_EOL;
// echo 'bob is great' . PHP_EOL;
// showAd('Ad');
// echo 'tom is great' . PHP_EOL;
// echo 'bob is great' . PHP_EOL;
// showAd('Footer Ad');

// $rate = 1.1;  //グローバルスコープ

// function sum($a, $b, $c)
// {
//   //global $rate;
//   $rate = 1.08; //ローカルスコープ
//   return ($a + $b + $c) * $rate;
// }

// echo sum(100,200,300) + sum(300,400,500);

// $sum = function ($a, $b, $c) {  //無名関数
//   return $a + $b + $c; 
// };

// echo $sum(100, 300, 500);

// declare(strict_types=1);

// function showinfo(string $name, int $score) : void
// {
//   echo $name . ' : ' . $score . PHP_EOL;
// }

// showInfo('taguti',40);
// showInfo('taguti', '4');

// $moreScores = [
//   55,
//   72,
//   'perfect',
//   [90, 42, 88],
// ];

// $scores = [
//   90,
//   40,
//   100,
// ];

// print_r($scores[2]);

function sum(...$numbers)
{
  $toatal = 0;
  foreach ($numbers as $number){
    $total += $number;
  }
  return $total;
}

echo sum(1,3,5);
echo sum(4,2,5,1);