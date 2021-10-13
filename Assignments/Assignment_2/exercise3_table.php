<?php

$columns =5;
$rows = 15;

$tableOutput ="";

for($i=1; $i<=$rows; $i++){

        $tableOutput.= "<tr>";


        for($j=1; $j<=$columns; $j++){

            $tableOutput.="<td style ='padding:5px;'> Row $i Cell $j </td>";



        }


        $tableOutput.= "</tr>";


}



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
    
<table border="3"; style="padding: 5px ">

<?php echo $tableOutput ?>

</table>



</body>
</html>