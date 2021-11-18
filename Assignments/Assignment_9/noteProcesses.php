
<?php

require 'Pdo_methods.php';


class NoteProc extends PdoMethods
{




    public function addNote()
    {

        if($_POST['dateTime']==null){

            return "You must enter a date and time!";
        }
        if($_POST['textarea1']==null){

            return "You must enter a note!";
        }

        $pdo = new PdoMethods();

        /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
        $sql = "INSERT INTO notes (time1, note) VALUES (:time, :note)";

        date_default_timezone_set('America/Detroit');
        $convertedTime = strtotime($_POST['dateTime']);

        /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
        $bindings = [
            [':time', $convertedTime, 'int'],
            [':note', $_POST['textarea1'], 'str']

        ];

        /* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
        $result = $pdo->otherBinded($sql, $bindings);

        /* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
        if ($result === 'error') {
            return 'There was an error adding the note';
        } else {
            return 'Note has been added';
        }
        

    }

    public function displayNotes(){
        	
            $output = "";
            /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
            $pdo = new PdoMethods();

            date_default_timezone_set('America/Detroit');
            $beginDate = strtotime($_POST['begDate']);
            $endDate = strtotime($_POST['endDate']);
    
            /* CREATE THE SQL */
            $sql = "SELECT * FROM notes where time1 between $beginDate and $endDate ORDER BY time1 DESC";
    
            //PROCESS THE SQL AND GET THE RESULTS
            $records = $pdo->selectNotBinded($sql);
    
            /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
            if($records == 'error'){
                return 'There has been an error processing your request';
            }
            else {
                if(count($records) != 0){
                    
                    //build table here

                    foreach($records as $key => $value){

                        $tempTime =$value['time1'];
                        $time2 = date("\T\h\\e jS \o\\f F, Y, \a\\t g:i A", $tempTime);

                        $output.= "<tr style = 'border:1px;'><td style ='padding:5px; border:1px; text-align:center'>$time2</td><td style ='padding:5px; border:1px; text-align:center'>{$value['note']}</td></tr> ";



                    }

                    return $output;


                }
                else {
                    return '<h2>Sorry! No notes found!</h2>';
                }
            }
        
        
    }



}


?>