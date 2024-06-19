<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Peg One Home</title>
</head>
<style type="text/css">
        div.map {
            float: left;
            text-align: center;
            border: 1px solid #666;
            background-color: #fcfcfc;
            margin: 5px;
            padding: 1em;
        }

        span.home,
        span.pigeon {
            font-weight: bold;
        }

        span.empty {
            color: #666;
        }
    </style>
</head>

<body>
    <?php
    $mapSize = 10;
    // Position the home and the pigeon
    do {
        $homeX = rand(0, $mapSize - 1);
        $homeY = rand(0, $mapSize - 1);
        $pigeon1X = rand(0, $mapSize - 1);
        $pigeon1Y = rand(0, $mapSize - 1);
        $pigeon2X = rand(0, $mapSize - 1);
        $pigeon2Y = rand(0, $mapSize - 1);
    } while ((abs($homeX - $pigeon1X) < $mapSize / 2) && (abs($homeY - $pigeon1Y) < $mapSize / 2) && (abs($homeX - $pigeon2X) < $mapSize / 2) && (abs($homeY - $pigeon2Y) < $mapSize / 2) && ($pigeon1X != $pigeon2X || $pigeon1Y != $pigeon2Y));

    do {
        // Move the pigeon closer to home
        if ($pigeon1X < $homeX)
            $pigeon1X++;
        elseif ($pigeon1X > $homeX)
            $pigeon1X--;
        if ($pigeon1Y < $homeY)
            $pigeon1Y++;
        elseif ($pigeon1Y > $homeY)
            $pigeon1Y--;
        if($pigeon2X < $homeX)
            $pigeon2X++;
        elseif ($pigeon2X > $homeX)
            $pigeon2X--;
        if ($pigeon2Y < $homeY)
            $pigeon2Y++;
        elseif ($pigeon2Y > $homeY)
            $pigeon2Y--;


        echo '<div class="map" style="width: ' .
            $mapSize . 'em;"><pre>';
        for ($y = 0; $y < $mapSize; $y++) {
            for ($x = 0; $x < $mapSize; $x++) {
                if ($x == $homeX && $y == $homeY) {
                    echo '<span class="home">+</span>'; // Home
                } elseif ($x == $pigeon1X && $y == $pigeon1Y) {
                    echo '<span class="pigeon">%</span>'; // Pigeon
                }
                elseif ($x == $pigeon2X && $y == $pigeon2Y) {
                    echo '<span class="pigeon">%</span>'; // Pigeon
                }
                 else {
                    echo '<span class="empty">.</span>'; // Empty square
                }
                echo ($x != $mapSize - 1) ? " " : "";
            }
            echo "\n";
        }
        echo "</pre></div>\n";
    } while ($pigeon1X != $homeX || $pigeon1Y != $homeY || $pigeon2X != $homeX || $pigeon2Y != $homeY);
    ?>
</body>
</body>

</html>