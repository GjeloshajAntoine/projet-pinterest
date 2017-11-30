<?php
include "Controllers/userController.php";
include 'Controllers/photoController.php';
include 'Helper/Validation.php';
include 'Models/db.php';
include 'Models/photo.php';
require 'vendor/autoload.php';

//include "Views/header.php";
session_start();
  use Intervention\Image\ImageManagerStatic as Image;

$action="";
$userController=new userController();
$photoController= new photoController();
extract($_POST);
extract($_GET);

switch($action)
{
  case 'login':
    include "Views/login.php";
  break;
  case 'loginData':
      $userController->login($pseudo,$password);
    break;
  case 'admin':
    $userController->admin();
  break;
  case 'home':
    $userController->home();
  break;
  case 'signup':
    include 'Views/signup.php';
  break;
  case 'signupData':
    echo $pseudo;echo $password;
    $userController->signUp($pseudo,$password);
    break;
  case 'uploadPage':
    $userController->photoForm();
  break;
  case 'updloadData':
    $photoController->upLoad($_FILES["url"],$_POST["titre"],$_POST["description"]);
    break;
    case 'edit':
      $userController->edit($id);
    break;
    case 'editData':
      $photoController->editPhoto($title,$description,$id);
    break;
    case 'deletePhoto':
      $photoController->deletePhoto($id);
    break;
  default:
    include "Views/login.php";
  break;
}

//var_dump($_SESSION);
?>
