<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime numbers</title>
</head>
<body>
    <h2>Prime numbers</h2>
    <div style="width: 550px; word-wrap: break-word; border: 1px solid #666; font-size: 30px; padding: 20px 40px 20px 40px;">
        <?php
        $isFirst = true;
        for ($i = 1; $i <= 100; $i++) {
            $isPrime = true;
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if($isPrime){
                if(!$isFirst){
                    echo ",";
                } else {
                    $isFirst = false;
                }
                ?>
                <?php echo $i; ?>


                <?php
            }
        }
        ?>
    </div>
</body>
</body>

</html>