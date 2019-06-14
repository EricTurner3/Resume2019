<?php

//This is the model, the model communicates with the database and performs all of the queries to send back to the controller
class Abilities extends Model{


    //Retrieve skills by ranking of stars (by type: Skill, Language or Tool)
    public function getInfo($type){
        $sql= "SELECT * FROM abilities WHERE Type = ? ORDER BY Stars DESC ";
        $ability = $this->database->getAll($sql, array($type));
        //Returns recordID, Name, SubInfo, Stars, Type
        return $ability;
    }



}