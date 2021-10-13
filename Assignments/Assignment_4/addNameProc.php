<?php
 
 

class AddNamesProc{

   //private $nameList = array();
   



    public function addClearNames(){

        //$output = "";

        if(isset($_POST['addButton'])){
           
            //global $nameList;

            //Turn the name into an array and then flip it
            $tempVar = $_POST['nameBox'];
            $nameArray = explode(" ", $tempVar);
            $flippedName = $nameArray[1].", ".$nameArray[0];

            //Turn old textbox string into an array, sort it, and then put it back into a string
            $oldOutput = $_POST['nameList'];
            $oldArr = explode("\n", $oldOutput);
            $oldArr[] = $flippedName;
            sort($oldArr);

            $output = implode("\n", $oldArr);

            //array_push($this->nameList, $tempVar);    //$this->nameList

           //$nameList[] = $tempVar;
            

        //    foreach($this->nameList as $name){
        //         $output .=$name."\n";
        //    }

           return $output;
        }

        if(isset($_POST['clearButton'])){


        }
        


    }

}
