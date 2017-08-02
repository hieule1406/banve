<?php
session_start();
$a = require __DIR__ . '/../models/m_user.php';

require '../configs/config.php';
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/10/2017
 * Time: 2:54 PM
 */

class c_user{
    public $user;

    function __construct(){
        $this->m_user = new m_user();
        if(!isset($_SESSION['user_info'])){
            $this->showLoginPage();

        }
    }
    function showLoginPage() {

        require_once '../admin/users/login_admin.php';
    }
    function showUserList(){

    }
    function loginAction($data){
       $check = $this->m_user->checkLogin($data);
        if($check){
            $_SESSION['user_info'] = $check[0];
            header('location:?action=listUser');

        }else{
            echo "<script>alert('Login error !');</script>";
        }

    }

    function addUserAction($data){
        $result = $this->m_user->addUserData($data);

        if($result){

            header('location:?action=listUser');
        }
        else{
            echo "<script>alert('List User error !');</script>";
        }
    }

    function listUserAction(){
        $result=$this->m_user->listUser();
        if ($result){
            require_once '../admin/users/list_user.php';
        }else{
            echo "<script>alert('List User error !');</script>";
        }
    }

    function  deleteAction($data){
        $result=$this->m_user->deleteUserData($data);

        if ($result){
            header('location:?action=listUser');
        }else{
            echo "<script>alert('Delete User error !');</script>";
        }


    }

}

$user =new c_user();

if($_REQUEST['action']){
    $action=$_REQUEST['action'];
}else{
    $action='index';
}

switch ($action){

    case 'showLoginPage':
        $user->showLoginPage();
        break;

    case 'showListUser' :
        $user->showUserList();
        break;

    case 'loginAction':
        $user->loginAction($_REQUEST);
        break;

    case 'addUserAction':
        $user->addUserAction($_REQUEST);
        break;
    case 'listUser':
        $user->listUserAction();
        break;
    case 'deletePage':
        $user->deleteAction($_REQUEST);
        break;

    default : $user->showUserList();

}
