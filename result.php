<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting CGPA from the form submission
    $cgpa1 = $_POST['cgpa1'];
    $cgpa2 = $_POST['cgpa2'];
    $cgpa3 = $_POST['cgpa3'];
    $cgpa4 = $_POST['cgpa4'];
    $cgpa5 = $_POST['cgpa5'];
    $cgpa6 = $_POST['cgpa6'];
    $cgpa7 = $_POST['cgpa7'];
    $cgpa8 = $_POST['cgpa8'];

    // Calculate the average CGPA
    $totalCgpa = $cgpa1 + $cgpa2 + $cgpa3 + $cgpa4 + $cgpa5 + $cgpa6 + $cgpa7 + $cgpa8;
    $averageCgpa = $totalCgpa / 8;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        h3 {
            margin-top: 20px;
            color: #555;
        }

        p {
            font-size: 16px;
            color: #333;
        }

        .cgpa-item {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }

        .result {
            margin-top: 30px;
            font-size: 18px;
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>CGPA Calculation Result</h2>
        
        <p>Your CGPA for Semester 1 to 8 is:</p>
        
        <div class="cgpa-item"><?php echo "Semester 1: $cgpa1"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 2: $cgpa2"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 3: $cgpa3"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 4: $cgpa4"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 5: $cgpa5"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 6: $cgpa6"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 7: $cgpa7"; ?></div>
        <div class="cgpa-item"><?php echo "Semester 8: $cgpa8"; ?></div>

        <div class="result">
            <h3>Average CGPA:</h3>
            <p><?php echo "Your Average CGPA is: " . number_format($averageCgpa, 2); ?></p>
        </div>

        <p><a href="reg.php">Go back to Registration Form</a></p>
    </div>

</body>
</html>
