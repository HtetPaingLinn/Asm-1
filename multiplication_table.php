<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 15px;
            margin: 1px;
        }

        th {
            background-color: gray;
        }
    </style>
    <table>
        <tr>
            <?php for ($i = 1; $i <= 9; $i++) : ?>
                <th>
                    <?php echo $i; ?>
                </th>
            <?php endfor; ?>
        </tr>
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <tr>
                <td style="background-color: gray;">
                    <?php echo $i; ?>
                </td>
                <?php for ($j = 2; $j <= 9; $j++) : ?>
                    <td>
                        <?php echo $i * $j; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    </table>
</body>
</html>