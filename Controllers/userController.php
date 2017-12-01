<?php
/**
 *
 */
class userController
{
  public $db;
  public $validation;
  public $photo;

  function __construct()
  {
    $this->db=new db();
    $this->validation=new Validation();
    $this->photo= new photo();
  }
  public function login($pseudo,$password) {

    if ($this->db->SignIn($pseudo,$password)) {

      if ($this->validation->adminIds($pseudo,$password)) {
        session_start();
        $_SESSION['error']="";
        header("location:index.php?action=admin");
      }else {
        session_start();
        $_SESSION['error']="";
        header("location:index.php?action=home");
      }

    }else {

      session_start();
      $_SESSION['error']="invalid pseudo / password";
      header("location:index.php?action=login");

    }

  }
    public function signUp($pseudo,$password)
    {
      if ($this->validation->ids($pseudo,$password)) {
        $this->db->signUp($pseudo,$password);
        header("location:index.php?action=login");
      }else {
        header("location:index.php?action=signup");
      }
    }

    public function admin()
    {
      if ($_SESSION["admin"]) {
        $data=$this->photo->getAllImage();
        include "Views/admin.php";
      }else{
        $this->db->logout();
        header("location:index.php?action=login");
      }
    }
    public function edit($id)
    {
      if ($_SESSION["admin"]) {
        $photo=new photo();
        $edit=$photo->getEditPhoto($id);
        include "Views/edit.php";
      }else{
        $this->db->logout();
        header("location:index.php?action=login");
      }

    }
    public function photoForm()
    {
      if ($_SESSION["logged"]) {
        include "Views/upload.php";
      }else{
        header("location:index.php");
      }
    }
    public function home()
    {
    //session_start();
      if ($_SESSION["logged"]) {
        $data=$this->photo->getAllImage();
        //echo "HOME logged";
        include 'Views/home.php';
      }else {
        header("location:index.php");
      }
    }
    public function logout()
    {
      $this->db->logout();
      header("location:index.php");
    }
}


 ?>
