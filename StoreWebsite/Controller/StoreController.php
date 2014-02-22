<?php

require ("Model/StoreModel.php");

//Contains non-database related function for the Coffee page
class StoreController {

    function CreateStoreDropdownList() {
        $StoreModel = new StoreModel();
        $result = '   <form action = "" method = "post" width = "400px">
                        Please select a range in miles: 
                         <select name = "distance">
                        <option value = "%" >All</option>
                        " . $this->CreateOptionValues($this->GetStoreDistance()) .
                        "</select>
                        <input type = "submit" value ="Search Store">
                        </form>';
                

        return $result;
    }

    function CreateOptionValues(array $valueArray) {//done
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . '<option value="$value">$value</option>';
        }
        return $result;
    }

    function CreateStoreTable($distance) {
        $storeModel = new StoreModel();
        $storeArray = $storeModel->GetStoreByDistance($distance);
        $result = "";
        //database query 
        //
        //Generate a storeTable for each storeEntity in range
        foreach ($storeArray as $key => $store) {
            $result = $result .
                    "<table class = 'coffeeTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$store->image' width='100'></th>
                            <th width = '150px' >Store Name: </th>
                            <td>$store->name</td>
                        </tr>
                        
                        <tr>
                            <th>Distance: </th>
                            <td>$store->distance Miles</td>
                        </tr>          
                     </table>";
        }
        return $result;
    }

    //Returns list of files in a folder.
    function GetImages() {
        //Select folder to scan
        $handle = opendir("Images/Coffee");

        //Read all files and store names in array
        while ($image = readdir($handle)) {
            $images[] = $image;
        }

        closedir($handle);

        //Exclude all filenames where filename length < 3
        $imageArray = array();
        foreach ($images as $image) {
            if (strlen($image) > 2) {
                array_push($imageArray, $image);
            }
        }

        //Create <select><option> Values and return result
        $result = $this->CreateOptionValues($imageArray);
        return $result;
    }

    //<editor-fold desc="Set Methods">
    function InsertItemByname($name, $shoppinglist) {//called by one who generate the shopping list
        array_push($shoppinglist,$name);
    }

    function UpdateCoffee($id) {
        
    }

    function DeleteCoffee($id) {
        
    }
    //</editor-fold>
    
    //<editor-fold desc="Get Methods">
    function GetCoffeeById($id) {
        $coffeeModel = new CoffeeModel();
        return $coffeeModel->GetCoffeeById($id);
    }

    function GetCoffeeByType($type) {
        $coffeeModel = new CoffeeModel();
        return $coffeeModel->GetCoffeeByType($type);
    }

    function GetStoreDistance() {
        $StoreModel = new StoreModel();
        return $StoreModel->GetStoreDistance();
    }
    //</editor-fold>
}

?>
