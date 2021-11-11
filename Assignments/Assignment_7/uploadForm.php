
<?php

$output ="";

// sendFile is linked to the button
if (isset( $_POST["sendFile"])){
    require_once 'fileUploadProc.php';
    $fileUpload = new FileUpload();
	$output = $fileUpload->processFile();
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
    <title>Upload Form</title>
</head>
<body style="margin:60px">
    <h1>File Upload</h1>

    <a href="listOfLinks.php">Show File List</a>
   <br>
   <p></p>
    <!-- echo out file list here -->
    <div> <?php echo $output; ?></div>

    <form action="uploadForm.php" method="post" enctype="multipart/form-data"> 

    <!-- name to be given to file -->
    <div class="mb-3">
  <label for="fileNameInput" class="form-label">File Name</label>
  <input type="text" class="form-control" id="fileNameInput" name="fileNameInput" >
</div>

<!-- file upload box -->
<div class="mb-3">
  <label for="formFile" class="form-label">Choose your file:</label>
  <input class="form-control" type="file" id="formFile" name="formfile">
</div>

<button type="submit" class="btn btn-primary btn-lg" name="sendFile">Upload</button>
    </form>

</body>
</html>