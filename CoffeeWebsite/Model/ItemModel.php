<?php
require ("Entities/ItemEntity.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemModel
 *
 * @author yang
 */
class ItemModel {
    function GetItemsNameArrayFromTable(){
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT name FROM wholeitemsset";
        $result = mysql_query($query) or die(mysql_error());
        $items_array = array();
        while($row = mysql_fetch_array($result)){         
            
            array_push($items_array, $row[0]);
        }
        return $items_array;
       
    }

     function GetItemsUrlArrayFromTable(){
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT image FROM wholeitemsset";
        $result = mysql_query($query) or die(mysql_error());
        $items_array = array();
        while($row = mysql_fetch_array($result)){         
           
            array_push($items_array, $row[0]);
        }
        return $items_array;
       
    }
    
    function GetItemByName($itemname) {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT * FROM wholeitemsset WHERE name = $itemname";
        $result = mysql_query($query) or die(mysql_error());

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $id = $row[0];
            $name = $row[1];
            $image = $row[2];
            $category = $row[3];

            //Create item
            $item = new ItemEntity($id, $name, $image, $category);
        }
        //Close connection and return result
        mysql_close();
        return $item;
   
    }
}

?>
