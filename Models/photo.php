<?php
/**
 *
 */
class photo
{

  function __construct()
  {
    try {
        $this->db = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d3fmoqhijn278b', 'bucrjmolqcpjoo', '7488cefd06f0942075be16c3c73fe5ae9106b5e8bb75ecffcf400ce3ea85e3e5');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

  }
  public function newPhoto($url,$title,$description,$user_id)
  {
    $req=$this->db->prepare("INSERT INTO images (url,title,description,user_id) VALUES (?,?,?,?)");
    $req->execute([$url,$title,$description,$user_id]);

  }

  public function getAllImage($search='')
  {
    $search2='%'.$search.'%';
    $req=$this->db->query("SELECT * FROM images WHERE description LIKE '$search2' ");
    $resultat=$req->fetchAll();
    return $resultat;
  }

  public function deletePhoto($photoId)
  {
  /*  $query="DELETE FROM images WHERE photo_id in (";

    for ($i=0; $i < count($photoIdArray); $i++) {
      $query=$query."?";
      if ($i != count($photoIdArray)-1) {
        $query=$query.",";
      }
    }
    $query=$query.")";
    $req=$this->db->prepare($query);
    $req->execute($photoIdArray);*/
    $req=$this->db->prepare("DELETE FROM images WHERE photo_id = ? ");
    $req->execute([$photoId]);
  }
  public function getEditPhoto($photoId)
  {
    $req=$this->db->query("SELECT * FROM images WHERE photo_id='$photoId'");
    $resultat=$req->fetchAll();
    return $resultat[0];
  }
  public function editPhoto($photoId,$title,$description)
  {
    if (empty($title) || empty($description)) {
      return false;
    }else {
      $req=$this->db->prepare("UPDATE images SET title = ? , description= ? WHERE photo_id = ? ");
      $req->execute([$title,$description,$photoId]);
      return true;
    }
  }
}


 ?>
