
<?php
 require_once 'Crud.php';
class FileUpload{
    

function processFile(){

    require_once 'Crud.php';


// formFile refers to the name of the file input on the form
if ($_FILES["formfile"]["error"] == 4){
    return "<p>No file was uploaded. Make sure you choose a file to upload.</p>";
}


elseif  (  $_FILES["formfile"]["size"]  >  100000  ) {

    return "<p>The file was too large</p>";
}

elseif($_FILES["formfile"]["type"] != "application/pdf"){

    return "<p>PDF only, please</p>";
}

// elseif (!move_uploaded_file( $_FILES["formFile"]["tmp_name"], "/home/e/l/elixey/public_html/fileFolder7/" . $_POST['fileNameInput']))
//     return "<p>Sorry, there was a problem uploading that file.</p>";
else{

   $crud = new Crud();
   
   return $crud->addName();

    

    // $STH = $DBH->("INSERT  INTO  assignment7 (file_name, file_path) value (:name, :path)"); 
   
    // $name  =   $_POST['fileNameInput'];
    // $path  =  "/home/e/l/elixey/public_html/Assignments/Assignment_7/pdfFiles/newsletterorform"; 
     
    // $STH->execute();


    // return "<p>File uploaded, thank you!</p>";

}


}

}
?>