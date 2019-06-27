<?php

namespace Controllers;
use Model\User;
session_start();
class UserController extends Controller

{
    public function viewUsers()
    {
        $params =[
            "users"=>User::getAll()
        ];
        $this->view('/view/users/ViewUser.php',$params);
    }

    public function addUser()
    {


        if($_SERVER['REQUEST_METHOD']==="POST")
        {

            $params =[
                'name'=>$this->post("name"),
                'surname'=>$this->post("surname"),
                'position'=>$this->post("position"),
                'email'=>$this->post("email"),
                'password'=>$this->post("password")

            ];
            $user=new User($params);
            $user->add();
           $this->redirectLast();
            $_SESSION['message'] = 'User added successfully';



        }
        elseif ($_SERVER['REQUEST_METHOD']==="GET")
        {
            $this->redirect('view/users/ViewUser.php');
        }else
            {
            $_SESSION['message'] = 'Cannot add user';
        }
    }
    public function editUser()
    {

        if($_SERVER['REQUEST_METHOD']==="POST")
        {
        $params=[


            'id'=>$this->get("id"),
            'name' =>$this->post("name"),
            'surname' => $this->post("surname"),
            'position' => $this->post("position"),
            'email' => $this->post("email"),
            'password' => $this->post("password")

                ];
            $user= new User($params);
           $user->edit($this->get("id"));

           $this->redirectLast();
            $_SESSION['message'] = 'User updated successfully';



        }
        elseif ($_SERVER['REQUEST_METHOD']==="GET"){
            User::findById($_GET['id']);
            $this->redirect('view/users/ViewUser.php');
            $this->redirectLast();
        }else{
            $_SESSION['message'] = 'Cannot update user';
        }
    }


    public function delete()
    {
        User::delete($_GET['id']);
        $this->redirectLast();
        $_SESSION['message'] = 'User deleted successfully';
    }
}