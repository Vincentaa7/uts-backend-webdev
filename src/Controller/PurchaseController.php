<?php

include('../../config/database.php');

$query = mysqli_query($connect, "SELECT * FROM purchases");
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
            <th>purchase_id</th>
            <th>last_visited</th>
            <th>supplier</th>  
            <th>return_status</th>
            <th>warranty</th>
            <th>purchase_date</th>
            <th>return_policy</th>
            <th>feedback</th>
            <th>order_id</th>
        </tr>
        
        <?php foreach($results as $result):?>
            <tr>
                <td><?php echo $result['purchase_id']?></td>
                <td><?php echo $result['last_visited']?></td>
                <td><?php echo $result['supplier']?></td>
                <td><?php echo $result['return_status']?></td>
                <td><?php echo $result['warranty']?></td>
                <td><?php echo $result['purchase_date']?></td>
                <td><?php echo $result['return_policy']?></td>
                <td><?php echo $result['feedback']?></td>
                <td><?php echo $result['order_id']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>