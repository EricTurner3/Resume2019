<?php

//This is the model, the model communicates with the database and performs all of the queries to send back to the controller
class Resume extends Model{


    public function getUserFromUserName($username){
        $sql="exec DeviceDamageApp.getUser ?";
        $results = $this->notifications->getRow($sql, array($username));
        //Returns UserID, FirstName, LastName, UserName
        return $results;
    }



}