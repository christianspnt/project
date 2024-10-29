<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 9: Single-dimensional Array</title>
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
    <h1>Single-dimensional Array</h1>
    
    <h2>Unsorted List of People</h2>

    <?php
    // 1. Initialize the parallel array with people's information
    $people = [
        ['name' => 'Christian Rey Sumayang', 'age' => 21, 'sex' => 'Male', 'nationality' => 'Filipino'],
        ['name' => 'Kathleah Tampus', 'age' => 20, 'sex' => 'Female', 'nationality' => 'Filipino'],
        ['name' => 'Germe Amparado', 'age' => 22, 'sex' => 'Female', 'nationality' => 'Filipino'],
        ['name' => 'Angela Matugas', 'age' => 21, 'sex' => 'Female', 'nationality' => 'Filipino'],
        ['name' => 'Elizer Ybanez', 'age' => 24, 'sex' => 'Male', 'nationality' => 'Filipino'],
        ['name' => 'Kenneth Piloton', 'age' => 23, 'sex' => 'Male', 'nationality' => 'Filipino'],
        ['name' => 'Clerene Agor', 'age' => 21, 'sex' => 'Male', 'nationality' => 'Filipino'],
        ['name' => 'Lawrence Logarta', 'age' => 22, 'sex' => 'Male', 'nationality' => 'Filipino'],
        ['name' => 'Charish Aying', 'age' => 23, 'sex' => 'Female', 'nationality' => 'Filipino'],
        ['name' => 'Natasha Ayuman', 'age' => 20, 'sex' => 'Female', 'nationality' => 'Filipino']
    ];

    // 2. Function to sort the array by name in ascending order
    function sortByName(&$array) {
        usort($array, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
    }

    // 3. Display the unsorted list
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Nationality</th>
            </tr>";
    foreach ($people as $person) {
        echo "<tr>
                <td>{$person['name']}</td>
                <td>{$person['age']}</td>
                <td>{$person['sex']}</td>
                <td>{$person['nationality']}</td>
            </tr>";
    }
    echo "</table>";

    // 4. Sort the array by name
    sortByName($people);

    // 5. Display the sorted list
    echo "<h2>Sorted List by Name</h2>";
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Nationality</th>
            </tr>";
    foreach ($people as $person) {
        echo "<tr>
                <td>{$person['name']}</td>
                <td>{$person['age']}</td>
                <td>{$person['sex']}</td>
                <td>{$person['nationality']}</td>
            </tr>";
    }
    echo "</table>";
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
