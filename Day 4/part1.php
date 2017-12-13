<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Day 4, part 1</title>
  </head>
  <body>
    <?php

      $input = file("input.txt");
      $amt_valid = sizeof($input);

      for ($i = 0; $i < sizeof($input); $i++) {
        $row = preg_split('#\s+#', $input[$i], null, PREG_SPLIT_NO_EMPTY);
        for ($x = 0; $x < sizeof($row); $x++){
          for ($y = 0; $y < sizeof($row); $y++){
            if ($x == $y) continue;
            if ($row[$x] === $row[$y]) {
              $amt_valid--;
              $y = sizeof($row);
              $x = sizeof($row);
            }
          }
        }
      }
      echo $amt_valid;
     ?>
  </body>
</html>