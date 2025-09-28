<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <h1>PHP Calculator</h1>
    <br>
    <form method="post">
        <table>
            <tr>
                <th>Operation</th>
                <th>Number 1</th>
                <th>Number 2</th>
                <th>Result</th>
            </tr>
            <tr>
                <td><label for="operations"></label>
                    <select name="operations" id="operationstable">
                        <option value="add">+</option>
                        <option value="subtract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                </td>
                <td><input type="number" name="number1" id="number1" required></td>
                <td><input type="number" name="number2" id="number2" required></td>
                <td><input type="number" name="result" id="result" value="0"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php


    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operations"];



    switch ($operation) {
        case "add":
            $result = $number1 + $number2;
            echo "<script>document.getElementById('result').value = $result;</script>";
            break;
        case "subtract":
            $result = $number1 - $number2;
            echo "<script>document.getElementById('result').value = $result;</script>";
            break;
        case "multiply":
            $result = $number1 * $number2;
            echo "<script>document.getElementById('result').value = $result;</script>";
            break;
        case "divide":
            if ($number2 != 0) {
                $result = $number1 / $number2;
                echo "<script>document.getElementById('result').value = $result;</script>";
            } else {
                $result = "Division by zero error";
            }
            break;
        default:
            $result = "Invalid operation";
    }


    ?>

</body>

</html>