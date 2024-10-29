<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 5: Using Constants</title>
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
    <h1>Page 5: Using Constants</h1>

    <!-- Table to display constants and their values -->
    <table>
        <tr>
            <th>Constant</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Pi (M_PI)</td>
            <td><?php echo M_PI; ?></td>
        </tr>
        <tr>
            <td>Euler's Number (M_E)</td>
            <td><?php echo M_E; ?></td>
        </tr>
        <tr>
            <td>PHP Version (PHP_VERSION)</td>
            <td><?php echo PHP_VERSION; ?></td>
        </tr>
        <tr>
            <td>Operating System (PHP_OS)</td>
            <td><?php echo PHP_OS; ?></td>
        </tr>
        <tr>
            <td>Boolean True (TRUE)</td>
            <td><?php echo TRUE ? 'TRUE' : 'FALSE'; ?></td>
        </tr>
        <tr>
            <td>Boolean False (FALSE)</td>
            <td><?php echo FALSE ? 'TRUE' : 'FALSE'; ?></td>
        </tr>
        <tr>
            <td>Maximum Integer Value (PHP_INT_MAX)</td>
            <td><?php echo PHP_INT_MAX; ?></td>
        </tr>
        <tr>
            <td>Maximum Float Value (PHP_FLOAT_MAX)</td>
            <td><?php echo PHP_FLOAT_MAX; ?></td>
        </tr>
        <tr>
            <td>Directory Separator (DIRECTORY_SEPARATOR)</td>
            <td><?php echo "'" . DIRECTORY_SEPARATOR . "'"; ?></td>
        </tr>
        <tr>
            <td>Default Include Path (DEFAULT_INCLUDE_PATH)</td>
            <td><?php echo DEFAULT_INCLUDE_PATH; ?></td>
        </tr>
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
