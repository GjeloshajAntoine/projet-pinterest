<?php
class db{
  public $db;
  public function __construct()
  {
        try {
            $this->db = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d3fmoqhijn278b', 'bucrjmolqcpjoo', '7488cefd06f0942075be16c3c73fe5ae9106b5e8bb75ecffcf400ce3ea85e3e5');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

  public function signUp($pseudo,$password)
  {
    $req = $this->db->query("SELECT * FROM users where pseudo ='$pseudo'");
    if($req->rowcount()==1)
    {
      return false;
    }
    $req=$this->db->prepare("INSERT INTO users (pseudo,password) VAlUES (?,?)");
    $hashPassword=sha1($password);
    $req->execute([$pseudo,$hashPassword]);
    return true;
  }

  public function SignIn($pseudo,$password)
  {
    $req = $this->db->query("SELECT * FROM users where pseudo ='".$pseudo."'");
    if($req->rowcount()==1)
    {
      $user=$req->fetchObject();
      //var_dump($user);
      $hashPassword=sha1($password);
      var_dump($user->password);
      var_dump($hashPassword);
      var_dump(trim($user->password)==$hashPassword);
      if (trim($user->password)==$hashPassword)
      {
        echo "VRAI";
        session_start();
        $_SESSION['pseudo']=$pseudo;
        $_SESSION["user_id"]=$user->id;
        $_SESSION['logged']=true;
        return true;
      }else{
        echo "FAUX";
        return false;
      }
    }else{
      return false;
    }
  }
  public function logout()
  {
    session_unset();
    session_destroy();
  }





}



?>
