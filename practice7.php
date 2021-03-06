<?php
//abstract  子クラスでも独自の定義をするようにする(各クラスでshowを定義しないといけない)
// abstract class BasePost
// {
//   protected $text;
//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
//   abstract public function show();
// }
// class Post extends BasePost
// {
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
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
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// function processPost(BasePost $post) 
// {
//   $post->show();
// }
// foreach ($posts as $post) {
//   processPost($post);
// }

//さらにクラス追加
// abstract class BasePost
// {
//   protected $text;
//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
//   abstract public function show();
// }
// class Post extends BasePost
// {
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
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
// class PremiumPost extends BasePost
// {
//   private $price;
//   public function __construct($text, $price)
//   {
//     parent::__construct($text);
//     $this->price = $price;
//   }
//   public function show()
//   {
//       printf('%s [%d JPY]' . PHP_EOL, $this->text, $this->price);
//   }
// }
// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[3] = new PremiumPost('hello there', '3000');
// function processPost(BasePost $post) 
// {
//   $post->show();
// }
// foreach ($posts as $post) {
//   processPost($post);
// }

//イターフェイスの実装  クラスは複数の親クラスを持てない
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
//   private $likes = 0;
//   public function like()
//   {
//     $this->likes++;
//   }
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
//   private $likes = 0;
//   public function like()
//   {
//     $this->likes++;
//   }
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
// $posts[0]->like();
// $posts[3]->like();
// function processPost(BasePost $post) 
// {
//   $post->show();
// }
// foreach ($posts as $post) {
//   processPost($post);
// }

//interfaceの型継承
interface LikeInterface
{
  public function like(); //強制したい定義
}
abstract class BasePost
{
  protected $text;
  public function __construct($text)
  {
    $this->text = $text;
  }
  abstract public function show();
}
class Post extends BasePost implements LikeInterface
{
  private $likes = 0;
  public function like()
  {
    $this->likes++;
  }
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}
class SponsoredPost extends BasePost
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
class PremiumPost extends BasePost implements LikeInterface
{
  private $likes = 0;
  public function like()
  {
    $this->likes++;
  }
  private $price;
  public function __construct($text, $price)
  {
    parent::__construct($text);
    $this->price = $price;
  }
  public function show()
  {
      printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
  }
}
$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');
$posts[3] = new PremiumPost('hello there', '3000');
// $posts[0]->like();
// $posts[3]->like();
function processLikeable(LikeInterface $likeable)
{
  $likeable->like();
}
processLikeable($posts[0]);
processLikeable($posts[3]);
function processPost(BasePost $post) 
{
  $post->show();
}
foreach ($posts as $post) {
  processPost($post);
}