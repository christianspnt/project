<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .info {
            margin-bottom: 20px;
            text-align: center;
        }
        .info p {
            margin: 5px 0;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }
        .item {
            text-align: center;
            border: 2px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background-color: #f8f9fa;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }
        .item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .item img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
            object-fit: cover;
        }
        .item a {
            display: block;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer p {
            font-size: 12px;
            color: #666;
        }
        .item a {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the PHP Project</h1>
    <div class="info">
            <p><strong>Full Name:</strong> Penote, Christian Rey S.</p>
            <p><strong>Course:</strong> BSIS</p>
            <p><strong>Year & Section:</strong> 3rd Year - III-2</p>
        </div>
    
    <div class="grid">
        <!-- Page 1: Curriculum Vitae -->
        <div class="item" onclick="location.href='resume.php'">
            <a href="resume.php">
                <img src="images/cv.png" alt="CV Icon">
                <span>Curriculum Vitae (CV)</span>
            </a>
        </div>
        
        <!-- Page 2: The Use of Variables -->
        <div class="item" onclick="location.href='page2.php'">
            <a href="page2.php">
                <img src="images/independent-variable.png" alt="Variables Icon">
                <span>The Use of Variables</span>
            </a>
        </div>
        
        <!-- Page 3: Manipulating Numbers -->
        <div class="item" onclick="location.href='page3.php'">
            <a href="page3.php">
                <img src="images/number-blocks.png" alt="Numbers Icon">
                <span>Manipulating Numbers</span>
            </a>
        </div>
        
        <!-- Page 4: Using Math Functions -->
        <div class="item" onclick="location.href='page4.php'">
            <a href="page4.php">
                <img src="images/function.png" alt="Math Functions Icon">
                <span>Using Math Functions</span>
            </a>
        </div>
        
        <!-- Page 5: Using Constants -->
        <div class="item" onclick="location.href='page5.php'">
            <a href="page5.php">
                <img src="images/constant.png" alt="Constants Icon">
                <span>Using Constants</span>
            </a>
        </div>
        
        <!-- Page 6: Selection Statements -->
        <div class="item" onclick="location.href='page6.php'">
            <a href="page6.php">
                <img src="images/settings.png" alt="Selection Statements Icon">
                <span>Selection Statements</span>
            </a>
        </div>
        
        <!-- Page 7: Loop Statements -->
        <div class="item" onclick="location.href='page7.php'">
            <a href="page7.php">
                <img src="images/loop.png" alt="Loop Statements Icon">
                <span>Loop Statements</span>
            </a>
        </div>
        
        <!-- Page 8: User-defined Functions -->
        <div class="item" onclick="location.href='page8.php'">
            <a href="page8.php">
                <img src="images/web-browser.png" alt="User-defined Functions Icon">
                <span>User-defined Functions</span>
            </a>
        </div>
        
        <!-- Page 9: Single-dimensional Array -->
        <div class="item" onclick="location.href='page9.php'">
            <a href="page9.php">
                <img src="images/1d-array.png" alt="Array Icon">
                <span>Single-dimensional Array</span>
            </a>
        </div>
        
        <!-- Page 10: Two-dimensional Array -->
        <div class="item" onclick="location.href='page10.php'">
            <a href="page10.php">
                <img src="images/math.png" alt="2D Array Icon">
                <span>Two-dimensional Array</span>
            </a>
        </div>
    </div>

    <div class="footer">
        <p>Created by [Your Name] | Date: <?php echo date('F d, Y'); ?></p>
    </div>
</div>

</body>
</html>
