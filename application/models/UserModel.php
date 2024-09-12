<?php
defined("BASEPATH")or exit("No direct script access allowed");

class UserModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();    
    }

    function AddUser($userdata)
    {
      
        $this->db->insert("user",$userdata);
    }

    function GetUserData()
    {
        $users=$this->db->get("user")->result();
        print_r($users);
    }
}

?>