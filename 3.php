<!DOCTYPE html>
<html lang="ru">
<head>
    <title>3</title>
    <style type="text/css">
        table{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
    <meta charset="UTF-8">
</head>
<body>
    <table>
        <tr>
            <th> Наименования продуктов </th>
            <th> Цена </th>
        </tr>
        <tbody>
            <?php
            require_once "db.php";
            $query = $pdo->query('SELECT PRODUCT_NAME, PRODUCT_PRICE FROM products ORDER BY DATE_CREATE DESC');
            while($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?php echo htmlspecialchars($row['PRODUCT_NAME']); ?></td>
                <td><?php echo htmlspecialchars($row['PRODUCT_PRICE']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>