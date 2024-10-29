<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 7: Loop Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
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
            margin-left: auto;
            margin-right: auto;
            padding: .5in .5in;
            border-radius: 8px;
            max-width: 800px;
            width: 100%;
            animation: rainbowShadow 3s infinite alternate;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            margin: 0 auto; /* Center the table */
            border-collapse: collapse;
        }
        td {
            width: 35px; /* Set equal width for each cell */
            height: 35px; /* Set equal height for each cell */
            text-align: center;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
        }
        h2 {
            text-align: left;
            color: #333;
            font-size: 19px;
        }
        p {
            margin: 10px 0;
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
    <h1>Page 7: Loop Statements</h1>

    <?php
    // Declare n and m
    $n = 5; // You can change the value of n
    $m = 4; // You can change the value of m

    // 1. Display n x m Multiplication Table using a for loop
    echo "<h2>Multiplication Table ($n x $m)</h2>";
    echo "<table>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $m; $j++) {
            // Alternate colors based on the row index
            $bgColor = ($i % 2 == 0) ? '#ffffff' : '#f2f2f2'; // Light gray for even rows, white for odd rows
            echo "<td style='background-color: $bgColor;'>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // 2. Fibonacci Series using while loop for n
    echo "<h2>Fibonacci Series (First $n numbers)</h2>";
    $a = 0;
    $b = 1;
    $count = 0;
    echo "<p>";
    while ($count < $n) {
        echo $a . " ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        $count++;
    }
    echo "</p>";

    // Fibonacci Series using while loop for m
    echo "<h2>Fibonacci Series (First $m numbers)</h2>";
    $a = 0;
    $b = 1;
    $count = 0;
    echo "<p>";
    while ($count < $m) {
        echo $a . " ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        $count++;
    }
    echo "</p>";

    // 3. Compute factorial of n using do...while loop
    echo "<h2>Factorial of $n</h2>";
    $factorial = 1;
    $i = 1;
    do {
        $factorial *= $i;
        $i++;
    } while ($i <= $n);
    echo "<p>Factorial of $n is: $factorial</p>";

    // 4. Compute summation of m using do...while loop
    echo "<h2>Summation of $m</h2>";
    $sum = 0;
    $i = 1;
    do {
        $sum += $i;
        $i++;
    } while ($i <= $m);
    echo "<p>Summation of first $m numbers is: $sum</p>";
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
