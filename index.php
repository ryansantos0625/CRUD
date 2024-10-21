<?php
require 'db.php';

// Fetch all restaurants from the database
$stmt = $pdo->query("SELECT * FROM restaurants");
$restaurants = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">car rental system</h1>
    <a href="edit.php" class="btn btn-primary mb-4">Add New car</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($restaurants as $restaurant): ?>
                <tr>
                    <td><?php echo $restaurant['car_id']; ?></td>
                    <td><?php echo $restaurant['name']; ?></td>
                    <td><?php echo $restaurant['address']; ?></td>
                    <td><?php echo $restaurant['phone_number']; ?></td>
                    <td><?php echo $restaurant['email']; ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $restaurant['car_id']; ?>" class="btn btn-info">View</a>
                        <a href="edit.php?id=<?php echo $restaurant['car_id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $restaurant['car_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
