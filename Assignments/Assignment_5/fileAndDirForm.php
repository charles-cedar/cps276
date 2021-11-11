
<?php

$output ="";

if (count($_POST) > 0) {
    require_once 'fileAndDirLogic.php';
    $directory = new Directories();
    $output = $directory->mkDirProcess();
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>File and Directory Assignment</title>
</head>
<body>
    
<div style="padding: 50px;">
        <h1>File and Directory Assignment</h1>
        <p>Enter a folder name and the contents of a file.  Folder names should contain alpha numeric characters only.</p>

    <div class="mb-3" style="padding-bottom: 10px; padding-top: 10px;">
    <?php echo $output ?>
    </div >

        <form action="fileAndDirForm.php" method="post">
        
        <div class="mb-3">
            <label for="folderBox" class="form-label">Folder name:</label>
            <input type="text" class="form-control" id="folderBox" name="folderBox">
        </div>
        <div class="mb-3">
            <label for="fileContent" class="form-label">File Content</label>
            <textarea style="height: 500px;" class="form-control" id="fileContent" name="fileContent" rows="3"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="submit" id="submitButton" name="SubmitButton">Submit</button>
        </div>
        </form>

    </div>


</body>
</html>