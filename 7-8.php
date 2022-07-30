<!DOCTYPE html>
<html lang="ru">
<head>
    <title>7-8</title>
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
    <script src=https://code.jquery.com/jquery-3.6.0.min.js></script>
    <script src="hide.js"></script>
    <meta charset="UTF-8">
</head>
<body>
    <table id="products">
        <tr>
            <th> Наименования продуктов </th>
            <th> Цена </th>
        </tr>
        <tbody>
            <?php
            require_once "db.php";
            $query = $pdo->query('SELECT PRODUCT_NAME, PRODUCT_PRICE FROM products WHERE hide IS NULL ORDER BY DATE_CREATE DESC');
            while($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>
            
            <tr class = "name" value="<?php echo htmlspecialchars($row['PRODUCT_NAME'], ENT_QUOTES); ?>">
                <td><?php echo htmlspecialchars($row['PRODUCT_NAME'], ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['PRODUCT_PRICE']); ?></td>
                <td><button>скрыть</button></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>