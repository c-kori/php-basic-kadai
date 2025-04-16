<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
<?php
// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];

function sort_2way($array,$order) {
if($order === TRUE) {
  echo '昇順にソートします<br>';
  sort($array);
  foreach($array as $num) {
  echo "{$num}<br>";
}
  //  // 昇順にソート
} else {
  echo '降順にソートします<br>';
   rsort($array); // 降順にソート
   foreach($array as $num) {
    echo "{$num}<br>";
  }
}
}
sort_2way($nums,TRUE);
sort_2way($nums,FALSE);
?>
</body>
</html>