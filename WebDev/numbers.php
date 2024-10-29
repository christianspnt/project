<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Page 3: Manipulating Numbers</title>
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
        p {
            margin: 10px 0;
        }
        .result {
            margin: 15px 0;
            font-weight: bold;
        }
        mark {
                background: rgb(216, 215, 215);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
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

    <?php
        // Midterm Quizzes
        $midterm_quizzes = array(85, 90, 88);
        $midterm_project = array(80);        
        $midterm_exam = 92;                   

        // Tentative Final Quizzes
        $final_quizzes = array(78, 84, 89, 90);
        $final_project = array(85, 88);         
        $final_exam = 91;                       

        // Calculating averages
        $midterm_avg_quizzes = array_sum($midterm_quizzes) / count($midterm_quizzes);
        $midterm_avg_project = array_sum($midterm_project) / count($midterm_project);
        $final_avg_quizzes = array_sum($final_quizzes) / count($final_quizzes);
        $final_avg_project = array_sum($final_project) / count($final_project);

        // Calculate Midterm and Tentative Final Grades
        $midterm_grade = ($midterm_avg_quizzes * 0.30) + ($midterm_avg_project * 0.20) + ($midterm_exam * 0.50);
        $tentative_final_grade = ($final_avg_quizzes * 0.30) + ($final_avg_project * 0.20) + ($final_exam * 0.50);

        // Final-final Grade (average of Midterm and Tentative Final Grades)
        $final_final_grade = ($midterm_grade + $tentative_final_grade) / 2;
    ?>

<div class="container">
    <h1>Page 3: Manipulating Numbers</h1>

    <table>
        <tr>
            <th>Assessment Type</th>
            <th>Midterm Scores</th>
            <th>Final Scores</th>
        </tr>
        <tr>
            <td>Quizzes</td>
            <td><?php echo implode(", ", $midterm_quizzes); ?></td>
            <td><?php echo implode(", ", $final_quizzes); ?></td>
        </tr>
        <tr>
            <td>Project</td>
            <td><?php echo implode(", ", $midterm_project); ?></td>
            <td><?php echo implode(", ", $final_project); ?></td>
        </tr>
        <tr>
            <td>Exam</td>
            <td><?php echo $midterm_exam; ?></td>
            <td><?php echo $final_exam; ?></td>
        </tr>
    </table>

    <?php
        echo "<p><strong> Midterm Grade:</strong> " . "<mark>" . round($midterm_grade, 2) . "</mark>" . "</p>";
        echo "<p><strong> Tentative Final Grade:</strong> " . "<mark>" .round($tentative_final_grade, 2) . "</mark>" . "</p>";
        echo "<p class='result'><mark><strong> Final-final Grade: </strong></mark>" . "<mark>" . round($final_final_grade, 2) . "</mark>" . "</p>";
    ?>

    <div class="back">
        <a href="main.php">← Back to Main Page</a>
    </div>

    <div class="footer">
        <p>Created by [Penote, Christian Rey S.] | Date: October 19, 2024</p>
    </div>
</div>

</body>
</html>
