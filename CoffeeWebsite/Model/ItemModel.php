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
            //echo($row[0]);
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
            //echo($row[0]);
            array_push($items_array, $row[0]);
        }
        return $items_array;
       
    }
    
    function GetItemCategoryByName($itemname){
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT category FROM wholeitemsset WHERE name = '$itemname'";
        $result = mysql_query($query) or die(mysql_error());
        $category ='';
        while($row = mysql_fetch_array($result)){         
            //echo($row[0]);
            $category = $row[0];
        }
        return $category;
       
    }
    
    function GetItemUrlByName($itemname) {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT image FROM wholeitemsset WHERE name = '$itemname'";
        $result = mysql_query($query) or die(mysql_error());
        $image  = '';
        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
             $image = $row[0];
        }
        //Close connection and return result
        mysql_close();
        return $image;   
    }
    
    function GetItemsCategoryArrayFromTable() {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $result = mysql_query("SELECT DISTINCT category FROM wholeitemsset") or die(mysql_error());
        $categ = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            array_push($categ, $row[0]);
        }

        //Close connection and return result.
        mysql_close();
        return $categ;
    }
    
    
    function GetItemById($itemid) {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT * FROM wholeitemsset WHERE id = '$itemid'";
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
    
    function GetItemsIdArrayFromTable(){
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($shopdb);
        $query = "SELECT id FROM wholeitemsset";
        $result = mysql_query($query) or die(mysql_error());
        $items_array = array();
        while($row = mysql_fetch_array($result)){         
            array_push($items_array, $row[0]);
        }
        return $items_array;
       
    }
}

?>
