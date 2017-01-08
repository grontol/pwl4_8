<?php

require_once('../lib/DBClass.php');

class User
{

    private $db;

    public function User()
    {
        $this->db = new DBClass();
        $this->db->connect();
    }
    public function createUser ($nama, $username, $pass){
        $query = "INSERT INTO user (nama, username, password)
        VALUES ('$nama', '$username','$pass')";
        $this->db->putRows($query);
    }
    public function readUser ($id){
        $_query = "SELECT * FROM user WHERE id_user = $id";
        return $this->db->getRow($_query);
    }
    public function updateUser ($id, $data){
        $nama = $data['input_name'];
        $password = $data ['input_password'];

        $query = "UPDATE user set nama='$nama',password='$password' ";
        $query.= "WHERE id_user=$id";
        $this->db->putRows($query);
    }
    public function deleteUser ($id){
        $sql = "DELETE FROM user WHERE id_user = $id";
        $this->db->putRows($sql);
    }
    public function login($user,$pass){
    $query = "SELECT * FROM user WHERE username='$user' and password='$pass'";
    $q = $this->db->read($query);

    if (mysqli_num_rows($q)>0) {
        $h = mysqli_fetch_array($q);
        $idUser = $h['id_user'];
        return $idUser;
    }
    else
        return -1;
    }

}