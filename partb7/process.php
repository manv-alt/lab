<?php
include "conn.php";
$book_number = $_POST['book_number'];
$book_title = $_POST['book_title'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$book_code = $_POST['book_code'];
switch ($book_code) {
    case '101':
        $discount_rate = 0.15;
        break;
    case '102':
        $discount_rate = 0.20;
        break;
    case '103':
        $discount_rate = 0.25;
        break;
    default:
        $discount_rate = 0.05;
        break;
}

$discount_amount = $price * $quantity * $discount_rate;
$net_bill_amount = ($price * $quantity) - $discount_amount;
$sql = "INSERT INTO orders 
(book_number,book_title,price,quantity,book_code,discount_rate,discount_amount,net_bill_amount) 
        VALUES 
('$book_number','$book_title','$price','$quantity','$book_code','$discount_rate','$discount_amount','$net_bill_amount')";
if ($con->query($sql) === TRUE) {
    echo "order placed successfully !<br>";
    echo "Discount Amount:$" . number_format($discount_amount, 2) . "<br>";
    echo "net bill amount:$" . number_format($net_bill_amount, 2) . "<br>";
} else {
    echo "ERROR" . $sql . "<br>" . $con->error;
}
$sql = "SELECT * FROM orders ORDER BY order_date desc";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    echo "<h2>Order history</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Book Number</th> 
    <th>Book Title</th> 
    <th>Price</th> 
    <th>quantity</th> 
    <th>Book code</th>
    <th>Discount Rate</th>
    <th>Discount Amount</th> 
    <th>Net Bill Amount</th> 
 
    <th>Order Date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['book_number'] . "</td>";
        echo "<td>" . $row['book_title'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['book_code'] . "</td>";
       echo "<td>" . ($row['discount_rate'] * 100) . "%</td>";
        echo "<td>" . number_format($row['discount_amount'], 2) . "</td>";
        echo "<td>" . number_format($row['net_bill_amount'], 2) . "</td>";
        echo "<td>" . $row['order_date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No orders found";
}
$con->close();
