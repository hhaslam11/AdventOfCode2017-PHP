<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>day 3, part 1</title>
  </head>
  <body>
    <?php
      error_reporting(E_ALL);

      $input = 361527;

      $x = 0;
      $y = 0;
      $x_moves_left = 1;
      $y_moves_left = 1;
      $direction = 'R'; //(U)p, (D)own, (L)eft, (R)ight
      $amount_to_move = 1;

      for($i = 1; $i < $input; $i++){
        if (($x_moves_left == 0) && ($y_moves_left == 0)) {
          $amount_to_move++;
          $x_moves_left = $amount_to_move;
          $y_moves_left = $amount_to_move;
        }
        switch ($direction){
          case 'U':
            $y++;
            $y_moves_left--;
            if ($y_moves_left == 0) $direction = 'L';
            break;
          case 'D':
            $y--;
            $y_moves_left--;
            if ($y_moves_left == 0) $direction = 'R';
            break;
          case 'L':
            $x--;
            $x_moves_left--;
            if ($x_moves_left == 0) $direction = 'D';
            break;
          case 'R':
            $x++;
            $x_moves_left--;
            if ($x_moves_left == 0) $direction = 'U';
            break;
        }
      }//for loop

      echo (abs($x) + abs($y));

     ?>
  </body>
</html>
