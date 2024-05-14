<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Order History</h2>
    <table>
        <tr>
            <th>Order No</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php
        // Include database connection
        include '../backend/connect.php'; // Replace 'db_connection.php' with your database connection file

        // Fetch order history data from the database
        $sql = "SELECT * FROM order_history";
        $result = $conn->query($sql);

        // Check if there are any orders
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["order_no"] . "</td>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["product_id"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No orders found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
