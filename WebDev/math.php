<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 4: Using Math Functions</title>
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
            table-layout: fixed;
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
    <h1>Page 4: Using Math Functions</h1>

    <?php
    // Declare 5 floating-point numbers
    $float1 = 15.75;
    $float2 = 9.5;
    $float3 = 3.14;
    $float4 = 7.89;
    $float5 = 2.67;

    // Declare 5 whole numbers
    $int1 = 10;
    $int2 = -25;
    $int3 = 50;
    $int4 = 33;
    $int5 = 6;
    ?>

    <!-- Table 1: Declared Floating-point and Whole Numbers -->
    <table>
        <tr>
            <th>Number Type</th>
            <th>Declared Numbers</th>
        </tr>
        <tr>
            <td>Floating-point Numbers</td>
            <td><?php echo implode(", ", array($float1, $float2, $float3, $float4, $float5)); ?></td>
        </tr>
        <tr>
            <td>Whole Numbers</td>
            <td><?php echo implode(", ", array($int1, $int2, $int3, $int4, $int5)); ?></td>
        </tr>
    </table>

    <?php
    // Use PHP math functions and display results in a table
    $results = array(
        "Absolute value of $int2" => abs($int2),
        "Round $float1" => round($float1),
        "Ceil of $float2" => ceil($float2),
        "Floor of $float3" => floor($float3),
        "Square root of $int3" => sqrt($int3),
        "$int1 raised to the power of 3" => pow($int1, 3),
        "Max value between $float4 and $int4" => max($float4, $int4),
        "Min value between $float5 and $int5" => min($float5, $int5),
        "Sine of $float3" => sin($float3),
        "Cosine of $float3" => cos($float3),
        "Tangent of $float3" => tan($float3),
        "Random number between 1 and 100" => rand(1, 100),
        "Better random number between 1 and 100" => mt_rand(1, 100),
        "Natural logarithm of $int5" => log($int5),
        "Exponential of $int1" => exp($int1),
    );
    ?>

    <!-- Table 2: Math Functions and Results -->
    <table>
        <tr>
            <th>Math Function</th>
            <th>Result</th>
        </tr>
        <?php foreach ($results as $function => $result): ?>
        <tr>
            <td><?php echo $function; ?></td>
            <td><?php echo $result; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="back">
        <a href="main.php">← Back to Main Page</a>
    </div>

    <div class="footer">
        <p>Created by [Penote, Christian Rey S.] | Date: October 20, 2024</p>
    </div>
</div>

</body>
</html>
