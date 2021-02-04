<?php

//トレイトを使う  コードの断片を使いまわしたい時に便利
// trait LikeTrait
// {
//   private $likes = 0;
//   public function like()
//   {
//     $this->likes++;
//   }
// }
// interface LikeInterface
// {
//   public function like(); //強制したい定義
// }
// abstract class BasePost
// {
//   protected $text;
//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
//   abstract public function show();
// }
// class Post extends BasePost implements LikeInterface
// {
//   use LikeTrait;
//   // private $likes = 0;
//   // public function like()
//   // {
//   //   $this->likes++;
//   // }
//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
//   }
// }
// class SponsoredPost extends BasePost
// {
//   private $sponsor;
//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }
//   public function show()
//   {
//       printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
//   }
// }
// class PremiumPost extends BasePost implements LikeInterface
// {
//   use LikeTrait;
//   // private $likes = 0;
//   // public function like()
//   // {
//   //   $this->likes++;
//   // }
//   private $price;
//   public function __construct($text, $price)
//   {
//     parent::__construct($text);
//     $this->price = $price;
//   }
//   public function show()
//   {
//       printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[3] = new PremiumPost('hello there', '3000');
// function processLikeable(LikeInterface $likeable)
// {
//   $likeable->like();
// }
// processLikeable($posts[0]);
// processLikeable($posts[3]);
// function processPost(BasePost $post) 
// {
//   $post->show();
// }
// foreach ($posts as $post) {
//   processPost($post);
// }

//クラス読み込み
// require('Post.php'); // 処理が止まる
// include('Post.php'); // 処理が止まらない
// require('Post.php'); //一度処理が読み込まれていたらスキップ
// include('Post.php'); //一度処理が読み込まれていたらスキップ

//クラスの自動読み込み
//引数に関数をとる。newした時にクラスが読み込まれていないと呼ばれる。
// spl_autoload_register(function ($class) {
//   require($class . '.php'); //Postが$classに返ってくる
// });
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// foreach ($posts as $post) {
//   $post->show();
// }

//名前空間
// /**
//  * Post.php //ファイル
//  * 
//  * namespace Dotinstall\MyPHPApp;
//  * class Post
//  * {
//  *  private $text;
//  *  public function __construct($text)
//  *  {
//  *    $this->text = $text;
//  *  }
//  *  public function show()
//  *  {
//  *    printf("%s" . PHP_EOL, $this->text);
//  *  }
//  * }
//  */
// // use Dotinstall\MyPHPApp as MyPHPApp;
// use Dotinstall\MyPHPApp;
// require('Post.php');
// class Post {} //誰かがPostクラスを書いていて、自分が作ったPostクラスを読み込むとエラーになる
// // $posts[0] = new Dotinstall\MyPHPApp\Post('hello');
// // $posts[1] = new Dotinstall\MyPHPApp\Post('hello again');
// $posts[0] = new MyPHPApp\Post('hello');
// $posts[1] = new MyPHPApp\Post('hello again');
// foreach ($posts as $post) {
//   $post->show();
// }

//例外処理
/**
 * Post.php //ファイル
 * 
 * class Post
 * {
 *  private $text;
 *  public function __construct($text)
 *  {
 *    if (strlen($text) <= 3) {
 *      // echo 'Text too short!' . PHP_EOL;
 *      //exit;
 *      throw new Exception('Text too short!');
 *    }
 *    $this->text = $text;
 *  }
 *  public function show()
 *  {
 *    printf("%s" . PHP_EOL, $this->text);
 *  }
 * }
 */
require('Post.php');
try {
  $posts[0] = new Post('!');
  $posts[1] = new Post('hello again');
  foreach ($posts as $post) {
    $post->show();
  }
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}