<?php


class User extends Manager{
    public function getAllUsers(){
        $statement = $this -> connectDB()->query("SELECT * FROM companies");
        $resultsAll = $statement ->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultsAll as $each => $resultsAll){
            echo $resultsAll['name_companies'] . "</br>";
        };

}


}


?>