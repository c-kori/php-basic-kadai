<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<?php
class Food{
  public $name;
  public $price;
  function __construct(string $name, int $price){
    $this->name = $name;
    $this->price = $price;
  }

  public function show_price(){
    echo $this->price;
  }
}
$food = new Food('potato', 250);

class Animal{
  public $name;
  public $height;
  public $weight;

  function __construct(string $name, int $height, int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function show_height(){
   echo $this->height;
  }
}
$animal = new Animal('dog', 60, 5000);

print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';
$food-> show_price();
echo '<br>';
$animal->show_height();


?>
</body>
</html>