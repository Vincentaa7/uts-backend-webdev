<?php

include('../../config/database.php');

$query = mysqli_query($connect, "SELECT * FROM customers");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

$customer_id = "";
$customer_id  = "";
$last_name = "";
$Gender = "";
$Email = "";
$phone_number = "";
$address = "";
$education = "";
$occupation = "";
$date_of_birth = "";
$monthly_income = "";
$credit_score = "";
$marital_status = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET METHOD: Show the data of the client

    if ( !isset($_GET["id"]) ) {
        header("location: ../../public/index.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of the selected pelanggan from database table
    $sql = "SELECT * FROM pelanggan WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: index.php");
        exit;
    }

    $nama = $row["nama"];
    $email = $row["email"];
    $no_hp = $row["no_hp"];
    $alamat = $row["alamat"];
}
else {
    // POST METHOD: Update the data of the client

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST["alamat"];

    do {
        if ( empty($id) || empty($nama) || empty($email) || empty($no_hp) || empty($alamat) ) {
            $errorMessage = "Semua bidang wajib diisi";
            break;
        }

        $sql = " UPDATE pelanggan " .
            "SET nama = '$nama', email = '$email', no_hp = '$no_hp', alamat = '$alamat'" .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Pelanggan diperbarui";

        header("location: index.php");
        exit;

    }while (false);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokosaya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Pelanggan baru</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>       
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class= "row mb-3">
                <label class="cpl-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class= "row mb-3">
                <label class="cpl-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class= "row mb-3">
                <label class="cpl-sm-3 col-form-label">no_hp</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="no_hp" value="<?php echo $no_hp; ?>">
                </div>
            </div>
            <div class= "row mb-3">
                <label class="cpl-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
            echo "
            <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>    
                </div>
            </div>      
                ";
            }
            ?>


            <div class= "row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/tokosaya/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>