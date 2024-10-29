<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 10: Two-dimensional Array</title>
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
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
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
    <h1>Two-dimensional Array</h1>
    
    <?php
    // 1. Create an NxN array with random integers
    $N = 5;  // Size of the array (5x5)
    $matrix = [];
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $matrix[$i][$j] = rand(1, 100);  // Random integer between 1 and 100
        }
    }

    // 2. Function to calculate the sum of each row
    function rowSum($matrix, $N) {
        $sums = [];
        for ($i = 0; $i < $N; $i++) {
            $sum = array_sum($matrix[$i]);
            $sums[] = $sum;
        }
        return $sums;
    }

    // 3. Function to calculate the sum of each column
    function columnSum($matrix, $N) {
        $sums = [];
        for ($j = 0; $j < $N; $j++) {
            $sum = 0;
            for ($i = 0; $i < $N; $i++) {
                $sum += $matrix[$i][$j];
            }
            $sums[] = $sum;
        }
        return $sums;
    }

    // 4. Function to calculate the sum of the diagonals
    function diagonalSum($matrix, $N) {
        $mainDiagonalSum = 0;
        $secondaryDiagonalSum = 0;
        for ($i = 0; $i < $N; $i++) {
            $mainDiagonalSum += $matrix[$i][$i];
            $secondaryDiagonalSum += $matrix[$i][$N - 1 - $i];
        }
        return [$mainDiagonalSum, $secondaryDiagonalSum];
    }

    // 5. Function to calculate the average of each row and column
    function rowAvg($rowSums, $N) {
        return array_map(function($sum) use ($N) { return $sum / $N; }, $rowSums);
    }

    function columnAvg($colSums, $N) {
        return array_map(function($sum) use ($N) { return $sum / $N; }, $colSums);
    }

    // 6. Function to find the smallest and largest numbers in each row and column
    function findMinMax($matrix, $N) {
        $rowMinMax = [];
        $colMinMax = [];

        // Find min and max for each row
        for ($i = 0; $i < $N; $i++) {
            $rowMinMax[$i] = ['min' => min($matrix[$i]), 'max' => max($matrix[$i])];
        }

        // Find min and max for each column
        for ($j = 0; $j < $N; $j++) {
            $colValues = [];
            for ($i = 0; $i < $N; $i++) {
                $colValues[] = $matrix[$i][$j];
            }
            $colMinMax[$j] = ['min' => min($colValues), 'max' => max($colValues)];
        }

        return ['row' => $rowMinMax, 'column' => $colMinMax];
    }

    // 7. Display the matrix
    echo "<h2>Matrix (5x5)</h2>";
    echo "<table>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            echo "<td>" . $matrix[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // 8. Calculate row sums and column sums
    $rowSums = rowSum($matrix, $N);
    $colSums = columnSum($matrix, $N);

    // 9. Calculate the diagonal sums
    list($mainDiagonalSum, $secondaryDiagonalSum) = diagonalSum($matrix, $N);

    // 10. Calculate row and column averages
    $rowAverages = rowAvg($rowSums, $N);
    $colAverages = columnAvg($colSums, $N);

    // 11. Find the min and max values
    $minMax = findMinMax($matrix, $N);

    // 12. Display the results
    echo "<h2>Results:</h2>";

    // Row sums and averages
    echo "<h3>Row Sums and Averages:</h3>";
    for ($i = 0; $i < $N; $i++) {
        echo "<p>Row $i - Sum: {$rowSums[$i]}, Average: {$rowAverages[$i]}</p>";
    }

    // Column sums and averages
    echo "<h3>Column Sums and Averages:</h3>";
    for ($j = 0; $j < $N; $j++) {
        echo "<p>Column $j - Sum: {$colSums[$j]}, Average: {$colAverages[$j]}</p>";
    }

    // Diagonal sums
    echo "<h3>Diagonal Sums:</h3>";
    echo "<p>Main Diagonal Sum: $mainDiagonalSum</p>";
    echo "<p>Secondary Diagonal Sum: $secondaryDiagonalSum</p>";

    // Row and Column Min/Max
    echo "<h3>Row Min/Max:</h3>";
    for ($i = 0; $i < $N; $i++) {
        echo "<p>Row $i - Min: {$minMax['row'][$i]['min']}, Max: {$minMax['row'][$i]['max']}</p>";
    }

    echo "<h3>Column Min/Max:</h3>";
    for ($j = 0; $j < $N; $j++) {
        echo "<p>Column $j - Min: {$minMax['column'][$j]['min']}, Max: {$minMax['column'][$j]['max']}</p>";
    }
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
