<?php
include "Controllers/userController.php";
include 'Controllers/photoController.php';
include 'Helper/Validation.php';
include 'Models/db.php';
include 'Models/photo.php';
require 'vendor/autoload.php';
  use Intervention\Image\ImageManagerStatic as Image;

session_start();
$_SESSION["logged"]=true;
$_SESSION["user_id"]=1;


$action="";
$userController=new userController();
$photoController= new photoController();
extract($_POST);
extract($_GET);

switch($action)
{
  case 'login':
    $userController->login($pseudo,$password);
  break;
  case 'admin':
    $userController->admin();
  break;
  case 'home':
    $userController->home();
  break;
  case 'signup':
    //include 'Views/signup.php';
    $userController->signUp($pseudo,$password);
  break;
  case 'uploadPage':
    $userController->photoForm();
  break;
  case 'updloadData':
    $photoController->upLoad($_FILES["url"],$_POST["titre"],$_POST["description"]);
    break;
  default:
    include "Views/login.php";
  break;
}

?>
