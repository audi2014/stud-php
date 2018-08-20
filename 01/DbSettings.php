<?php 
//DbSettings.php
class DbSettings {
    public function getHost():string{
        return "la-cleaner-db.czxvgh5xzekx.us-west-1.rds.amazonaws.com";
    }
    public function getName():string{
        return "stud";
    }
    public function getUser():string{
        return "root";
    }
    public function getPassword():string{
        return '36beyonce';
    }
}