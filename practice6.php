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
// class Post
// {
//   private $text;
//   private static $count = 0;  //クラスプロパティ
//   // private const VERSION = 0.1;  //オブジェクト定数
//   public const VERSION = 0.1;   //別の値の再代入できないからpublicでも良い
//   public function __construct($text)
//   {
//     $this->text = $text;
//     self::$count++;
//   }
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
//   public static function showInfo() //クラスメソッド
//   {
//     printf('Count: %d' . PHP_EOL, self::$count);
//     printf('VERSION: %.1f' . PHP_EOL, self::VERSION);
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[0]->show();
// $posts[1]->show();
// Post::showInfo();
// echo Post::VERSION . PHP_EOL;

//クラス継承
// class Post  //親クラス
// {
//   private $text;
//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }
// class SponsoredPost extends Post  //子クラス
// {

// }
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello');
// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();

//子クラスに機能追加
// class Post
// {
//   private $text;
//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }
// class SponsoredPost extends Post
// {
//   private $sponsor;
//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }
//   public function showSponsor()
//   {
//     printf('%s' . PHP_EOL, $this->sponsor);
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
// $posts[2]->showSponsor();

//orverride
// class Post
// {
//   // private $text;
//   protected $text;  //orverrideで使いたい時
//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
//   public function show()  //overrideして欲しくない時finalをアクセス修飾子の前に
//   // final public function show()  //overrideして欲しくない時finalをアクセス修飾子の前に
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }
// class SponsoredPost extends Post
// {
//   private $sponsor;
//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }
//   public function showSponsor()
//   {
//     printf('%s' . PHP_EOL, $this->sponsor);
//   }
//   //override
//   public function show()
//   {
//     printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
// $posts[2]->showSponsor();

//型の継承  クラスを継承すると型も継承される
class Post
{
  protected $text;
  public function __construct($text)
  {
    $this->text = $text;
  }
  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}
class SponsoredPost extends Post
{
  private $sponsor;
  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }
  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}
$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');
function processPost(Post $post)  //postの$postを受け取る
{
  $post->show();
}
foreach ($posts as $post) {
  processPost($post);
}