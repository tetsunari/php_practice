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
//   public function __construct($text, $likes) //newした時に実行されるコンストラクタ
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
// class Post
// {
//   public $text;
//   public $likes;
//   // private $likes; //←にするとclass内でしか使えない
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
// $posts[0]->likes++;
// $posts[0]->show();
// $posts[1]->show();

//プロパティ操作
// class Post
// {
//   private $text;
//   // public $likes;
//   private $likes; //←にするとclass内でしか使えない
//   public function __construct($text, $likes)
//   {
//     $this->text = $text;
//     $this->likes = $likes;
//   }
//   public function show()
//   {
//     printf('%s (%d)' .PHP_EOL, $this->text, $this->likes);
//   }
//   public function like()
//   {
//     $this->likes++;
//     if ($this->likes > 100) {
//       $this->likes = 100;
//     }
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello', 0);
// $posts[1] = new Post('hello world', 1);
// // $posts[0]->likes++;
// $posts[0]->like();
// $posts[1]->like();
// $posts[0]->show();
// $posts[1]->show();
// //修飾子がクラス内で何ができるか明確にすることをカプセル化と言う

//プロパティで型宣言
// declare(strict_types=1); //強い型チェック
// class Post
// {
//   private string $text;
//   public function __construct(string $text)
//   {
//     $this->text = $text;
//   }
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }
// $posts = [];
// $posts[0] = new Post(5);
// // $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[0]->show();
// $posts[1]->show();

//static
class Post
{
  private $text;
  private static $count = 0;  //クラスプロパティ
  public function __construct($text)
  {
    $this->text = $text;
    self::$count++;
  }
  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
  public static function showInfo() //クラスメソッド
  {
    printf('Count: %d' . PHP_EOL, self::$count);
  }
}
$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[0]->show();
$posts[1]->show();
Post::showInfo();