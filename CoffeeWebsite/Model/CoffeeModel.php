<?php
require ("Entities/CoffeeEntity.php");

//Contains database related code for the Coffee page.
class CoffeeModel {

    //Get all coffee types from the database and return them in an array.
    function GetCoffeeTypes() {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT family FROM coffee") or die(mysql_error());
        $familys = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            array_push($familys, $row[0]);
        }

        //Close connection and return result.
        mysql_close();
        return $familys;
    }

    //Get coffeeEntity objects from the database and return them in an array.
    function GetCoffeeByType($family) {
        require ('Credentials.php');
        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM coffee WHERE family LIKE '$family'";
        $result = mysql_query($query) or die(mysql_error());
        $coffeeArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $id = $row[0];
            $name = $row[1];
            $family = $row[2];
            $sex = $row[3];
            $parents = $row[4];
            $country = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Create coffee objects and store them in an array.
            $coffee = new CoffeeEntity($id, $name, $family, $sex, $parents, $country, $image, $review);
            array_push($coffeeArray, $coffee);
        }
        //Close connection and return result
        mysql_close();
        return $coffeeArray;
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
            $family = $row[2];
            $sex = $row[3];
            $parents = $row[4];
            $country = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Create coffee
            $coffee = new CoffeeEntity($id, $name, $family, $sex, $parents, $country, $image, $review);
        }
        //Close connection and return result
        mysql_close();
        return $coffee;
    }

    function InsertCoffee(CoffeeEntity $coffee) {
        $query = sprintf("INSERT INTO coffee
                          (name, family, sex,parents,country,image,review)
                          VALUES
                          ('%s','%s','%s','%s','%s','%s','%s')",
                mysql_real_escape_string($coffee->name),
                mysql_real_escape_string($coffee->family),
                mysql_real_escape_string($coffee->sex),
                mysql_real_escape_string($coffee->parents),
                mysql_real_escape_string($coffee->country),
                mysql_real_escape_string("Images/Coffee/" . $coffee->image),
                mysql_real_escape_string($coffee->review));
        $this->PerformQuery($query);
    }

    function UpdateCoffee($id, CoffeeEntity $coffee) {
        $query = sprintf("UPDATE coffee
                            SET name = '%s', family = '%s', sex = '%s', parents = '%s',
                            country = '%s', image = '%s', review = '%s'
                          WHERE id = $id",
                mysql_real_escape_string($coffee->name),
                mysql_real_escape_string($coffee->family),
                mysql_real_escape_string($coffee->sex),
                mysql_real_escape_string($coffee->parents),
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