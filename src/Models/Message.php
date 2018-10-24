<?php

namespace App\Models;

use \DateTime;
use App\Repository\AppRepository;


class Message{

	protected $message;
	protected $createdAt;
	protected $userId;


	/**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return  $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    
    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return  $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return  $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
    
    public function add($Mes,$id){
        $repository = new AppRepository();

        $date=new DateTime("now");
        $req = $repository->getDbInstance()->prepare('INSERT INTO message (message,createdAt,userId) VALUES(:mes,:dat,:id)');
        $req->execute(array(
        ':mes' => $Mes,
        ':dat' => $date->format('Y-m-d H:i:s'),
        ':id' => $id
          ));
        $req->closeCursor();
    }

 
}