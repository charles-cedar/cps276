<?php

$output = "";

if (count($_POST) > 0) {
    require_once 'addNameProc.php';
    $addName = new AddNamesProc();
    $output = $addName->addClearNames();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Name Form</title>
</head>

<body>
    <div style="padding: 50px;">
        <h1>ADD NAMES:</h1>
        <form action="nameForm.php" method="post">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="submit" id="addButton" name="addButton">Add Name</button>
            <button class="btn btn-primary" type="submit" id="clearButton" name="clearButton">Clear Names</button>
        </div>

        <div class="mb-3">
            <label for="nameBox" class="form-label">Enter name:</label>
            <input type="text" class="form-control" id="nameBox" name="nameBox" placeholder="John Smith">
        </div>
        <div class="mb-3">
            <label for="nameList" class="form-label">List of Names</label>
            <textarea style="height: 500px;" class="form-control" id="nameList" name="nameList" rows="3"><?php echo $output ?></textarea>
        </div>
        </form>

    </div>
</body>

</html>