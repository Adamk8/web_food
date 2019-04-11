<?php 
$connect=mysqli_connect('localhost', 'root', '', 'fooddb');
$quickquery="select Name from quickfood";
$quickresult=mysqli_query($connect,$quickquery);
$prepquery="select Name from mealprep";
$prepresult=mysqli_query($connect,$prepquery);
$fancyquery="select Name from fancyfood";
$fancyresult=mysqli_query($connect,$fancyquery);
$potquery="select * from instantpotfood";
$potresult=mysqli_query($connect,$potquery);

function getMeals($result, $count){
    $array = array();
    while($row = $result->fetch_assoc()){
        array_push($array, $row["Name"]);
    }
    $used_index = array();
    $used = FALSE;
    for ($i = 0; $i < $count; $i = $i + 1){
        $index = rand(0,sizeof($array)-1);
        foreach($used_index as $value){
            if ($index == $value){
                $used = True;
            }
        }
        array_push($used_index, $index);
        if (!$used){
            echo $array[$index] . "<br>";
        }
        else {
            $i--;
        }
    $used = FALSE;
    }
}

Echo "Sit Down Meals: <br>";
getMeals($fancyresult, $_POST["fancy"]);
Echo "Quick Meals: <br>";
getMeals($quickresult, $_POST["quickmeals"]);
Echo "Instant Pot Meals: <br>";
getMeals($potresult, $_POST["pots"]);
Echo "Meal Prep Meals: <br>";
getMeals($prepresult, $_POST["mealpreps"]);

?>