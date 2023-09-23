<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>

    <style>
        <?php include 'css/comparison_tool.css' ?>
    </style>
</head>

<body>
    <!-- //Task 6: Comparison Tool

/*
Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 

Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.

Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result 
*/-->
    <div class="af-container">
        <div class="af-sec-row">
            <div class="af-form-box">

                <h1 class="box-title">Comparison Tool</h1>

                <form method="post" action="">
                    <label for="number1">Enter the first number:</label>
                    <input type="number" name="number1" id="number1" required><br>

                    <label for="number2">Enter the second number:</label>
                    <input type="number" name="number2" id="number2" required><br>

                    <input type="submit" name="compare" value="Compare">
                </form>

                <?php
                // Check if the form is submitted
                if (isset($_POST['compare'])) {
                    // Get user input values
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];

                    // Use the ternary operator to determine the larger number
                    $largerNumber = ($number1 > $number2) ? $number1 : $number2;

                    // Display the result
                    echo "<p>The larger number is: $largerNumber</p>";
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html>