<?php
require_once 'DbConnect.php';
class Sql extends DbConnect {
    public function getUser($username) {
       $req = $this->_pdo->prepare('SELECT * FROM user WHERE username = :username ');
       $req->execute([
        ':username' => $username  
       ]);
       $user = $req->fetchAll();//create an array "user"
        if(empty($user)){
            return $user;
        }else {  
            return $user[0];//return first raw 
        }  
    }   
    
    public function band() {
        $req = $this->_pdo->query('SELECT * FROM band');
        $req->execute();
        $band = $req->fetchAll();//create an array "band"
        return $band[0];
    }

    public function update_band($name,$logo,$qui,$facebook,$twitter,$instagram,$youtube,$soundcloud,$bandcamp,$email,$tel) {
        $req = $this->_pdo->prepare(
            'UPDATE band SET
            name = :name,
            logo = :logo,
            qui = :qui,
            facebook = :facebook,
            twitter = :twitter,
            instagram = :instagram,
            youtube = :youtube,
            soundcloud = :soundcloud,
            bandcamp = :bandcamp,
            email = :email,
            tel = :tel
            WHERE band.id = 1
            ');
        $req->execute([
            ':name' => $name,
            ':logo' => $logo,
            ':qui' => $qui,
            ':facebook' => $facebook,
            ':twitter' => $twitter,
            ':instagram' => $instagram,
            ':youtube' => $youtube,
            ':soundcloud' => $soundcloud,
            ':bandcamp' => $bandcamp,
            ':email' => $email,
            ':tel' => $tel
        ]);
    }

    public function newUser($username,$password) {
        $req = $this->_pdo->prepare('INSERT INTO user(username,password) VALUE(:username,:password)');
        $req->execute([
            ':username' => $username,
            ':password' => $password
        ]);
        

    }
 
}