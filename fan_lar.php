<?php 
//ajax forma maydoni uchun ishlatiladi.
include('db.php');

$rr= $_POST['sin_id'];


$outop ='';

$db = "SELECT * FROM `fanlar` WHERE `sinf_id` = '$rr'  ORDER BY fanlar";
$natija = mysqli_query($conn,$db) or die("Query ishlamadi");
$outop = '<option value =" " selected disabled > <p style="color:red;"> Fanni tanalash mumkin </p> </option>';

while( $row = mysqli_fetch_array($natija)){
  $outop .= '<option  value= "'.$row["fan_id"].'" > '.$row["fanlar"].'</option>';
}
 
    echo $outop;

?>