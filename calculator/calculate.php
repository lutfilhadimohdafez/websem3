<?php
// Ensure inputs are provided and are valid
if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operation'])) {
    // Get input values
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = null;
    $equation = "";
    // Perform calculation based on operation
    switch ($operation) {
        case "add":
            $result = $number1 + $number2;
            $equation = "$number1 + $number2 = $result";
            break;
        case "subtract":
            $result = $number1 - $number2;
            $equation = "$number1 - $number2 = $result";
            break;
        case "multiply":
            $result = $number1 * $number2;
            $equation = "$number1 * $number2 = $result";
            break;
        case "divide":
            if ($number2 == 0) {
                $equation = "Error: Division by zero!";
            } else {
                $result = $number1 / $number2;
                $equation = "$number1 / $number2 = $result";
            }
            break;
        default:
            $equation = "Invalid operation!";
            break;
    }
    // Display the equation and result
    echo "<h1>Calculation Result</h1>";
    echo "<h2>Result: $equation</h2>";
    echo "<br><a href='/websem3/index.php'>Go Back to Calculator</a>";
} else {
    echo "Invalid input or missing data. Please go back and fill out the form correctly.";
    echo "<br><a href='/websem3/index.php'>Go Back to Calculator</a>";
}
?>