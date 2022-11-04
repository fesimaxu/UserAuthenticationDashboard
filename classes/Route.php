<?php

include_once 'UserAuth.php';


class FormController extends UserAuth{

    private $fullnames;
    private $email;
    private $password;
    private $confirmPassword;
    private $country;
    private $gender;

    function __construct()
    {
        $db = new Dbh();
        $db->connect(); 
    }

    public function handleForm(){

        switch(true){
            case isset($_POST['register']);

                $this->fullnames = $_POST['fullnames'];
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->confirmPassword = $_POST['confirmPassword'];
                $this->country = $_POST['country'];
                $this->gender = $_POST['gender'];
                $this->register($this->fullnames,$this->email,$this->password,$this->confirmPassword,$this->country,$this->gender);

                break;
            case isset($_POST['login']);
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->login($this->email,$this->password);

                break;
            case isset($_POST['logout']);
                
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->logout($this->email,$this->password);

                break;
            case isset($_POST['reset']);
                
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->updateUser($this->email,$this->password);
                
                break;
            case isset($_POST['delete']);
            
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->deleteUser($this->email,$this->password);
                
                break;
            case isset($_Post['all']);
                $this->getAllUsers();
                break;
            default:
            echo "Registration not Successful";
            break;
            
        }
    }



}