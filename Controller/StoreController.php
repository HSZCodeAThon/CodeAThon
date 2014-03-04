<?php

require ("Model/StoreModel.php");
require ("Entities/ShoppingListEntity.php");

//Contains non-database related function for the Coffee page
class StoreController {

    public $shoppinglistentity;
    function CreateShoppingList(array $pathlist)//half done
    {
        $this->shoppinglistentity = new ShoppingListEntity();
        $storemodel = new StoreModel();
        $namelist = array();
        $namelist = $storemodel->GetItemListByPathList($pathlist);
        foreach ($namelist as $name)
        {
            array_push($this->shoppinglistentity->shoppinglist,$name);
        }
        $result=array();
        foreach ($this->shoppinglistentity->shoppinglist as $name)
        {
                array_push($result, $name);
            //$result =$result."$name";
        }
        return $result;
    }
    function CreateStoreDropdownList() {
        $StoreModel = new StoreModel();
        $result = "<form action = '' method = 'post' width = '400px'>
                    Please select a range in miles: 
                   <select name = 'distance'>
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($this->GetStoreDistance()) .
                    "</select>
                     <input type = 'submit' value = 'Search Store' />
                    </form>";

        return $result;
    }
        function DisplayShoppingList()
    {
        $storeController = new StoreController();
        $result = "";
        foreach ($this->shoppinglistentity->shoppinglist as $item)
        {
            $i++;
            $result = $result.
                    "<table>"."<tr>".
                    "<th>$i</th>".
                    "<th>$item</th>"
                    . "</tr>"
                    . "</table>";
        }
        $content ="";
        $content = $result;
        $content = "good";
        return $content;
    }
    function GetShoppingListentity()
    {
        return $this->shoppinglistentity;
    }
    function CreateOptionValues(array $valueArray) {//done
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }
        return $result;
    }

    function CreateStoreTable($distance) {//done
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
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$store->image' /></th>
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
    function GetPriceListByNameList(array $namelist)//half done
    {
        $bilopricelist = array();
        $foodlionpricelist = array();
        $publixpricelist = array();
        $storeModel = new StoreModel();
        $pricelist = array();
        foreach ($namelist as $name)
        { 
            $price = $storeModel->GetPriceofStoresByName($name);
            foreach ($price as $key => $value)
            {
                if(($key == "bilo"))
                {
                   // echo "$key" . " ". $value."\n";
                    array_push($bilopricelist, $value);
                }
                else if(($key=="foodlion"))
                {
                   // echo "$key" . " ". $value."\n";
                    array_push($foodlionpricelist, $value);
                }
                else if(($key=="publix")) {
                   // echo "$key" . " ". $value."\n";
                    array_push($publixpricelist, $value);
                }
            }
        } 
        foreach ($bilopricelist as $price)
        {
           // echo "$price"."doo\n";
        }
        // "name" -> price;
        array_push($pricelist,$bilopricelist, $foodlionpricelist, $publixpricelist);
        return $pricelist;
    }
    function GetOptimalCostFromOneStore(array $pricelist)// $pricelist contains several pricelist in term of store
    {
        $storeController = new StoreController();
        $optimalSum = 100000;
        $optimalStoreCost = array();
        $index = 0;
        $optimalIndex =0;
        foreach ($pricelist as $prices) //$prices itself is an array;
        {   $index ++ ;         
            $sum = $storeController->GetSumByList($prices);
            if($sum<$optimalSum)
            {
                $optimalSum = $sum;
                $optimalIndex = $index;
            }
        }
        if($optimalIndex == 1)
        {
            $optimalStoreCost["bilo"] = $optimalSum;
        }
        else if($optimalIndex = 2)
        {
            $optimalStoreCost["foodlion"] =$optimalSum;
        }
        else if($optimalIndex == 3)
        {
            $optimalStoreCost["publix"] = $optimalSum;
        }
        else {
            echo "Index error!";
        }
        foreach ($optimalStoreCost as $key => $value)
        {
            //echo "<br>SINGLE SOTRE=>".$key. " total is ".$value;
        }
        return $optimalStoreCost;
    }
    
    function GetSumByList($prices)
    {
        
        $sum = 0;
        foreach ($prices as $price)
        {
            $sum = $sum + $price;
        }
        return $sum;
    }
    
    // Miltiple store algo.
    
    function GetChoiceWithOptimalCostFromMultiStores(array $namelist)
    {
        //$storeModel = new $StoreModel();
        $storemodel = new StoreModel();

        $storebilo = array();
        $storefoodlion = array();
        $storepublix = array();
        $pricesofaitem = array();
        $optimalCostOverall = 0;
        foreach ($namelist as $name)
        {
             $priceofaitem = $storemodel->GetPriceOfStoresByName($name);
             $min = 100000;
             $min_key = "";
             foreach($priceofaitem as $key => $value)
             {
                 if($value<$min)
                 {
                     $min_key = $key;
                     $min = $value;
                 }
             }
             $optimalCostOverall += $min;
             if($min_key == "bilo")
             {
                 $storebilo["$name"] = $min;
             }
             else if($min_key == "foodlion")
             {
                 $storefoodlion["$name"] = $min;
             }
             else if($min_key == "publix")
             {
                 $storepublix["$name"] = $min;
             }
             else {
                 echo "store are not in the database";
             }
        }
        $result = array();
        array_push($result, $storebilo, $storefoodlion,$storepublix);
        
        return $result;
    }
    function GetOptimalCostFromMultiChoice(array $multichoice)
    { 
        $i = 0;
        $globalOptimal = 0;
        $store = array("bilo","foodlion","publix");
        foreach ($multichoice as $eachStore)
        {
            //echo "<br>".$store[$i++]."[";
            foreach($eachStore as $key => $value)
            {
             //   echo $key.",";
                $globalOptimal += $value;
            }
           // echo "]";
        }
       // echo $globalOptimal;
        return $globalOptimal;
    }
    
    
    
    //</editor-fold>
}

?>
