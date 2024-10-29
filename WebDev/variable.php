<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 2: Use of Variables</title>
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
            position: relative;
            animation: rainbowShadow 3s infinite alternate;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        td small {
            display: block;
            font-size: 12px;
            color: #666;
        }
        td strong {
            font-size: 16px;
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

    <h1>Page 2: The Use of Variables</h1>

    <?php 
        // Whole numbers
        $age = 21;
        $birthYear = 2003;
        $height = 163;
        $phoneNumber = 9288974156;
        $yearLevel = 3;

        // Floating point numbers
        $GPA = 1.58;
        $typingSpeed = 32.5;
        $fbFollowers = 2.7;
        $shoeSize = 24.5;
        $weight = 42.3;

        // Strings
        $firstName = "Christian";
        $middleName = "Sumayang";
        $lastName = "Penote";
        $nickname = "June";
        $personalityType = "INTJ";

        // Characters
        $grade = 'A';
        $initial = 'S';
        $section = 'A';
        $currency = '₱';
        $symbol = '#';
    ?>

    <table>
        <tr>
            <th>Whole Numbers</th>
            <th>Floating Point Numbers</th>
            <th>Strings</th>
            <th>Characters</th>
        </tr>
        <tr>
            <td><small>Age</small><strong><?php echo $age; ?></strong></td>
            <td><small>GPA</small><strong><?php echo $GPA; ?></strong></td>
            <td><small>First Name</small><strong><?php echo $firstName; ?></strong></td>
            <td><small>Grade</small><strong><?php echo $grade; ?></strong></td>
        </tr>
        <tr>
            <td><small>Birth Year</small><strong><?php echo $birthYear; ?></strong></td>
            <td><small>Typing Speed</small><strong><?php echo $typingSpeed; ?></strong></td>
            <td><small>Middle Name</small><strong><?php echo $middleName; ?></strong></td>
            <td><small>Initial</small><strong><?php echo $initial; ?></strong></td>
        </tr>
        <tr>
            <td><small>Height (cm)</small><strong><?php echo $height; ?></strong></td>
            <td><small>Facebook Followers</small><strong><?php echo $fbFollowers; ?></strong></td>
            <td><small>Last Name</small><strong><?php echo $lastName; ?></strong></td>
            <td><small>Section</small><strong><?php echo $section; ?></strong></td>
        </tr>
        <tr>
            <td><small>Phone Number</small><strong><?php echo $phoneNumber; ?></strong></td>
            <td><small>Shoe Size (cm)</small><strong><?php echo $shoeSize; ?></strong></td>
            <td><small>Nickname</small><strong><?php echo $nickname; ?></strong></td>
            <td><small>Currency Symbol</small><strong><?php echo $currency; ?></strong></td>
        </tr>
        <tr>
            <td><small>Year Level</small><strong><?php echo $yearLevel; ?></strong></td>
            <td><small>Weight (kg)</small><strong><?php echo $weight; ?></strong></td>
            <td><small>Personality Type</small><strong><?php echo $personalityType; ?></strong></td>
            <td><small>Special Symbol</small><strong><?php echo $symbol; ?></strong></td>
        </tr>
    </table>

    <div class="back">
        <a href="main.php">← Back to Main Page</a>
    </div>

    <div class="footer">
        <p>Created by [Penote, Christian Rey S.] | Date: October 18, 2024</p>
    </div>
</div>

</body>
</html>
