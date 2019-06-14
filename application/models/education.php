<?php

//This is the model, the model communicates with the database and performs all of the queries to send back to the controller
class Education extends Model{


    //Retrieve the education in descending order
    public function getEducation(){
        $sql= "SELECT * FROM education ORDER BY startDate ASC";
        $education = $this->database->getAll($sql);
        //Returns recordID, Name, startDate, endDate, ProgramTitle, Description, Location, WebLink
        return $education;
    }



}