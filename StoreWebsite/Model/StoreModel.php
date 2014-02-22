<?php

require ("Entities/StoreEntity.php");

//Contains database related code for the Coffee page.
class StoreModel {

    //Get all coffee types from the database and return them in an array.
    function GetStoreDistance() {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $result = mysql_query("SELECT DISTINCT distance FROM storedistance") or die(mysql_error());
        $range = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            array_push($range, $row[0]);
        }

        //Close connection and return result.
        mysql_close();
        return $range;
    }

    //Get storeEntity objects from the database and return them in an array.
    function GetStoreByDistance($distance) {
        require ('Credentials.php');
        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($shopdb);
        if($distance!= '%')
            $query = "SELECT * FROM storedistance WHERE distance = $distance ";
        else
            $query = "SELECT * FROM storedistance";
        $result = mysql_query($query) or die(mysql_error());
        $storeArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $id = $row[0];
            $name = $row[1];
            $distance = $row[2];
            $image = $row[3];
            //Create store objects and store them in an array.
            $store = new storeEntity($id, $name, $distance, $image);
            array_push($storeArray, $store);
        }
        //Close connection and return result
        mysql_close();
        return $storeArray;
    }

    function GetCoffeeById($id) {
        require ('Credentials.php');
        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM coffee WHERE id = $id";
        $result = mysql_query($query) or die(mysql_error());

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $roast = $row[4];
            $country = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Create coffee
            $coffee = new CoffeeEntity($id, $name, $type, $price, $roast, $country, $image, $review);
        }
        //Close connection and return result
        mysql_close();
        return $coffee;
    }

    function InsertCoffee(CoffeeEntity $coffee) {
        $query = sprintf("INSERT INTO coffee
                          (name, type, price,roast,country,image,review)
                          VALUES
                          ('%s','%s','%s','%s','%s','%s','%s')",
                mysql_real_escape_string($coffee->name),
                mysql_real_escape_string($coffee->type),
                mysql_real_escape_string($coffee->price),
                mysql_real_escape_string($coffee->roast),
                mysql_real_escape_string($coffee->country),
                mysql_real_escape_string("Images/Coffee/" . $coffee->image),
                mysql_real_escape_string($coffee->review));
        $this->PerformQuery($query);
    }

    function UpdateCoffee($id, CoffeeEntity $coffee) {
        $query = sprintf("UPDATE coffee
                            SET name = '%s', type = '%s', price = '%s', roast = '%s',
                            country = '%s', image = '%s', review = '%s'
                          WHERE id = $id",
                mysql_real_escape_string($coffee->name),
                mysql_real_escape_string($coffee->type),
                mysql_real_escape_string($coffee->price),
                mysql_real_escape_string($coffee->roast),
                mysql_real_escape_string($coffee->country),
                mysql_real_escape_string("Images/Coffee/" . $coffee->image),
                mysql_real_escape_string($coffee->review));
                          
        $this->PerformQuery($query);
    }

    function DeleteCoffee($id) {
        $query = "DELETE FROM coffee WHERE id = $id";
        $this->PerformQuery($query);
    }

    function PerformQuery($query) {
        require ('Credentials.php');
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);

        //Execute query and close connection
        mysql_query($query) or die(mysql_error());
        mysql_close();
    }
}
?>
