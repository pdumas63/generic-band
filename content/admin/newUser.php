<?php
if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword']) ){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmPassword'])){
        echo "Veuillez remplir tous les champs";
    }else {
        require_once '../sql/Sql.php';
        $sql = new Sql;
        $user = $sql->getUser(htmlspecialchars( $_POST['username']));
        if(!empty($user)) {
            echo "Ce nom existe déjà !";
        }else{   
            if( $_POST['password'] == $_POST['confirmPassword']){ // Si les infos correspondent...                
                $sql->newUser(htmlspecialchars($_POST['username']),password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT ));
                header('Location: index.php');
            }
            else{ // Sinon
                echo "Erreur dans l'identifiant ou le mot de passe";
            }
        } 
    }
}


?>