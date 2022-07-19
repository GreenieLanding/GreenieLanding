<?php

class userDAO{
    public function addUser($name,$name1,$email,$country,$company,$phone,$department,$role){
        $conn = new ConnectionManager();
        $pdo = $conn->getConnection();


        $sql = "INSERT into user (name, name1, email, country,company,phone,department,role) 
        values (:name, :name1, :email, :country, :phone,:department,:role)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":name1", $name1, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":country", $country, PDO::PARAM_STR);
        $stmt->bindParam(":company", $company, PDO::PARAM_STR);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_INT);
        $stmt->bindParam(":department", $department, PDO::PARAM_STR);
        $stmt->bindParam(":role", $role, PDO::PARAM_STR);


        $isOk = $stmt->execute(); // it returns True if the query has been executed successfully

        $stmt->closeCursor();
        $pdo = null;

        return $isOk;
    }
}


?>