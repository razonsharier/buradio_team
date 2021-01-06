<?php
include "../db/db.php";

if (isset($_POST["mobile"]) && isset($_POST["password"])) {

$mobile = mysqli_real_escape_string($db,$_POST['mobile']);
$password = mysqli_real_escape_string($db,$_POST['password']);


if ($mobile != "" && $password != ""){

    $sql_query = "SELECT count(*) as cntUser FROM members WHERE mobile='".$mobile."' and password='".$password."'";
    $result = mysqli_query($db,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        echo 1;
    }else{
        echo 0;
    }

}
    
    }

if (!isset($_POST["mobile"]) && !isset($_POST["password"])) {
echo "\n\n
don't do this. only servers can access php codes. you can google it if you don't believe in me. \n\n
you are wasting your valuable time. use your time to do valuable things and it will bring you success oneday. \n\n
thanks for reading, \n\n
- Sharier Himu 
\n\n";
}

?>
