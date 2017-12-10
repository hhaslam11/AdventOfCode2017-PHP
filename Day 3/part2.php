<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>day 3, part 2</title>
  </head>
  <body>
    <?php
      $input = 361527;

      $x = 0;
      $y = 0;
      $x_moves_left = 1;
      $y_moves_left = 1;
      $direction = 'R'; //(U)p, (D)own, (L)eft, (R)ight
      $amount_to_move = 1;
      $cell['0,0'] = 1;
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

          /*
          [TL] [TM] [TR]
          [ML] [MM] [MR]
          [BL] [BM] [BR]
          */
          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x - 1, $y + 1)]; //TL
          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x + 1, $y + 1)]; //TR
          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x + 0, $y + 1)]; //TM

          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x - 1, $y + 0)]; //ML
          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x + 1, $y + 0)]; //MR

          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x - 1, $y - 1)]; //BL
          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x + 0, $y - 1)]; //BM
          $cell[(string) build_key($x, $y)] += $cell[(string) build_key($x + 1, $y - 1)]; //BR
          if ($cell[(string) build_key($x, $y)] > $input){
            echo $cell[(string) build_key($x, $y)];
            break;
          
        }
      }//for loop

      function build_key ($x, $y) {
        return $x . "," . $y;
      }

     ?>
  </body>
</html>
