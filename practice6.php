<?php

//オブジェクト思考
// $posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
// $posts[1] = ['text' => 'hello world', 'likes' => 1];

// function show($post)
// {
//   printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);

// //クラス
// class Post
// {
//   //プロパティ 
//   public $text;
//   public $likes;
//   //メソッド
//   public function show()
//   {
//     printf('%s (%d)' .PHP_EOL, $this->text, $this->likes);
//   }
// }
// $posts = [];
// $posts[0] = new Post();
// $posts[0]->text = 'hello';
// $posts[0]->likes = 0;
// $posts[1] = new Post();
// $posts[1]->text = 'hello world';
// $posts[1]->likes = 1;
// $posts[0]->show();
// $posts[1]->show();

//コンストラクタ
// class Post
// {
//   public $text;
//   public $likes;
//   public function __construct($text, $likes)
//   {
//     $this->text = $text;
//     $this->likes = $likes;
//   }
//   public function show()
//   {
//     printf('%s (%d)' .PHP_EOL, $this->text, $this->likes);
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello', 0);
// $posts[1] = new Post('hello world', 1);
// $posts[0]->show();
// $posts[1]->show();

//アクセス修飾子
class Post
{
  public $text;
  public $likes;
  // private $likes; //←にするとclass内でしか使えない
  public function __construct($text, $likes)
  {
    $this->text = $text;
    $this->likes = $likes;
  }
  public function show()
  {
    printf('%s (%d)' .PHP_EOL, $this->text, $this->likes);
  }
}
$posts = [];
$posts[0] = new Post('hello', 0);
$posts[1] = new Post('hello world', 1);
$posts[0]->likes++;
$posts[0]->show();
$posts[1]->show();