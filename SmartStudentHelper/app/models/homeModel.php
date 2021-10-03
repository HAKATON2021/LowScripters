<?php
require_once ROOT."/app/core/connection.php";
class homeModel{

    public function start(){
        
    }

    public function getEvents(){
        $connection = Connection::getConnection();

        $checkName = $connection->prepare("SELECT * FROM `events` WHERE 1");
        $checkName->execute();
        
        return $checkName;
    }

    public function createEvent($evName, $evDesc, $evDate, $evTime, $evLoc, $evOrg){
        $connection = Connection::getConnection();

        $checkName = $connection->prepare("INSERT INTO events(evName, evDescription, evOrganisator, evDate, evTime, evLocation) VALUE (:evName, :evDesc, :evOrg, :evDate, :evTime, :evLoc)");
        $checkName->execute([
            ":evName"=>$evName,
            ":evDesc"=>$evDesc,
            ":evOrg"=>$evOrg,
            ":evDate"=>$evDate,
            ":evTime"=>$evTime,
            ":evLoc"=>$evLoc,
        ]);

    }

    public function deleteEvent($id){
        $connection = Connection::getConnection();

        $checkName = $connection->prepare("DELETE FROM `events` WHERE id=:id");
        $checkName->execute([
            ":id"=>$id,
        ]);
    }
}