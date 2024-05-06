<?php

include('../../config/database.php');

$query = mysqli_query($connect, "SELECT * FROM sales");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>order_id</th>
            <th>product_name</th>  
            <th>product_description</th>
            <th>gross_product_price</th>
            <th>tax_per_product</th>
            <th>quantity_purchased</th>
            <th>gross_revenue</th>
            <th>total_tax</th>
            <th>net_revenue</th>
            <th>product_category</th>
            <th>sku_number</th>
            <th>weight</th>
            <th>color</th>
            <th>size</th>
            <th>rating</th>
            <th>stock</th>
            <th>sales_rep</th>
            <th>adress</th>
            <th>zipcode</th>
            <th>phone</th>
            <th>email</th>
            <th>loyalty_points</th>
            <th>customer_id</th>
            <th>country_id</th>
        </tr>
        
        <?php foreach($results as $result):?>
            <tr>
                <td><?php echo $result['order_id']?></td>
                <td><?php echo $result['product_name']?></td>
                <td><?php echo $result['product_description']?></td>
                <td><?php echo $result['gross_product_price']?></td>
                <td><?php echo $result['tax_per_product']?></td>
                <td><?php echo $result['quantity_purchased']?></td>
                <td><?php echo $result['gross_revenue']?></td>
                <td><?php echo $result['total_tax']?></td>
                <td><?php echo $result['net_revenue']?></td>
                <td><?php echo $result['product_category']?></td>
                <td><?php echo $result['sku_number']?></td>
                <td><?php echo $result['weight']?></td>
                <td><?php echo $result['color']?></td>
                <td><?php echo $result['size']?></td>
                <td><?php echo $result['rating']?></td>
                <td><?php echo $result['stock']?></td>
                <td><?php echo $result['sales_rep']?></td>
                <td><?php echo $result['address']?></td>
                <td><?php echo $result['zipcode']?></td>
                <td><?php echo $result['phone']?></td>
                <td><?php echo $result['email']?></td>
                <td><?php echo $result['loyalty_points']?></td>
                <td><?php echo $result['customer_id']?></td>
                <td><?php echo $result['country_id']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>