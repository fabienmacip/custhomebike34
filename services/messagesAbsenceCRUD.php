<?php


require_once(dirname(__FILE__,2).'/modeles/ConnectMe.php');
require_once(dirname(__FILE__,2).'/modeles/Modele.php');
require_once(dirname(__FILE__,2).'/modeles/MessageAbsence.php');
require_once(dirname(__FILE__,2).'/modeles/MessageAbsences.php');
require_once(dirname(__FILE__,2).'/modeles/Administrateur.php');
require_once(dirname(__FILE__,2).'/modeles/Administrateurs.php');





//require_once('../modeles/connectMeAjax.php');
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "custhomebike34";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}



class Controleur2 {
    use Modele; 

    public function insert_data($datedebut, $datefin, $message) {
        echo "APPEL de la function controleur2->insert_data !!!";
    }
}

$controleur2 = new Controleur2($pdo);




// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

//legal input values
 $datedebut = legal_input($_POST['datedebut']);
 $datefin = legal_input($_POST['datefin']);
 $message = legal_input($_POST['msgabs-message']);
 
   
if(!empty($datedebut) && !empty($datefin) && !empty($message)){
    //  Sql Query to insert user data into database table
    $controleur2->insert_data($datedebut, $datefin, $message);
}else{
 echo "All fields are required";
}
 

// // function to insert user data into database table
 function insert_data($fullName,$emailAddress, $city, $country){
 
     global $db;

      $query="INSERT INTO usertable(fullName,emailAddress,city,country) VALUES('$fullName','$emailAddress','$city','$country')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

?>