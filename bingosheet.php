<?php

/* $nums[][]
B:$nums[0]1-15
I:$nums[1]16-30
..

O:$nums[4]
$nums[$i]  15 + 1 ~ $i * 15 + 15
*/
$nums = [] ;

for ($i = 0;  $i < 5;  $i++ ) {
  $col = range($i *15 + 1 ,  $i * 15 + 15);
  shuffle($col);
  $nums[$i] = array_slice($col, 0, 5);
}

$nums[2][2] = "FREE";
//var_dump($nums);
//exit;

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
 ?>
<!DOCTYPE html>
<html lang="ja">
 <head>
    <meata charset="utf-8">
    <title>BINGO!</title>
    <link rel="stylesheet" href="css/new_styles.css">
 </head>

<body>
  <div id="container">
     <table>
      <tr>
       <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
       <?php for ($i = 0;  $i < 5;  $i++) : ?>
     <tr>
       <?php for ($j = 0;  $j < 5;  $j++) : ?>
       <td><?= h($nums[$j][$i]); ?></td>
       <?php endfor; ?>
     </tr>
     <?php endfor; ?>
    </table>
  </div>
</body>
</html>
