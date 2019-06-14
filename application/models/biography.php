<?php

//This is the model, the model communicates with the database and performs all of the queries to send back to the controller
class Biography extends Model{


    //The biography table can contain several revisions to my bio so this will grab the most recent version
    public function getActiveBio(){
        $sql= "SELECT * FROM biography WHERE active = 1 ORDER BY dateActive DESC LIMIT 1";
        $bio = $this->database->getRow($sql);
        //Returns recordID, subheading, dateActive, active, about
        return $bio;
    }



}