<?php
    $course = "PHP Fundamentals First Steps";
    $price = 19.99;
    $published_date = "2024-06-01";
    $archived = true; //false
    // Option 3 - Best Practice: Ternary operator : separate logic and presentation
    $status= $archived ? "Archived" : "Active";
    $level =1; // 1: Beginner, 2: Intermediate, 3: Advanced
    $level_text = match($level){
        1 => "$course - Level Beginner, perfect for those starting with PHP ",
        2 => "$course - Level Intermediate, ideal for those with some PHP experience ",
        3 => "$course - Level Advanced, designed for experienced PHP developers ",
        default => "$course - Level Unknown",
    };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course; ?></title>
</head>
<body>
    <h1>Welcome to <?= $course; ?></h1>
    <p>Price: $<?= $price; ?></p>
    <p>Published on: <?= $published_date; ?></p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque similique, reprehenderit facilis error perferendis explicabo quam, consequuntur commodi placeat porro officia quas possimus et. Nam facere dolores consectetur voluptatem quasi?
    Cupiditate, expedita. Fuga a error architecto. Asperiores id a cum dolor saepe, vero quam blanditiis tempora beatae doloremque incidunt earum quae? Mollitia amet reprehenderit at molestias ex accusamus sunt quisquam.
    Cupiditate quibusdam iure vitae commodi reiciendis qui sint sit, ipsa et in labore ratione non cum dolore! Voluptates, iure quo? Reprehenderit in dolorum animi mollitia, voluptates expedita vel? Doloremque, libero.</p>

    <!-- Option 1 -->
    <!-- <?php 
        if ($archived){
            echo "<p>This course is archived.</p>";
        } else {
            echo "<p>This course is active.</p>";
        }    
    ?> -->
    <!-- Option 2 : Separed logic and presentation -->
    <!-- <?php if ($archived): ?>
        <p>This course is archived.</p>
    <?php else: ?>
        <p>This course is active.</p>
    <?php endif; ?> -->

    <!-- Option 3 : Ternary operator -->
    <p>This course is <?= $status; ?>.</p>
    <p><?= $level_text; ?></p>
</body>
</html>
