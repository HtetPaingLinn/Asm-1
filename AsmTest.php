<html>

<head>
    <style>
        th {
            background-color: #CCC;
        }
    </style>
</head>

<body>
    <table>
        <tr>
           
            <?php
            for ($i = 1; $i <= 9; $i++)
                echo "<th>$i</th>";
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++)
                echo "<td>" . ($i * $j) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>