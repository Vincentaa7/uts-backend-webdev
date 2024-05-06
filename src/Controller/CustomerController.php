<?php

include('../../config/database.php');

$query = mysqli_query($connect, "SELECT * FROM customers");
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
getAllCostumer()
    <table border="1">
        <tr>
            <th>Customer Id</th>
            <th>First Name</th>  
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Edukasi</th>
            <th>Occupation</th>
            <th>Tanggal Lahir</th>
            <th>Gaji Bulanan</th>
            <th>Credit Score</th>
            <th>Martial Status</th>
        </tr>
        
        <?php foreach($results as $result):?>
            <tr>
                <td><?php echo $result['customer_id']?></td>
                <td><?php echo $result['customer_id']?></td>
                <td><?php echo $result['last_name']?></td>
                <td><?php echo $result['gender']?></td>
                <td><?php echo $result['email']?></td>
                <td><?php echo $result['phone_number']?></td>
                <td><?php echo $result['address']?></td>
                <td><?php echo $result['education']?></td>
                <td><?php echo $result['occupation']?></td>
                <td><?php echo $result['date_of_birth']?></td>
                <td><?php echo $result['monthly_income']?></td>
                <td><?php echo $result['credit_score']?></td>
                <td><?php echo $result['marital_status']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>