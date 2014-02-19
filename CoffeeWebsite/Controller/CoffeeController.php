<script>
//Display a confirmation box when trying to delete an object
function showConfirm(id)
{
    // build the confirmation box
    var c = confirm("Are you sure you wish to delete this item?");
    
    // if true, delete item and refresh
    if(c)
        window.location = "CoffeeOverview.php?delete=" + id;
}
</script>

<?php
require ("Model/CoffeeModel.php");

//Contains non-database related function for the Coffee page
class CoffeeController {

    function CreateOverviewTable() {
        $result = "
            <table class='overViewTable'>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Id</b></td>
                    <td><b>Name</b></td>
                    <td><b>Family</b></td>
                    <td><b>Sex</b></td>
                    <td><b>Parents</b></td>
                    <td><b>Country</b></td>
                </tr>";

        $coffeeArray = $this->GetCoffeeByType('%');

        foreach ($coffeeArray as $key => $value) {
            $result = $result .
                    "<tr>
                        <td><a href='CoffeeAdd.php?update=$value->id'>Update</a></td>
                        <td><a href='#' onclick='showConfirm($value->id)'>Delete</a></td>
                        <td>$value->id</td>
                        <td>$value->name</td>
                        <td>$value->family</td>    
                        <td>$value->sex</td> 
                        <td>$value->parents</td>
                        <td>$value->country</td>   
                    </tr>";
        }

        $result = $result . "</table>";
        return $result;
    }

    function CreateCoffeeDropdownList() {
        $coffeeModel = new CoffeeModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a panda family: 
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($this->GetCoffeeTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }

    function CreateCoffeeTables($types) {
        $coffeeModel = new CoffeeModel();
        $coffeeArray = $coffeeModel->GetCoffeeByType($types);
        $result = "";

        //Generate a coffeeTable for each coffeeEntity in array
        foreach ($coffeeArray as $key => $coffee) {
            $result = $result .
                    "<table class = 'coffeeTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$coffee->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$coffee->name</td>
                        </tr>
                        
                        <tr>
                            <th>Family: </th>
                            <td>$coffee->family</td>
                        </tr>
                        
                        <tr>
                            <th>Sex: </th>
                            <td>$coffee->sex</td>
                        </tr>
                        
                        <tr>
                            <th>Parents: </th>
                            <td>$coffee->parents</td>
                        </tr>
                        
                        <tr>
                            <th>Residence: </th>
                            <td>$coffee->country</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$coffee->review</td>
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
    function InsertCoffee() {
        $name = $_POST["txtName"];
        $type = $_POST["ddlFamily"];
        $sex = $_POST["txtSex"];
        $parents = $_POST["txtParents"];
        $country = $_POST["txtCountry"];
        $image = $_POST["ddlImage"];
        $review = $_POST["txtReview"];

        $coffee = new CoffeeEntity(-1, $name, $type, $sex, $parents, $country, $image, $review);
        $coffeeModel = new CoffeeModel();
        $coffeeModel->InsertCoffee($coffee);
    }

    function UpdateCoffee($id) {
        $name = $_POST["txtName"];
        $type = $_POST["ddlFamily"];
        $sex = $_POST["txtSex"];
        $parents = $_POST["txtParents"];
        $country = $_POST["txtCountry"];
        $image = $_POST["ddlImage"];
        $review = $_POST["txtReview"];

        $coffee = new CoffeeEntity($id, $name, $type, $sex, $parents, $country, $image, $review);
        $coffeeModel = new CoffeeModel();
        $coffeeModel->UpdateCoffee($id, $coffee);
    }

    function DeleteCoffee($id) 
    {
        $coffeeModel = new CoffeeModel();
        $coffeeModel->DeleteCoffee($id);
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

    function GetCoffeeTypes() {
        $coffeeModel = new CoffeeModel();
        return $coffeeModel->GetCoffeeTypes();
    }

    //</editor-fold>
}
?>
