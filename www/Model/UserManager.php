<?php

class UserManager {
    private $db;

    public function __construct($db1) {
        $this->$db = $db1;
    }

    public function create(User $user) {
        $req = $this->$db->prepare(
            "INSERT INTO users ( lastName, firstName, email, address, postalCode, city, password, admin )
            VALUES ( :lastName, :firstName, :email, :address, :cp, :city, :password, 0 )"
        );
        $req->bind_param(
            array(
                'lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'cp' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'password' => $user->getPassword()
            )
        );

        $req->execute();
    }

    public function login($email, $password) {

    }

    public function update($user) {

    }

    public function delete($user) {

    }

    public function findOne($id) {
        
    }

    public function findAll() {
        $req = $this->db->prepare(
            'SELECT * FROM users'
        );
        $req->execute();
        return $req->fetchAll();
    }
} 