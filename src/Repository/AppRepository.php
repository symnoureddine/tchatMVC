<?php

namespace App\Repository;

 class AppRepository {


  public  function getDbInstance(){

      try 
         {
           $bdd = new \PDO('mysql:host=localhost;dbname=tchatmvc', 'root', '');
         }
         catch(\PDOException $e)
         {
          echo 'Connection failed: '.$e->getMessage();
          die;
          } 
       return $bdd;
   }
   

   public  function ConnectDB($login,$pass){
         
         $pass = sha1($pass); 
         $req = $this->getDbInstance()->prepare('SELECT id FROM user WHERE username = :login AND password = :pass');

         $req->bindParam(':login', $login);
         $req->bindValue(':pass', $pass);
         $req->execute();

         $resultat = $req->fetch();
         if (!$resultat)
         {
          $etat=0;
         }
         else
         { 
 
         $_SESSION['login'] =  $login;
         $_SESSION['passwd'] = $pass;
         $_SESSION['id']=intval($resultat['id']);
         $etat=1;
         }

        return $etat;
      }

     public  function update($val){
         $req = $this->getDbInstance()->prepare('UPDATE user set connected= :val where id= :idd');
         $req->execute(array(
         'idd' => $_SESSION['id'],
         'val'=>$val));
     }

    
    public  function redirect($url){
         header("location: $url",true,302);
         exit();
    }

 
    public  function renderView($template, array $vars = array())
    {
        extract($vars);
        include '../src/Views/'.$template;

    }

     public  function getMessages(){

        $req=$this->getDbInstance()->prepare('SELECT * FROM message m LEFT JOIN user u ON u.id=m.userId order by m.createdAt desc');

        $req->execute();
        return $req->fetchAll();
    }

    public  function getUsersConnected(){
      $req=$this->getDbInstance()->prepare('SELECT u.username FROM user u where u.connected=1 and u.id != :id ');
        $req->execute(array('id'=>$_SESSION['id']));
        return $req->fetchAll();

    }

   public  function chat(){ 
      $this->update(1);
      $this->renderView("chat.php",["messages"=>$this->getMessages(),"username"=>$_SESSION['login'],"connected"=>$this->getUsersConnected()]);
   }

   public  function registerAction($login,$pass){
         
         $req = $this->getDbInstance()->prepare('SELECT id FROM user WHERE username = :pseudo');
         $req->execute(array(
        'pseudo' => $login));
         $resultat = $req->fetch(); 
         if ($resultat)
         {
          $param=["message"=>"username existe déja!","status"=>0];
          $this->renderView('register.php',$param);
         }
         else{
         $req = $this->getDbInstance()->prepare('INSERT INTO user (username,password,connected) VALUES(:user,:pass,:connect)');
         $req->execute(array(
        ':user' => $login,
        ':pass'=>sha1($pass),
        ':connect'=>0));
         $req->closeCursor();
         $param=["message"=>"compte créé","status"=>1];
         $this->renderView('login.php',$param);
         }
  }

      

}