<?php


namespace App\Handlers;

use  App\Repository\AppRepository;

class UserHandler
{


    public function login($user){

         $repository =  new AppRepository();

         $password = sha1($user->getPassword()); 
         $username=$user->getUsername();
         // Vérification des identifiants
         $req = $repository->getDbInstance()->prepare('SELECT id FROM user WHERE username = :login AND password = :pass');

         $req->bindParam(':login', $username);
         $req->bindValue(':pass', $password);
         $req->execute();

         $resultat = $req->fetch();
         if (!$resultat)
         {
          $etat=0;
         }
         else
         { 
 
         $_SESSION['login'] =  $user->getUsername();
         $_SESSION['passwd'] = $password;
         $_SESSION['id']=intval($resultat['id']);
         $etat=1;
         }

        return $etat;

    }
   

    
}