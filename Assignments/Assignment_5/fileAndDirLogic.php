<?php


class Directories{

    public function mkDirProcess()
    {

        $newDirName = $_POST['folderBox'];
        $newFileContent = $_POST['fileContent'];
        //make path name here

        if(file_exists("Directories/".$newDirName)){

            return "Sorry! This directory already exists.";
        }else{

            //mkdir("http://157.230.11.71/Assignments/Assignment_5/Directories/".$newDirName);
            
            $pathName = "Directories/".$newDirName;
            $success = mkdir($pathName);

            if($success){

                touch($pathName."/readme.txt");

                $file = fopen($pathName."/readme.txt", "r+");

                fwrite($file, $newFileContent);
                fclose($file);
                
                return "<p>File and Directory Created</p> <p><a href='http://157.230.11.71/Assignments/Assignment_5/$pathName/readme.txt'>Click here to view your file</a></p>";

            }else{

                return "There was an error creating the directory";
            }

            ///<p>Directory Created</p><p>link to file</p>


            


        }



        
    }





}



?>