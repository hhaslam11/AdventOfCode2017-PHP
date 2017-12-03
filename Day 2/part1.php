<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>day 2, part 1</title>
  </head>
  <body>
    <?php
      error_reporting(E_ALL);

      $table = file("input.txt");
      $checksum = 0;

      for ($i = 0; $i < sizeof($table); $i++) {
        $row = preg_split('#\s+#', $table[$i], null, PREG_SPLIT_NO_EMPTY);
        $checksum += abs(max($row) - min($row));
      }
      echo $checksum;

     ?>
  </body>
</html>
