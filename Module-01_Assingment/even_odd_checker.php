<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        <?php include 'css/even_odd_style.css' ?>
    </style>
</head>

<body>

    <!-- //EVEN OR ODD NUMBER CHECKER
/*
Build a PHP program that checks whether a given number is even or odd. 
Shows a form with an input field where the user can enter a number and a submit button.

When a user submits the data by clicking on "Submit".

the form data is sent to the file specified in the method attribute of the <form> tag. 
    
Display a message indicating whether the number is even or odd.

*/ -->


    <div class="af-container">

        <!-- SECTION-1-START -->
        <div class="af-sec-row">

            <div class="af-box">
                <div class="form-box-1">
                    <h1 class="box-title">Even Or Odd Number Checher</h1>
                    <form method="post" action="">
                        <input type="number" name="inputNumber1" placeholder="Enter Any Number">
                        <input type="submit" name="result1" value="Checker">
                    </form>

                    <?php
                    

                    //Even-Odd Checker Way-1: if the form is submitted
                    
                    if (isset($_POST['result1'])) {
                        
                        // Get user input values
                        $NUMBER = $_POST['inputNumber1'];
                        $RESULT = $_POST['result1'];
                        $remainder = $NUMBER % 2;

                        //TODO: Use if/else statement.
                        
                        if ($RESULT = ($remainder == 0)) {
                            echo "{$NUMBER} is Even Number";
                        } else {
                            echo "{$NUMBER} is ODD Number";
                        }
                    }
                    ?>

                </div>
            </div>

            <div class="af-box">
                <div class="form-box-2">
                    <h1 class="box-title">Even Or Odd Number Checher</h1>
                    <form method="post" action="">
                        <input type="number" name="inputNumber2" placeholder="Enter Any Number">
                        <input type="submit" name="result2" value="Checker">
                    </form>
                    <?php

                    //Even-Odd Checker Way-2: if the form is submitted
                    
                    if (isset($_POST['result2'])) {
                        
                        // Get user input values
                        $NUMBER = $_POST['inputNumber2'];
                        $RESULT = $_POST['result2'];
                        $remainder = $NUMBER % 2;

                        //TODO: Use Ternary Operator.
                        
                        $RESULT = ($remainder == 0) ? "{$NUMBER} is Even Number" : "{$NUMBER} is Odd Number";
                        echo $RESULT;
                    }
                    ?>
                </div>
            </div>

        </div>

        <!-- SECTION-1-CLOSING/ -->

        <!-- SECTION-2-START -->
        <div class="af-sec-row">
            
            <div class="af-box">
                <div class="form-box-1">
                    <h1 class="box-title">Even Or Odd Number Checher</h1>
                    <form method="post" action="">
                        <input type="number" name="inputNumber3" placeholder="Enter Any Number">
                        <input type="submit" name="result3" value="Checker">
                    </form>

                    <?php
                    
                   //Even-Odd Checker Way-3: if the form is submitted
                    
                    if (isset($_POST['result3'])) {

                        // Get user input values
                        $NUMBER = $_POST['inputNumber3'];
                        $RESULT = $_POST['result3'];
                        $remainder = $NUMBER % 2;

                        //TODO: Use match statement.

                        $RESULT = match ($remainder) {
                            0 => "Even",
                            1 => "Odd"
                        };
                        echo "{$NUMBER} is {$RESULT}";
                    }
                    ?>

                </div>
            </div>

            <div class="af-box">
                <div class="form-box-2">
                    <h1 class="box-title">Even Or Odd Number Checher</h1>
                    <form method="post" action="">
                        <input type="number" name=inputNumber4 placeholder="Enter Any Number">
                        <input type="submit" name="result4" value="Checker">
                    </form>
                    <?php

                    //Even-Odd Checker Way-4: if the form is submitted
                    
                    if (isset($_POST['result4'])) {

                        // Get user input values
                        $NUMBER = $_POST['inputNumber4'];
                        $RESULT = $_POST['result4'];
                        $remainder = $NUMBER % 2;

                        //TODO: Use Switch statement

                        switch ($remainder) {
                            case 0:
                                echo "{$NUMBER} is Even Number";
                                break;

                            case 1:
                                echo "{$NUMBER} is Odd Number";
                                break;

                            default:
                                echo "Result is Nothing";
                        }
                    }
                    ?>
                </div>
            </div>

        </div>

        <!-- SECTION-2-CLOSING/ -->


    </div>

</body>

</html>