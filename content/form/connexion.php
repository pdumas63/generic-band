<?php
session_start();
 /**
 * J'ai créé deux variables : $username et $password dont les champs sont stockés en BDD
 */   

if( isset($_POST['username']) && isset($_POST['password']) ){
    if(empty($_POST['username']) || empty($_POST['password'])){
        echo "Veuillez remplir tous les champs";
    }else {
        require_once '../sql/Sql.php';
        $sql = new Sql;
        $user = $sql->getUser(htmlspecialchars( $_POST['username']));
        if(empty($user)) {
            echo "Erreur dans l'identifiant ou le mot de passe";
        }else{   
            if(password_verify($_POST['password'], $user['password'])) { // Si les infos correspondent...                
                $_SESSION['user'] = $_POST['username'];
                header('Location: ../admin');
            }
            else{ // Sinon
                echo "Erreur dans l'identifiant ou le mot de passe";
            }
        } 
    }
}
?>