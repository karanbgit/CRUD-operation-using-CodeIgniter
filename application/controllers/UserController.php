<?php

defined("BASEPATH") Or ("No Direct Script Access Allowed");
class UserController extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    // }

    function AddUserForm()
    {
        $this->load->view("UserForm");
    }

    function RegisterUser()
    {
        // $name=$this->input->post("name");
        // $age=$this->input->post("age");
        // $contact=$this->input->post("contact");
        // print_r($age);
        // print_r($name);
        // print_r($contact);
        $formdata=$this->input->post();
        $data=array("name"=>$formdata["name"],"age"=>$formdata["age"]);
      
        unset($formdata["contact"]);
      
        $this->load->model("UserModel");
        $this->UserModel->AddUser($data);
        echo "Data Submitted Successfully";
    }

    function Getdb()
    {
        $this->load->model("UserModel");
        $this->UserModel->GetUserData();
    }
}
?>