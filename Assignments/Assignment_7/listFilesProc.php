

<?php

Class listFiles{





    function listFilesProc(){

        require_once 'Crud.php';

        $output = "";

        $crud = new Crud();

        $results = $crud->getNames('list');

        $output = $results;

        return $output;
            


    }



}


?>