<?php
  class User
  {
    private $username;
    private $password;

    public function __construct(string $username, string $password) 
    {
      $this->username = $username;
      $this->password = $password;    
    }

    public function getPassword()
    {
      return $this->password;
    }

    public function getUsername()
    {
      return $this->username;
    }



  }