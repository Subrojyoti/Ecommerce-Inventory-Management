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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
        }

        td {
            color: #666;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
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
            <th>Product</th>
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
        if ($result->rowCount() > 0) {
            // Output data of each row
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["order_no"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["product_id"] . "</td>";
                echo "<td>" . $row["product_name"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No orders found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
