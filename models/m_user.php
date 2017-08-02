<?php
require '../configs/database.php';
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/10/2017
 * Time: 2:56 PM
 */
class m_user extends DB {




        function checkLogin($data){
            $sql ='SELECT * from users WHERE email="'.$data['email'].'"and password="'.sha1($data['password']).'"';
            $query = $this->execute_query($sql);
//                var_dump($query);
            return $query->fetch_all(MYSQLI_ASSOC);
        }

        function addUserData($data){
            $username=$data['username'];
            $email=$data['email'];
            $phone=$data['phone'];
            $password=sha1($data['password']);
            $created_date=date("d-m-y");
            $update_date=date("00-00-00");
            $sql = "INSERT INTO `users`(`username`, `email`, `phone`, `password`, `created_date`, `updated_date`) VALUES ('$username','$email','$phone','$password','$created_date','$update_date')";


//            $sql ="INSERT INTO users (username,email,phone,password,created_date,update_date)value('$username','$email','$phone','$password','$created_date','$update_date' )";
            $qr = $this->execute_query($sql);
//            var_dump($qr);die('1w3w');
            return $qr;

        }
        function listUser(){
            $sql="SELECT * FROM users";
            $query =$this->execute_query($sql);
            return $query->fetch_all(MYSQLI_ASSOC);
        }
        function deleteUserData($data){
            $id=$data['id'];

            $sql='DELETE FROM users WHERE user_id="'.$id.'"';

            $qr =$this->execute_query($sql);
//            var_dump($qr);die('11');
            return $qr;
        }

}