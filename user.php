<?php

class User {
    // Properties
    public $id;
    public $name;
    public $last;
    public $email;
    public $password;
    public $roles;

    // Constructor

    function __construct($name,$last,$email,$password) {
        $this->name = $name;
        $this->last = $last;
        $this->email = $email;
        $this->password = $password;
      }
      
  
    // Getters and Setters whitout password bien sur
    function set_id($id) {
      $this->id = $id;
    }
    function get_id() {
      return $this->id;
    }
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_last($last) {
        $this->last = $last;
      }
      function get_last() {
        return $this->last;
      }
      function set_email($email) {
        $this->email = $email;
      }
      function get_email() {
        return $this->email;
      }
      function set_roles($role) {
        $this->roles = $role;
      }
      function get_roles() {
        return $this->roles;
      }

      //to_string function
      function to_string()
      {
        return "{'name':$this->name,'last':$this->last,'email':$this->email}";
      }

      //Check if valid
      function check()
      {
        
        if(strlen($this->name)<3)
        {
            // echo 'la';
            return false;
        }
        // if(strlen($this->last)<3)
        // {
        //     // echo 'lo';
        //     return false;
        // }
        if(strlen($this->password)<3)
        {
            // echo 'li';
            return false;
        }
        $mail = explode("@",$this->email);
        $count=0;
        foreach($mail as $value){
            $count+= 1;
        }
        echo $count;
        if($count<2)
        {
            // echo 'ah';
            return false;
        }
        // else
        // {
        //     foreach ($mail as $value) {
        //         if(strlen($value)<3)
        //             {
        //                 return false;
        //             }
        //       }
        // }
        return true;
      }
  }