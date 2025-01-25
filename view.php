<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting data from the form
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $subject = $_POST['subject'];

    // Collecting CGPA from each semester
    $cgpa1 = $_POST['cgpa1'];
    $cgpa2 = $_POST['cgpa2'];
    $cgpa3 = $_POST['cgpa3'];
    $cgpa4 = $_POST['cgpa4'];
    $cgpa5 = $_POST['cgpa5'];
    $cgpa6 = $_POST['cgpa6'];
    $cgpa7 = $_POST['cgpa7'];
    $cgpa8 = $_POST['cgpa8'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Information</title>
</head>
<body>
    <h2>Student Information</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Roll:</strong> <?php echo htmlspecialchars($roll); ?></p>
    <p><strong>Subject:</strong> <?php echo htmlspecialchars($subject); ?></p>

    <h3>CGPA for Each Semester</h3>
    <p><?php echo "Semester 1: $cgpa1"; ?></p>
    <p><?php echo "Semester 2: $cgpa2"; ?></p>
    <p><?php echo "Semester 3: $cgpa3"; ?></p>
    <p><?php echo "Semester 4: $cgpa4"; ?></p>
    <p><?php echo "Semester 5: $cgpa5"; ?></p>
    <p><?php echo "Semester 6: $cgpa6"; ?></p>
    <p><?php echo "Semester 7: $cgpa7"; ?></p>
    <p><?php echo "Semester 8: $cgpa8"; ?></p>

    <form action="result.php" method="POST">
        <!-- Sending data to result.php -->
        <input type="hidden" name="cgpa1" value="<?php echo $cgpa1; ?>">
        <input type="hidden" name="cgpa2" value="<?php echo $cgpa2; ?>">
        <input type="hidden" name="cgpa3" value="<?php echo $cgpa3; ?>">
        <input type="hidden" name="cgpa4" value="<?php echo $cgpa4; ?>">
        <input type="hidden" name="cgpa5" value="<?php echo $cgpa5; ?>">
        <input type="hidden" name="cgpa6" value="<?php echo $cgpa6; ?>">
        <input type="hidden" name="cgpa7" value="<?php echo $cgpa7; ?>">
        <input type="hidden" name="cgpa8" value="<?php echo $cgpa8; ?>">

        <input type="submit" value="Go to CGPA Result">
    </form>
</body>
</html>
