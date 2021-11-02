<?php
    function increment($array_number) {
        // Loop on each digits from the last one to the first one
        //  in order to correctly increment them (or just the last one if < 9)
        for ($i = (count($array_number) - 1); $i >= 0; $i--) {
            $array_number[$i]++;
            if ($array_number[$i] > 9) {
                // Reset current number "10" before updating next digit
                $array_number[$i] = 0;

                // Add a "1" when reaching the first number
                if ($i == 0) {
                    array_unshift($array_number, 1);
                }
            } else {
                // Last digit updated wasn't more than 9 so we can stop the loop here
                break;
            }
        }

        return $array_number;
    }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Algo - Increment</title>
    <link rel="stylesheet" href="/build/master.css">
  </head>
  <body>
    <a href="/">/home</a>
    <h1>/algo/increment.php (<a href="https://github.com/inextensodigital/developers/blob/master/Algo/custom-number-type-increment.md" target="_blank">.md</a>)</h1>
    <div>increment([1,2,3]): [<?=implode(',', increment([1,2,3]))?>]</div>
    <div>increment([9,9]): [<?=implode(',', increment([9,9]))?>]</div>
    <div>increment([9,1,1,9]): [<?=implode(',', increment([9,1,1,9]))?>]</div>
  </body>
</html>
