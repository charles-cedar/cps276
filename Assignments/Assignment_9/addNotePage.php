 <?php 

$output ="";

// submitbtn is linked to the button
if (isset( $_POST["submitBtn"])){
    require_once 'noteProcesses.php';
    $noteProc = new NoteProc();
	$output = $noteProc->addNote();
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
<h1>Add Note</h1>

<a href="displayNotePage.php">Display Notes</a>
   <br>
   <p></p>
    <!-- echo out result here -->
    <div> <?php echo $output; ?></div>
    

<form action="addNotePage.php" method="post"> 
<p>Date and Time</p>
<input  type="datetime-local"  class="form-control"  id="dateTime"  name="dateTime"> 
<br>
<div class="mb-3">
  <label for="textarea1" class="form-label">Note</label>
  <textarea class="form-control" id="textarea1" name="textarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary" name="submitBtn">Add Note</button>

</div>

</form>


</body>

</html>