<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 8: User-defined Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        @keyframes rainbowShadow {
            0% {
                box-shadow: 0 0 15px rgba(255, 0, 0, 0.8);
            }
            25% {
                box-shadow: 0 0 15px rgba(255, 165, 0, 0.8); /* Orange */
            }
            50% {
                box-shadow: 0 0 15px rgba(0, 255, 0, 0.8); /* Green */
            }
            75% {
                box-shadow: 0 0 15px rgba(0, 0, 255, 0.8); /* Blue */
            }
            100% {
                box-shadow: 0 0 15px rgba(75, 0, 130, 0.8); /* Indigo */
            }
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 800px;
            width: 100%;
            animation: rainbowShadow 3s infinite alternate;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back a {
            text-decoration: none;
            color: #007bff;
        }
        .back a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer p {
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Page 8: User-defined Functions</h1>
    
    <h2>Shopping Cart Management</h2>

    <?php
    // 1. Initialize an empty shopping cart
    $cart = [];

    // 2. Function to add an item to the cart
    function addItem(&$cart, $itemName, $price, $quantity) {
        $cart[] = [
            'name' => $itemName,
            'price' => $price,
            'quantity' => $quantity
        ];
    }

    // 3. Function to remove an item from the cart by name
    function removeItem(&$cart, $itemName) {
        foreach ($cart as $index => $item) {
            if ($item['name'] === $itemName) {
                unset($cart[$index]);
                break;
            }
        }
        $cart = array_values($cart); // re-index the array
    }

    // 4. Function to calculate the subtotal of the cart
    function calculateSubtotal($cart) {
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        return $subtotal;
    }

    // 5. Function to calculate tax (assuming 10% tax)
    function calculateTax($subtotal) {
        return $subtotal * 0.10;
    }

    // 6. Function to apply a discount (e.g., 20%)
    function applyDiscount($subtotal, $discountPercentage) {
        return $subtotal - ($subtotal * $discountPercentage / 100);
    }

    // 7. Function to calculate the total after tax and discount
    function calculateTotal($subtotal, $tax) {
        return $subtotal + $tax;
    }

    // 8. Function to display the cart contents
    function displayCart($cart) {
        echo "<table>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>";
        foreach ($cart as $item) {
            $total = $item['price'] * $item['quantity'];
            echo "<tr>
                    <td>{$item['name']}</td>
                    <td>₱{$item['price']}</td>
                    <td>{$item['quantity']}</td>
                    <td>₱{$total}</td>
                </tr>";
        }
        echo "</table>";
    }

    // 9. Function to clear the cart
    function clearCart(&$cart) {
        $cart = [];
    }

    // 10. Function to display the final summary
    function displaySummary($subtotal, $tax, $discount, $total) {
        echo "<p>Subtotal: ₱$subtotal</p>";
        echo "<p>Tax (10%): ₱$tax</p>";
        echo "<p>Discount (20%): ₱$discount</p>";
        echo "<p><strong>Total: ₱$total</strong></p>";
    }

    // Test the shopping cart functionalities
    addItem($cart, "Laptop", 1200, 1);
    addItem($cart, "Smartphone", 800, 2);
    addItem($cart, "Headphones", 150, 1);
    removeItem($cart, "Smartphone"); // Remove Smartphone

    // Display the cart
    displayCart($cart);

    // Calculate the subtotal, tax, and total
    $subtotal = calculateSubtotal($cart);
    $tax = calculateTax($subtotal);
    $subtotalAfterDiscount = applyDiscount($subtotal, 20); // Apply 20% discount
    $total = calculateTotal($subtotalAfterDiscount, $tax);

    // Display the summary
    displaySummary($subtotal, $tax, $subtotal - $subtotalAfterDiscount, $total);
    ?>

    <div class="back">
        <a href="main.php">← Back to Main Page</a>
    </div>

    <div class="footer">
        <p>Created by [Penote, Christian Rey S.] | Date: October 16, 2024</p>
    </div>
</div>

</body>
</html>
