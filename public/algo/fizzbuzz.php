<?php
    // Determine Fizz, Buzz, FizzBuzz or given number
    function fizzbuzz($number) {
        $result = $number;

        if ($number % 3 == 0 && $number % 5 == 0) {
            $result = "FizzBuzz";
        } elseif ($number % 3 == 0) {
            $result = "Fizz";
        } elseif ($number % 5 == 0) {
            $result = "Buzz";
        }

        return $result;
    }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Algo - FizzBuzz</title>
    <link rel="stylesheet" href="/build/master.css">
  </head>
  <body>
    <a href="/">/home</a>
    <h1>/algo/fizzbuzz.php (<a href="https://github.com/inextensodigital/developers/blob/master/Algo/fizzbuzz.md" target="_blank">.md</a>)</h1>
    <?php
      for ($i=0; $i < 17; $i++) {
          echo "<div>fizzbuzz($i): " . fizzbuzz($i) . "</div>";
      }
    ?>
  </body>
</html>
