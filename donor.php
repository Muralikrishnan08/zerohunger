<?php
$username = $_POST['donor-name'];
$address = $_POST['donor-address'];
$phone= $_POST['donor-contact'];
$quantity = $_POST['donor-quantity'];
$food= $_POST['FOOD'];
$food_menu = $_POST['menu'];
$time = $_POST['pick'];
if(!empty($username) && !empty($address) && !empty($phone) && !empty($quantity) && !empty($food) && !empty($food_menu) && !empty($time)){}
else{
    echo "All field are required";
    die();
}
$host="localhost";
$dbname="donor";
$conn = new mysqli($host,$dbname,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    die('connect error('.mysqli_connect_error() .''. mysqli_connect_error());
}else{
    
}
?>