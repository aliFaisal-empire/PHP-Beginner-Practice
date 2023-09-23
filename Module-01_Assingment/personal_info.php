<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- // Task 1: Personal Information Page


/* Create a PHP file named personal_info.php that displays 
your personal information using variables and the echo statement. 
Include your name, age, country, and a brief introduction. */ -->

    <div class="af-container">
        <div class="af-sec-row">
            <div class="af-box-info">
                <?php

                $name = "Ali Muhammad Faisal";
                $age = 36;
                $country = "Bangladesh";

                printf("Brief Introduction: Hello!! I'm %s and I'm %d years old. I think that in this little life's journey of mine, I am a struggling sailor because of my beautiful country,%s.", $name, $age, $country);
                 // echo PHP_EOL;
                
                echo "\n" . PHP_EOL;


                $personalInfo = sprintf("Brief Introduction: Hello!! I'm %s and I'm %d years old. I think that in this little life's journey of mine, I am a struggling sailor because of my beautiful country,%s.", $name, $age, $country);

                echo $personalInfo;

                echo "\n" . PHP_EOL;


                $briefIntroduction = "Brief Introduction: Hello I'm $name and I'm $age years old. I think that in this little life's journey of mine, I am a struggling sailor because of my beautiful country, $country.";

                echo $briefIntroduction;

                ?>
            </div>
        </div>
    </div>

</body>

</html>