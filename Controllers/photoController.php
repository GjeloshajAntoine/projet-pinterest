<?php
/**
 *
 */
 use Intervention\Image\ImageManagerStatic as Image;

class photoController
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
  public function upLoad($photo,$title,$description)
  {
    if ($_SESSION["logged"]) {
      if ($this->validation->photoType($photo["type"])) {
        /*Image::configure(array('driver' => 'imagick'));

        $img = Image::make($photo["tmp_name"]);

        $img->save('big-imageBank/'.$photo["name"]);

        $img->resize(320, 240);

        $img->save('mini-imageBank/'.$photo["name"]);

        $img->resize(75, 75);

        $img->save('admin-imageBank/'.$photo["name"]);
*/
        $tmp=$photo["tmp_name"];
        $name=$photo["name"];
        $type=$photo["type"];
        $filepath1="big-imageBank/".$name;
        $filepath2="mini-imageBank/".$name;
        copy($tmp,$filepath1);
        move_uploaded_file($tmp,$filepath2);
        $this->photo->newPhoto($photo["name"],$title,$description,$_SESSION["user_id"]);

        //model
        header("Location:index.php?action=home");
      }else {
        header("Location:index.php?action=uploadPage&photoType=false");
      }
    }else{
      $this->db->logout();
      //header("Location:index?action=login");
      header("Location:index.php");
    }
  }

  public function editPhoto($title,$description,$id)
  {
    $this->photo->editPhoto($id,$title,$description);
    header("location:index.php?action=admin");
  }

  public function deletePhoto($id)
  {
    $this->photo->deletePhoto($id);
    header("location:index.php?action=admin");
  }



}

 ?>
