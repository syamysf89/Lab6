<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 2;
        $width = 4;
        $area = calculateArea($length, $width);
    ?>

    <h2>The area of a rectangle with a width of 
        <?php echo $width; ?> and a length of <?php echo $length; ?>
        is: <?php echo $area; ?>
    </h2>
</body>
</html>
