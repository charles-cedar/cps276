<?php

$output ="";

// submitbtn is linked to the button
if (isset( $_POST["submitBtn"])){
    require_once 'noteProcesses.php';
    $noteProc = new NoteProc();
	$output = $noteProc->displayNotes();
}
else {
	$output = "";
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div style="margin:50px">
<h1>Display Notes</h1>

<a href="addNotePage.php">Add Note</a>
<br>


<form action="displayNotePage.php" method="post">
<div >
    <br>
<input  type="date"  class="form-control"  id="begDate"  name="begDate"> 
<br>
<input  type="date"  class="form-control"  id="endDate"  name="endDate"> 
</div>
<br>
<button type="submit" class="btn btn-primary" name="submitBtn">Get Notes</button>

</form>
<br>
<div >

<table class="table table-striped" border="4px"; style="padding: 5px; width:100%">
<tr ><th style="text-align:center">DATE and TIME</th><th style="text-align:center"> NOTES</th> </tr>
<?php echo $output ?>

</table>

</div>


</div>

</body>
</html>