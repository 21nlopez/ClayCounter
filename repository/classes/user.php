<?php
namespace USER;
include ("../../api/dao.php");
class User {
    public function __construct ($idx) {
        $data = readUser($idx);
        $this->idx = $data['idx'];
        $this->email = $data['email'];
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
        $this->username = $data['username'];
        $this->password = $data['password'];
    }

    public function getName () {
        return $this->firstName;
    }
}