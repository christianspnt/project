<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 6: Selection Statements</title>
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
            max-width: 600px;
            width: 100%;
            animation: rainbowShadow 3s infinite alternate;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 16px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
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
        }.footer {
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
    <h1>Page 6: Selection Statements</h1>

    <?php
    // Initialize five string variables
    $str1 = "Christian";
    $str2 = "Angela";
    $str3 = "Germe";
    $str4 = "Kathleah";
    $str5 = "Elizer";

    // Initialize five integer variables
    $num1 = 10;
    $num2 = 22;
    $num3 = 2003;
    $num4 = 21;
    $num5 = 2;
    ?>

    <!-- Table to display the string and integer variables -->
    <table>
        <tr>
            <th>String Variables</th>
            <th>Integer Variables</th>
        </tr>
        <tr>
            <td><?php echo $str1; ?></td>
            <td><?php echo $num1; ?></td>
        </tr>
        <tr>
            <td><?php echo $str2; ?></td>
            <td><?php echo $num2; ?></td>
        </tr>
        <tr>
            <td><?php echo $str3; ?></td>
            <td><?php echo $num3; ?></td>
        </tr>
        <tr>
            <td><?php echo $str4; ?></td>
            <td><?php echo $num4; ?></td>
        </tr>
        <tr>
            <td><?php echo $str5; ?></td>
            <td><?php echo $num5; ?></td>
        </tr>
    </table>

    <?php
    // Store the strings in an array and sort in ascending order
    $strings = [$str1, $str2, $str3, $str4, $str5];
    sort($strings);
    echo "<p>Strings in ascending order: " . implode(", ", $strings) . "</p>";

    // Sort strings in descending order
    rsort($strings);
    echo "<p>Strings in descending order: " . implode(", ", $strings) . "</p>";

    // Check if the first number is divisible by the fifth number
    if ($num1 % $num5 == 0) {
        // If divisible, display the sum, product, and average
        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
        $product = $num1 * $num2 * $num3 * $num4 * $num5;
        $average = $sum / 5;
        echo "<p>The first number is divisible by the fifth number.</p>";
        echo "<p>Sum: $sum</p>";
        echo "<p>Product: $product</p>";
        echo "<p>Average: $average</p>";
    } else {
        // If not divisible, display the numbers in ascending order
        $numbers = [$num1, $num2, $num3, $num4, $num5];
        sort($numbers);
        echo "<p>The first number is not divisible by the fifth number.</p>";
        echo "<p>Numbers in ascending order: " . implode(", ", $numbers) . "</p>";
    }
    ?>

    <div class="back">
        <a href="main.php">← Back to Main Page</a>
    </div>

    <div class="footer">
        <p>Created by [Penote, Christian Rey S.] | Date: October 20, 2024</p>
    </div>
</div>

</body>
</html>
