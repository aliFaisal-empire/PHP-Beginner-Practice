<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        <?php include 'css/common_style.css' ?>
    </style>
</head>

<body>
    <!-- //Task 3: Grade Calculator


/*
Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 

Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).

Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F) 
*/-->

    <div class="af-container">
        <div class="af-sec-row">
            <div class="af-form-box">

                <h1 class="af-box-title">Grade Calculator</h1>

                <form method="post" action="">

                    <label for="scores1">Test-1 Scores</label>
                    <input type="number" name="test1Scores" id="" required>

                    <label for="scores2">Test-2 Scores</label>
                    <input type="number" name="test2Scores" id="" required>

                    <label for="scores3">Test-3 Scores</label>
                    <input type="number" name="test3Scores" id="" required>
                    <input type="submit" name="scores" value=" Result Grade">
                </form>

                <div class="af-output-result">
                    <?php

                    // Calculate Score from input-form
                    
                    if (isset($_POST['scores'])) {

                        //Get input scores from users
                        $TEST_1 = $_POST['test1Scores'];
                        $TEST_2 = $_POST['test2Scores'];
                        $TEST_3 = $_POST['test3Scores'];
                        $SCORE = ($TEST_1 + $TEST_2 + $TEST_3) / 3;

                        // TODO: We can output using if/else if statement
                    
                        if ($SCORE >= 70 && $SCORE < 80) {
                            echo "Grade-A";
                        } elseif ($SCORE >= 60 && $SCORE < 70) {
                            echo "Grade-B";
                        } elseif ($SCORE >= 50 && $SCORE < 60) {
                            echo "Grade-C";
                        } elseif ($SCORE >= 40 && $SCORE < 50) {
                            echo "Grade-D";
                        } else {
                            echo "Grade-F";
                        }


                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

</body>

</html>