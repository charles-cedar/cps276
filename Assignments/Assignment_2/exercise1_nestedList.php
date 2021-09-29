<?php

$mainListItems = 4;
$subListItems = 5;
$output = "";



//outer loop: main list items
$output .= "<ul>";
for($i=1; $i<=$mainListItems; $i++){

    $output .= "<li> $i  </li>";
     
     

    //inner Loop: sublist items
    $output .= "<ul>";
    for($j =1; $j <=$subListItems; $j++){

        $output .= "<li> $j</li>";
        
    }
    $output .= "</ul>";

} 
$output .= "</ul>";




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php echo $output; ?>
    </div>


    
</body>
</html>