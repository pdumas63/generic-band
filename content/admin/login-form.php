<h2>Connectez-vous !</h2>

    <form action="connexion.php" id="login-form" method="post">
        <fieldset>
            <p>
                <label>Nom d'utilisateur</label>
                <br>
                <input type="text" class="form-control col-6" id="username" name="username" />
            </p>
            
            <p>
                <label>Mot de passe</label>
                <br>
                <input type="password" class="form-control col-6" id="password" name="password" />
            </p>
           
            <input type="submit" id="submit-login" value="Se connecter !" />
            
            <div id="resultat-login">       
            </div>
        </fieldset>
    </form>
