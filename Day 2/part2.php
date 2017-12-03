<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>day 2, part 2</title>
  </head>
  <body>
    <?php
      error_reporting(E_ALL);

      $table = file("input.txt");
      $checksum = 0;

      for ($i = 0; $i < sizeof($table); $i++) {
        $row = preg_split('#\s+#', $table[$i], null, PREG_SPLIT_NO_EMPTY);
        for ($x = 0; $x < sizeof($row); $x++){
          for ($y = 0; $y < sizeof($row); $y++){
            if ($row[$x] == $row[$y]) continue;
            if (($row[$x] % $row[$y]) == 0){
              $checksum += ($row[$x] / $row[$y]);
              break;
            }
          }
        }
      }
      echo $checksum;

     ?>
  </body>
</html>
