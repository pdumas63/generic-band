<button class="btn">
    <a href="index.php">RETOUR PAGE D'ACCUEIL</a>
</button>

<h2>Nouvel utilisateur</h2>

    <form action="newUser.php" id="newUser-form" method="post">
        <fieldset>                       
            <p>
                <label>Saisir votre Nom d'Utilisateur</label>
                <br>
                <input type="text" class="form-control col-6" id="username" name="username" />
            </p>
            
            <p>
                <label>Saisissez votre nouveau Mot de passe</label>
                <br>
                <input type="password" class="form-control col-6" id="password" name="password" />
            </p>

            <p>
                <label>Confirmez votre nouveau Mot de passe</label>
                <br>
                <input type="password" class="form-control col-6" id="confirmPassword" name="confirmPassword" />
            </p>
           
            <input type="submit" id="submit-login" value="Confirmez !" />
            
            <div id="">       
            </div>            
        </fieldset>
    </form>
