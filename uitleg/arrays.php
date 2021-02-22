<?php
$job = "ICT'ers"; //string
$year = 2019; //integer
$procentage = 17.1; //float
$subjects =["internet","computers","software"]; //array
$subjects = array("internet","computers","software"); //array
$skills = false; //boolean

//if($skills == true && $year == 2019) //beide waar
if($skills == true || $year == 2019)  //een van de 2 waar
{
    echo "skills is true";
}
else {
    echo "skills is false";
}
?>

