<?php

//This is the model, the model communicates with the database and performs all of the queries to send back to the controller
class Careers extends Model{


    //Retrieve the education in descending order
    public function getCareers(){
        $sql= "SELECT * FROM careers ORDER BY startDate ASC";
        $careers = $this->database->getAll($sql);
        //Returns recordID, Name, startDate, endDate, ProgramTitle, Description, Location, WebLink
        return $careers;
    }



}