<html>
<head>
    <title>Counting from 1 to 10</title>
</head>
<body>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        th {
            background-color: #ddd;
        }
    </style>
    <table>
        <tr>
            <th style="background-color: #aaf;">Number</th>
            <th style="background-color: #aaf;">Even/Odd</th>
            <th style="background-color: #aaf">Prime</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $isPrime = true;
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo ($i % 2 == 0) ? "<span style='color: blue;'>Even</span>" : "<span style='color: red;'>Odd</span>"; ?></td>
                <td><?php echo ($isPrime) ? "<span style='color: green;'>Prime</span>" : ""; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
