<?php 
require_once("config.php"); 
if(isset($_POST['sublogin'])){ 
$login = $_POST['login_var'];
$password = $_POST['password'];
$query = "select * from users where ( username='$login' OR email = '$login')";
$res = $db->query($query);
$numRows= $res->fetchColumn() > 0;
if($numRows  == 1){
        $row = $res->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password,$row['password'])){
           $_SESSION["login_sess"]="1"; 
             $_SESSION["login_email"]= $row['email'];
  header("location:index.php");
        }
        else{ 
     header("location:login.php?loginerror=".$login);
        }
    }
    else{
  header("location:login.php?loginerror=".$login);
    }
}
?>